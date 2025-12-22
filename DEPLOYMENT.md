# Vision Plus Wealth - Production Deployment Guide

## Prerequisites

1. **Linux Server** (Ubuntu 20.04+ or similar)
2. **Docker** (version 20.10+)
3. **Docker Compose** (version 2.0+)
4. **Git**
5. **Minimum 1GB RAM, 1 CPU core**
6. **Port 8003 available**

---

## Quick Start Deployment

### 1. Install Docker on Linux Server

```bash
# Update package index
sudo apt-get update

# Install required packages
sudo apt-get install -y apt-transport-https ca-certificates curl software-properties-common

# Add Docker's official GPG key
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg

# Add Docker repository
echo "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

# Install Docker
sudo apt-get update
sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin

# Start Docker service
sudo systemctl start docker
sudo systemctl enable docker

# Add your user to docker group (optional, to run without sudo)
sudo usermod -aG docker $USER
```

### 2. Clone Your Repository

```bash
# Create application directory
mkdir -p /var/www
cd /var/www

# Clone your repository (replace with your actual repo URL)
git clone https://github.com/yourusername/vision_plus_wealth.git
cd vision_plus_wealth
```

### 3. Configure Environment

```bash
# Copy environment file
cp .env.example .env

# Edit environment variables
nano .env
```

#### Required Environment Variables:

```env
APP_NAME="Vision Plus Wealth"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=http://your-server-ip:8003

LOG_CHANNEL=stack
LOG_LEVEL=error

# Redis Configuration
REDIS_HOST=redis
REDIS_PASSWORD=CHANGE_THIS_REDIS_PASSWORD
REDIS_PORT=6379

# Cache Configuration
CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
SESSION_LIFETIME=120

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@visionpluswealth.com"
MAIL_FROM_NAME="${APP_NAME}"
```

### 4. Deploy Application

```bash
# Build Docker images
./deploy.sh build

# Start the application
./deploy.sh start
```

### 5. Generate Application Key

```bash
# Generate Laravel application key
docker-compose exec app php artisan key:generate
```

### 6. Verify Deployment

```bash
# Check container status
./deploy.sh status

# View logs
./deploy.sh logs
```

Visit: `http://your-server-ip:8003`

---

## Deployment Commands

### Build
```bash
./deploy.sh build
```
Builds Docker images from scratch.

### Start
```bash
./deploy.sh start
```
Starts all containers and runs migrations.

### Stop
```bash
./deploy.sh stop
```
Stops all running containers.

### Restart
```bash
./deploy.sh restart
```
Restarts all containers.

### Logs
```bash
./deploy.sh logs
```
Views real-time logs from all containers.

### Status
```bash
./deploy.sh status
```
Shows status of all containers.

---

## Manual Docker Commands

### Build Specific Service
```bash
docker-compose build app
```

### Run Artisan Commands
```bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:clear
docker-compose exec app php artisan view:clear
```

### Access Container Shell
```bash
docker-compose exec app sh
```

---

## Firewall Configuration

```bash
# Allow port 8003
sudo ufw allow 8003/tcp

# Check firewall status
sudo ufw status
```

---

## SSL/HTTPS Setup (Recommended for Production)

### Option 1: Nginx Reverse Proxy with Let's Encrypt

```bash
# Install Certbot
sudo apt-get install -y certbot python3-certbot-nginx

# Install Nginx
sudo apt-get install -y nginx

# Configure Nginx reverse proxy
sudo nano /etc/nginx/sites-available/visionpluswealth
```

**Nginx Configuration:**
```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;

    location / {
        proxy_pass http://localhost:8003;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection 'upgrade';
        proxy_set_header Host $host;
        proxy_cache_bypass $http_upgrade;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

```bash
# Enable site
sudo ln -s /etc/nginx/sites-available/visionpluswealth /etc/nginx/sites-enabled/

# Test Nginx configuration
sudo nginx -t

# Restart Nginx
sudo systemctl restart nginx

# Get SSL certificate
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

---

## Monitoring & Maintenance

### View Container Resource Usage
```bash
docker stats
```

### Check Application Health
```bash
curl http://localhost:8003/health
```

### Cleanup Old Images
```bash
docker system prune -a
```

### Update Application
```bash
# Pull latest code
git pull origin main

# Rebuild and restart
./deploy.sh build
./deploy.sh restart
```

---

## Troubleshooting

### Container Won't Start
```bash
# Check logs
docker-compose logs app

# Check specific service
docker-compose logs redis
```

### Permission Issues
```bash
# Fix storage permissions
docker-compose exec app chmod -R 775 storage bootstrap/cache
docker-compose exec app chown -R www-data:www-data storage bootstrap/cache
```

### Clear All Caches
```bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan optimize:clear
```

---

## Performance Optimization

### Enable OPcache (Already configured)
OPcache is pre-configured in `docker/php/opcache.ini`

### Application Optimization
```bash
docker-compose exec app php artisan optimize
```

### Redis Optimization
Redis is configured with AOF persistence for data durability

---

## Security Best Practices

1. **Change Redis password** in `.env` file
2. **Use strong APP_KEY** (generated automatically)
3. **Disable debug mode** in production (`APP_DEBUG=false`)
4. **Use HTTPS** with valid SSL certificate
5. **Regular backups** of storage files
6. **Keep Docker images updated**
7. **Monitor logs** for suspicious activity
8. **Use firewall** to restrict access
9. **Regular security updates** on host OS

---

## Backup Strategy

### Automated Daily Backup Script

Create: `/usr/local/bin/backup-vision.sh`

```bash
#!/bin/bash
BACKUP_DIR="/backup/vision_plus_wealth"
DATE=$(date +%Y%m%d_%H%M%S)

mkdir -p $BACKUP_DIR

# Backup storage files
tar -czf $BACKUP_DIR/storage_$DATE.tar.gz /var/www/vision_plus_wealth/storage

# Backup Redis data (optional)
docker-compose -f /var/www/vision_plus_wealth/docker-compose.yml exec -T redis redis-cli --no-auth-warning -a ${REDIS_PASSWORD} SAVE
cp -r /var/www/vision_plus_wealth/redis_data $BACKUP_DIR/redis_$DATE

# Keep only last 7 days
find $BACKUP_DIR -type f -mtime +7 -delete
find $BACKUP_DIR -type d -name "redis_*" -mtime +7 -exec rm -rf {} +

echo "Backup completed: $DATE"
```

```bash
# Make executable
chmod +x /usr/local/bin/backup-vision.sh

# Add to crontab
crontab -e
# Add line: 0 2 * * * /usr/local/bin/backup-vision.sh
```

---

## Support

For deployment issues, contact your DevOps team or refer to:
- Docker Documentation: https://docs.docker.com/
- Laravel Documentation: https://laravel.com/docs
- Nginx Documentation: https://nginx.org/en/docs/

---

## Production Checklist

- [ ] Environment variables configured
- [ ] Redis password set
- [ ] APP_DEBUG set to false
- [ ] APP_ENV set to production
- [ ] APP_KEY generated
- [ ] SSL certificate installed (if using domain)
- [ ] Firewall configured
- [ ] Backup script configured
- [ ] Application tested and accessible
- [ ] Logs reviewed for errors
- [ ] Health check endpoint working
- [ ] Email configuration tested
- [ ] Storage permissions correct

---

**Deployment Date:** [Record your deployment date]
**Version:** 1.0.0
**Port:** 8003
