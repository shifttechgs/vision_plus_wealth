@extends("layouts.master")
@section("content")
    <!--===== BREADCRUMB & HEADER STARTS =======-->
    <!--===== HERO AREA STARTS =======-->
    <div class="inner-pages-section-area" style="background-image: url(assets/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="inner-header text-center">
                        <h2>Contact Us</h2>
                        <div class="space24"></div>
                        <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== BREADCRUMB & HEADER ENDS =======-->

    <!--===== MAIN CONTACT SECTION STARTS =======-->
    <div style="padding: 100px 0; background: #f8f9fa;" class="contact4-section-area">
        <div class="container">
            <div class="row align-items-stretch" style="gap: 30px 0;">
                <!-- Left Column - Contact Form -->
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="contact-card" style="background: #ffffff; padding: 45px 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); height: 100%;">
                        <div class="mb-4" style="margin-bottom: 35px;">
                            <h2 style="color: #1a1a1a; font-size: 2rem; font-weight: 700; margin-bottom: 12px; line-height: 1.3;">Let's Start the Conversation</h2>
                            <p style="color: #666; font-size: 1.05rem; line-height: 1.7; margin-bottom: 0;">
                                Have questions about our services? Complete the form and our team will respond within 24 hours.
                            </p>
                        </div>

                        <!-- Success/Error Messages -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                                <div class="d-flex align-items-center">
                                    <i class="ri-checkbox-circle-line me-2" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <strong>Success!</strong> {{ session('success') }}
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                                <div class="d-flex align-items-center">
                                    <i class="ri-error-warning-line me-2" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <strong>Error!</strong> {{ session('error') }}
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show radius-30 mb-4" role="alert" data-cues="slideInDown" data-duration="500">
                                <div class="d-flex align-items-start">
                                    <i class="ri-error-warning-line me-2" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <strong>Please fix the following errors:</strong>
                                        <ul class="mb-0 mt-2">
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/contact') }}" >
                            @csrf
                            <div class="row g-4 " >
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Full Name <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="text"
                                           class="form-control @error('fullname') is-invalid @enderror"
                                           id="fullname"
                                           name="fullname"
                                           placeholder="Enter your full name"
                                           value="{{ old('fullname') }}"
                                           style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa;"
                                           onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                           onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';"
                                           required>
                                    @error('fullname')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Email Address <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           placeholder="your.email@example.com"
                                           value="{{ old('email') }}"
                                           style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa;"
                                           onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                           onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';"
                                           required>
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Phone Number -->
                                <div class="col-md-6">
                                    <label for="phone" class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Phone Number <span style="color: #dc3545;">*</span>
                                    </label>
                                    <input type="tel"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           placeholder="+263 777 123 456"
                                           value="{{ old('phone') }}"
                                           style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa;"
                                           onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                           onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';"
                                           required>
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Loan Type Dropdown -->
                                <div class="col-md-6">
                                    <label for="loanType" class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Loan Type <span style="color: #dc3545;">*</span>
                                    </label>
                                    <select name="loanType"
                                            id="loanType"
                                            class="form-control @error('loanType') is-invalid @enderror"
                                             required>
                                        <option value="" disabled {{ old('loanType') ? '' : 'selected' }} style="color: #999;">Select Loan Type</option>
                                        <option value="Agricultural Loans" {{ old('loanType') == 'Agricultural Loans' ? 'selected' : '' }}>Agricultural Loans</option>
                                        <option value="Business Loans" {{ old('loanType') == 'Business Loans' ? 'selected' : '' }}>Business Loans</option>
                                        <option value="Salaried Individuals" {{ old('loanType') == 'Salaried Individuals' ? 'selected' : '' }}>Salaried Individuals</option>
                                    </select>
                                    @error('loanType')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>



                                <!-- Message Textarea -->
                                <div class="col-12">
                                    <label class="form-label" style="font-weight: 600; color: #1a1a1a; margin-bottom: 10px; display: block; font-size: 0.95rem;">
                                        Message
                                    </label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                              id="message"
                                              name="message"
                                              placeholder="Tell us how we can help you..."
                                              rows="6"
                                              style="padding: 14px 18px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa; resize: vertical; min-height: 150px;"
                                              onfocus="this.style.borderColor='#0066cc'; this.style.background='#ffffff'; this.style.boxShadow='0 0 0 4px rgba(0, 102, 204, 0.1)';"
                                              onblur="this.style.borderColor='#e0e0e0'; this.style.background='#f8f9fa'; this.style.boxShadow='none';">{{ old('message') }}</textarea>
                                    @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100" style="padding: 16px 30px; font-size: 1.1rem; font-weight: 600; border-radius: 10px; background: linear-gradient(135deg, #004d99 0%, #004d99 100%); border: none; box-shadow: 0 4px 15px rgba(0, 102, 204, 0.3); transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; gap: 10px;"
                                            onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(0, 102, 204, 0.4)';"
                                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 102, 204, 0.3)';">
                                        <i class="fa-solid fa-paper-plane"></i>
                                        Send Message
                                    </button>
                                    <p style="text-align: center; color: #666; font-size: 0.875rem; margin-top: 16px; margin-bottom: 0;">
                                        <i class="fa-solid fa-info-circle" style="margin-right: 5px;"></i>
                                        Fields marked with <span style="color: #dc3545;">*</span> are required
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




                <!-- Right Column - Contact Information -->
                <div class="col-lg-5">
                    <div style="background: linear-gradient(135deg, #0a1f3f 0%, #0A4D8C 100%); padding: 45px 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(7, 41, 78, 0.3); height: 100%; display: flex; flex-direction: column;">
                        <div style="margin-bottom: 25px;">
                            <h2 style="color: #ffffff; font-size: 32px; font-weight: 700; margin-bottom: 16px;">Contact Information</h2>
                            <p style="color: rgba(255, 255, 255, 0.9); font-size: 16px; line-height: 1.6; margin-bottom: 0;">Our dedicated support team is here to assist you with any inquiries or concerns you may have.</p>
                        </div>

                        <div style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <!-- Call Us -->
                            <div style="padding-bottom: 15px; border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 16px;">
                                    <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <i class="fa-solid fa-phone" style="color: #ffffff; font-size: 20px;"></i>
                                    </div>
                                    <h3 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0;">Call Us</h3>
                                </div>
                                <p style="color: rgba(255, 255, 255, 0.85); font-size: 14px; line-height: 1.7; margin-bottom: 10px; padding-left: 65px;">
                                    <strong>Mon-Fri:</strong> 8:00 AM - 5:00 PM<br>
                                    <strong>Sat:</strong> 8:00 AM - 12:00 PM
                                </p>
                                <a href="tel:+263 242 747473" style="color: #ffffff; font-size: 17px; font-weight: 600; text-decoration: none; transition: all 0.3s; padding-left: 65px; display: block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    +263 242 747473
                                </a>
                                <a href="" style="color: #ffffff; font-size: 17px; font-weight: 600; text-decoration: none; transition: all 0.3s; padding-left: 65px; display: block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    +263 771 881631
                                </a>
                            </div>

                            <!-- Email Us -->
                            <div style="padding-bottom: 15px; padding-top: 15px; border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 16px;">
                                    <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <i class="fa-solid fa-envelope" style="color: #ffffff; font-size: 20px;"></i>
                                    </div>
                                    <h3 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0;">Email Us</h3>
                                </div>
{{--                                <p style="color: rgba(255, 255, 255, 0.85); font-size: 14px; line-height: 1.7; margin-bottom: 10px; padding-left: 65px;">--}}
{{--                                    Response within 24 hours--}}
{{--                                </p>--}}
                                <a href="mailto:info@visionpluswealth.com" style="color: #ffffff; font-size: 16px; font-weight: 600; text-decoration: none; transition: all 0.3s; word-break: break-all; padding-left: 65px; display: block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    info@visionpluswealth.com
                                </a>
                            </div>

                            <!-- Visit Our Office -->
                            <div style="padding-top: 15px; padding-bottom: 15px;border-bottom: 1px solid rgba(255, 255, 255, 0.15);">
                                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 16px;">
                                    <div style="width: 50px; height: 50px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                        <i class="fa-solid fa-location-dot" style="color: #ffffff; font-size: 20px;"></i>
                                    </div>
                                    <h3 style="color: #ffffff; font-size: 20px; font-weight: 600; margin: 0;">Visit Our Office</h3>
                                </div>
                                <p style="color: rgba(255, 255, 255, 0.85); font-size: 14px; line-height: 1.7; margin-bottom: 10px; padding-left: 65px;">
                                    9th Floor Michael House<br>
                                    62 Nelson Mandela Avenue
                                    Harare, Zimbabwe
                                </p>
                                <a href="https://maps.app.goo.gl/XKqAHdNGdBBGWia98" target="_blank" style="color: #ffffff; font-size: 15px; font-weight: 600; text-decoration: none; transition: all 0.3s; padding-left: 65px; display: inline-block;" onmouseover="this.style.paddingLeft='70px'; this.style.opacity='0.8';" onmouseout="this.style.paddingLeft='65px'; this.style.opacity='1';">
                                    Get Directions →
                                </a>
                            </div>

                            <!-- Quick Response Badge -->
                            <div style="background: rgba(255, 255, 255, 0.15); padding: 18px 25px; border-radius: 12px; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.2); margin-top: 25px;">
                                <p style="color: #ffffff; font-size: 15px; font-weight: 600; margin: 0;">
                                    <i class="fa-solid fa-check-circle" style="margin-right: 8px;"></i>Quick response time guaranteed
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== MAIN CONTACT SECTION ENDS =======-->


    <!--===== MAP SECTION STARTS =======-->
    <div style="padding: 60px 0; background: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" style="margin-bottom: 40px;">
                        <h2 style="color: #1a1a1a; font-size: 2.2rem; font-weight: 700; margin-bottom: 12px;">Our Branch Network</h2>
                        <p style="color: #666; font-size: 1.05rem; line-height: 1.7; max-width: 700px; margin: 0 auto;">
                            Find us across Zimbabwe. Visit any of our branches for personalized financial solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div style="background: #ffffff; padding: 0; border-radius: 20px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); overflow: hidden;">
                        <div id="branchMap" style="width: 100%; height: 550px; border-radius: 20px;"></div>
                    </div>
                </div>
            </div>

            <!-- Branch List -->
            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-12">
                    <div style="background: #ffffff; padding: 35px 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);">
                        <h3 style="color: #1a1a1a; font-size: 1.5rem; font-weight: 700; margin-bottom: 25px; text-align: center;">All Branches</h3>
                        <div class="row g-3" id="branchList">
                            <!-- Branch items will be dynamically populated -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Maps JavaScript API -->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.api_key') }}"></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_z7Ofh4HDMdtA4qnF64HV0oxkA_7-i3w"></script>

    <script>
        // Branch locations data
        const branches = [
            { name: "Kwekwe", lat: -18.9296, lng: 29.8149 },
            { name: "Mutare", lat: -18.9758, lng: 32.6504 },
            { name: "Bulawayo", lat: -20.1325, lng: 28.6265 },
            { name: "Guruve", lat: -16.6700, lng: 30.7050 },
            { name: "Gweru", lat: -19.4500, lng: 29.8167 },
            { name: "Masvingo", lat: -20.0637, lng: 30.8277 },
            { name: "Harare", lat: -17.8252, lng: 31.0335 },
            { name: "Karoi", lat: -16.8096, lng: 29.6923 },
            { name: "Chinhoyi", lat: -17.3650, lng: 30.2000 },
            { name: "Zvishavane", lat: -20.3267, lng: 30.0665 },
            { name: "Gokwe", lat: -18.2150, lng: 28.9340 },
            { name: "Gwanda", lat: -20.9363, lng: 29.0060 },
            { name: "Chipinge", lat: -20.1890, lng: 32.6236 },
            { name: "Mutoko", lat: -17.3965, lng: 32.2260 },
            { name: "Mudzi", lat: -16.9590, lng: 32.4150 }
        ];

        // Initialize map
        function initMap() {
            // Center of Zimbabwe (approximate)
            const zimbabweCenter = { lat: -19.0, lng: 30.0 };

            // Create map
            const map = new google.maps.Map(document.getElementById('branchMap'), {
                zoom: 7,
                center: zimbabweCenter,
                mapTypeControl: true,
                streetViewControl: false,
                fullscreenControl: true,
                styles: [
                    {
                        featureType: "poi",
                        elementType: "labels",
                        stylers: [{ visibility: "off" }]
                    }
                ]
            });

            // Create bounds to fit all markers
            const bounds = new google.maps.LatLngBounds();

            // Add markers for each branch
            branches.forEach((branch, index) => {
                const position = { lat: branch.lat, lng: branch.lng };

                // Create marker with location pin icon
                const marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: branch.name,
                    animation: google.maps.Animation.DROP,
                    icon: {
                        path: 'M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z',
                        fillColor: branch.name === 'Harare' ? '#0a1f3f' : '#0a1f3f',
                        fillOpacity: 1,
                        strokeColor: '#ffffff',
                        strokeWeight: 2,
                        scale: 1.8,
                        anchor: new google.maps.Point(12, 22),
                        labelOrigin: new google.maps.Point(12, 9)
                    }
                });

                // Create info window
                const infoWindow = new google.maps.InfoWindow({
                    content: `
                        <div style="padding: 12px; min-width: 200px;">
                            <h4 style="margin: 0 0 8px 0; color: #0a1f3f; font-size: 1.1rem; font-weight: 700;">
                                ${branch.name === 'Harare' ? '🏢 ' : '📍 '}${branch.name} Branch
                            </h4>
                            ${branch.name === 'Harare' ?
                                `<p style="margin: 0; color: #666; font-size: 0.9rem; line-height: 1.5;">
                                    9th Floor Michael House<br>
                                    62 Nelson Mandela Avenue<br>
                                    Harare, Zimbabwe
                                </p>
                                <a href="https://maps.app.goo.gl/XKqAHdNGdBBGWia98" target="_blank"
                                   style="display: inline-block; margin-top: 10px; color: #0066cc; text-decoration: none; font-weight: 600; font-size: 0.9rem;">
                                    Get Directions →
                                </a>` :
                                `<p style="margin: 0; color: #666; font-size: 0.9rem;">
                                    Visit us for personalized financial solutions
                                </p>`
                            }
                        </div>
                    `
                });

                // Add click listener to marker
                marker.addListener('click', () => {
                    infoWindow.open(map, marker);
                });

                // Extend bounds to include this marker
                bounds.extend(position);

                // Add slight delay to marker drops for visual effect
                setTimeout(() => {
                    marker.setAnimation(null);
                }, 500 + (index * 50));
            });

            // Fit map to show all markers with padding
            map.fitBounds(bounds);

            // Add padding to bounds
            const listener = google.maps.event.addListener(map, "idle", function() {
                if (map.getZoom() > 7) map.setZoom(7);
                google.maps.event.removeListener(listener);
            });
        }

        // Populate branch list
        function populateBranchList() {
            const branchListContainer = document.getElementById('branchList');

            // Sort branches alphabetically
            const sortedBranches = [...branches].sort((a, b) => a.name.localeCompare(b.name));

            sortedBranches.forEach(branch => {
                const branchItem = document.createElement('div');
                branchItem.className = 'col-md-3 col-sm-6';
                branchItem.innerHTML = `
                    <div style="padding: 15px 20px; background: #f8f9fa; border-radius: 10px; border-left: 4px solid ${branch.name === 'Harare' ? '#004d99' : '#0a1f3f'}; transition: all 0.3s ease;"
                         onmouseover="this.style.background='#e8f4ff'; this.style.transform='translateX(5px)';"
                         onmouseout="this.style.background='#f8f9fa'; this.style.transform='translateX(0)';">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i class="fa-solid ${branch.name === 'Harare' ? 'fa-building' : 'fa-location-dot'}"
                               style="color: ${branch.name === 'Harare' ? '#004d99' : '#0a1f3f'}; font-size: 1.1rem;"></i>
                            <span style="color: #1a1a1a; font-weight: 600; font-size: 0.95rem;">
                                ${branch.name}${branch.name === 'Harare' ? ' (HQ)' : ''}
                            </span>
                        </div>
                    </div>
                `;
                branchListContainer.appendChild(branchItem);
            });
        }

        // Initialize everything when page loads
        window.addEventListener('load', function() {
            initMap();
            populateBranchList();
        });
    </script>
    <!--===== MAP SECTION ENDS =======-->


@endsection
