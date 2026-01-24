<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <!-- Favicon Icon -->
    <link rel="icon" href="/template/assets/images/fave.png">
    <!-- Site Title -->
    <title>Riyallure - Perfumes</title>
    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/template/assets/css/slick.min.css">
    <link rel="stylesheet" href="/template/assets/css/select2.min.css">
    <link rel="stylesheet" href="/template/assets/css/style.css">




@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('sweetalert::alert')
    <!-- Start Header Section -->
    @include('home.sections.header')

    <div class="cs_site_header_height_1"></div>
    <!-- Cart Modal -->

    <!-- End Header Section -->

    <!-- Start Hero Section -->
    <div class="cs_height_40 cs_height_lg_30"></div>
    @include('home.sections.herosection')
    <!-- End Hero Section -->
    <!-- Start Category Section -->
    @include('home.sections.category')
    <!-- End Category Section -->
    <!-- Start Flash Sale Section -->
    {{-- @include('home.sections.flashsection') --}}
    <!-- End Flash Sale Section -->
    <!-- Start Featured Products Section -->
    @include('home.sections.featuredproducts')

    <!-- End Featured Products Section -->
    <!-- Start Our Scents Section -->
<div class="cs_height_150 cs_height_lg_80"></div>
<div class="container">
    <div class="text-center cs_section_heading cs_style_1">
        <h2 class="cs_section_title cs_fs_48 cs_semibold">Our Scents</h2>
        <p class="cs_section_subtitle cs_fs_18">Discover our exclusive perfume collections</p>
    </div>
    <div class="cs_height_50 cs_height_lg_30"></div>
    <div class="row g-4">
        <!-- Signature Scents Card -->
        <div class="mb-4 col-lg-6 col-md-12">
            <a href="{{ route('scents.show', 'signature-scents') }}" class="text-decoration-none">
                <div class="overflow-hidden scent-card-wrapper position-relative cs_radius_12 h-100" 
                     style="background: linear-gradient(135deg, #2a2a2a 0%, #1a1a1a 100%); 
                            background-image: url(&quot;template/assets/images/bread3.jpg&quot;);
                            background-blend-mode: overlay;">
                    <div class="p-5 scent-card-content d-flex flex-column justify-content-center align-items-center h-100" 
                         style="min-height: 350px; position: relative; z-index: 2; transition: all 0.4s ease;">
                        <div class="mb-4 scent-icon" style="font-size: 60px;">✨</div>
                        <h3 class="mb-3 text-white cs_fs_32 cs_semibold" style="letter-spacing: 1px;">Signature Scents</h3>
                        <p class="mb-4 text-center cs_fs_16 text-white-50">Our timeless collection of classic perfumes</p>
                        <button class="px-5 py-2 btn btn-primary" style="background: #6366f1; border: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                            Shop Now <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                    <div class="top-0 position-absolute end-0 w-50 h-100 opacity-10" 
                         style="background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);"></div>
                </div>
            </a>
        </div>

        <!-- Niche Scents Card -->
        <div class="mb-4 col-lg-6 col-md-12">
            <a href="{{ route('scents.show', 'niche-scents') }}" class="text-decoration-none">
                <div class="overflow-hidden scent-card-wrapper position-relative cs_radius_12 h-100" 
                     style="background: linear-gradient(135deg, #7c3aed 0%, #d946ef 100%); 
                             background-image: url(&quot;template/assets/images/bread3.jpg&quot;);
                             background-blend-mode: overlay;">
                    <div class="p-5 scent-card-content d-flex flex-column justify-content-center align-items-center h-100" 
                         style="min-height: 350px; position: relative; z-index: 2; transition: all 0.4s ease;">
                        <div class="mb-4 scent-icon" style="font-size: 60px;">💎</div>
                        <h3 class="mb-3 text-white cs_fs_32 cs_semibold" style="letter-spacing: 1px;">Niche Scents</h3>
                        <p class="mb-4 text-center cs_fs_16 text-white-50">Unique and exclusive fragrances</p>
                        <button class="px-5 py-2 btn btn-primary" style="background: #ffffff; color: #7c3aed; border: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                            Shop Now <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                    <div class="top-0 position-absolute end-0 w-50 h-100 opacity-10" 
                         style="background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);"></div>
                </div>
            </a>
        </div>

        <!-- Inspired Scents Card -->
        <div class="mb-4 col-lg-12 col-md-12">
            <a href="{{ route('scents.show', 'inspired-scents') }}" class="text-decoration-none">
                <div class="overflow-hidden scent-card-wrapper position-relative cs_radius_12" 
                     style="background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%); 
                             background-image: url(&quot;template/assets/images/bread3.jpg&quot;);
                             background-blend-mode: overlay;">
                    <div class="p-5 scent-card-content d-flex flex-column justify-content-center align-items-center" 
                         style="min-height: 280px; position: relative; z-index: 2; transition: all 0.4s ease;">
                        <div class="mb-4 scent-icon" style="font-size: 60px;">🌿</div>
                        <h3 class="mb-3 text-white cs_fs_32 cs_semibold" style="letter-spacing: 1px;">Inspired Scents</h3>
                        <p class="mb-4 text-center cs_fs_16 text-white-50">Fresh and innovative fragrances</p>
                        <button class="px-5 py-2 btn btn-primary" style="background: #ffffff; color: #0891b2; border: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                            Shop Now <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                    <div class="top-0 position-absolute end-0 w-50 h-100 opacity-10" 
                         style="background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<style>
.scent-card-wrapper {
    transition: transform 0.4s cubic-bezier(0.23, 1, 0.320, 1), 
                box-shadow 0.4s cubic-bezier(0.23, 1, 0.320, 1);
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.scent-card-wrapper:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

.scent-card-content {
    backdrop-filter: blur(10px);
    background: rgba(0, 0, 0, 0.2);
}

.scent-card-wrapper:hover .btn {
    transform: scale(1.05);
}

.scent-icon {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .scent-card-content {
        min-height: 250px !important;
    }
    
    .scent-card-wrapper:hover {
        transform: translateY(-5px) scale(1.01);
    }
}
</style>

<!-- End Our Scents Section -->
    <!-- Start New in Store -->

    {{-- @include('home.sections.newinstore') --}}
    <!-- End New in Store -->
    <!-- Start Banner Section -->
    <div class="cs_height_150 cs_height_lg_80"></div>
    @include('home.sections.bannersection')

    <!-- End Banner Section -->
    <!-- Start Feature Section -->
    @include('home.sections.features')
    <!-- End Feature Section -->
    <!-- Start FAQ Section -->
    @include('home.sections.faq')

    <!-- End FAQ Section -->
    <!-- Start Footer Section -->

    @include('home.sections.footer')

    <!-- End Footer Section -->
    <!-- Script -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/template/assets/js/jquery.slick.min.js"></script>
    <script src="/template/assets/js/select2.min.js"></script>
    <script src="/template/assets/js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var scrolllpos = localStorage.getItem('scrollpos');
            if (scrolllpos) {
                window.scrollTo(0, scrolllpos);
            }
        });
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollpos', window.scrollY);
        });
    </script>
</body>

</html>
