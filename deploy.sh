#!/bin/bash

# Vision Plus Wealth - Production Deployment Script
# Usage: ./deploy.sh [start|stop|restart|build|logs|status]

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to print colored messages
print_message() {
    echo -e "${GREEN}[DEPLOY]${NC} $1"
}

print_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

print_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

# Check if Docker is installed
check_docker() {
    if ! command -v docker &> /dev/null; then
        print_error "Docker is not installed. Please install Docker first."
        exit 1
    fi

    if ! command -v docker-compose &> /dev/null && ! docker compose version &> /dev/null; then
        print_error "Docker Compose is not installed. Please install Docker Compose first."
        exit 1
    fi
}

# Check if .env file exists
check_env() {
    if [ ! -f .env ]; then
        print_error ".env file not found!"
        print_message "Creating .env from .env.example..."
        if [ -f .env.example ]; then
            cp .env.example .env
            print_warning "Please configure your .env file before deploying."
            exit 1
        else
            print_error ".env.example not found either. Cannot proceed."
            exit 1
        fi
    fi
}

# Build Docker images
build() {
    print_message "Building Docker images..."
    docker-compose build --no-cache
    print_message "Build completed successfully!"
}

# Start containers
start() {
    print_message "Starting containers..."
    docker-compose up -d

    # Wait for services to be healthy
    print_message "Waiting for services to be ready..."
    sleep 10

    # Clear and cache config
    print_message "Optimizing application..."
    docker-compose exec -T app php artisan config:cache
    docker-compose exec -T app php artisan route:cache
    docker-compose exec -T app php artisan view:cache

    # Create storage link
    print_message "Creating storage link..."
    docker-compose exec -T app php artisan storage:link || true

    print_message "Application started successfully!"
    print_message "Access your application at: http://your-server-ip:8003"
}

# Stop containers
stop() {
    print_message "Stopping containers..."
    docker-compose down
    print_message "Containers stopped successfully!"
}

# Restart containers
restart() {
    print_message "Restarting containers..."
    stop
    start
}

# View logs
logs() {
    docker-compose logs -f
}

# Show status
status() {
    print_message "Container status:"
    docker-compose ps
}

# Main script
case "$1" in
    build)
        check_docker
        check_env
        build
        ;;
    start)
        check_docker
        check_env
        start
        ;;
    stop)
        check_docker
        stop
        ;;
    restart)
        check_docker
        check_env
        restart
        ;;
    logs)
        check_docker
        logs
        ;;
    status)
        check_docker
        status
        ;;
    *)
        echo "Usage: $0 {build|start|stop|restart|logs|status}"
        echo ""
        echo "Commands:"
        echo "  build   - Build Docker images"
        echo "  start   - Start the application"
        echo "  stop    - Stop the application"
        echo "  restart - Restart the application"
        echo "  logs    - View application logs"
        echo "  status  - Show container status"
        exit 1
        ;;
esac

exit 0
