<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'UK Elektronik - Güneş ve Yenilenebilir Enerji')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta_keywords', \App\Models\Setting::get('site_description', 'dörtyol güneş paneli, solar inverter, güneş enerjisi sistemleri, UK Elektronik, hatay güneş paneli'))" name="keywords">
    <meta content="@yield('meta_description', 'UK Elektronik - Güneş enerjisi sistemleri, solar inverterler, DC pompalar, solar sürücüler ve bataryalar.')" name="description">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'UK Elektronik - Güneş ve Yenilenebilir Enerji')">
    <meta property="og:description" content="@yield('meta_description', 'UK Elektronik - Güneş enerjisi ve solar sistemler')">
    <meta property="og:image" content="@yield('og_image', asset('uklogo.png'))">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'UK Elektronik - Güneş ve Yenilenebilir Enerji')">
    <meta name="twitter:description" content="@yield('meta_description', 'UK Elektronik - Güneş enerjisi ve solar sistemler')">
    <meta name="twitter:image" content="@yield('og_image', asset('uklogo.png'))">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://code.jquery.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    @yield('styles')
    @stack('styles')
</head>

<body class="{{ request()->routeIs('home') ? 'is-home' : 'subpage' }}">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yükleniyor...</span>
        </div>
    </div>
    <script>
        (function() {
            var hideSpinner = function() {
                var s = document.getElementById('spinner');
                if (s) { s.classList.remove('show'); s.style.display = 'none'; }
            };
            if (document.readyState === 'complete' || document.readyState === 'interactive') {
                setTimeout(hideSpinner, 60);
            } else {
                document.addEventListener('DOMContentLoaded', hideSpinner);
                window.addEventListener('load', hideSpinner);
            }
            setTimeout(hideSpinner, 800);
        })();
    </script>
    <!-- Spinner End -->

        <!-- CW Enerji Style Header Start -->
    <header class="cw-header fixed-top" id="cwMainHeader">
        <!-- Topbar Start -->
        <div class="cw-topbar d-none d-lg-block">
            <div class="container-fluid px-5">
                <div class="row gx-0 align-items-center" style="height: 40px;">
                    <div class="col-lg-8 text-start d-flex align-items-center">
                        @php
                            $displayPhone = \App\Models\Setting::get('display_phone');
                            $displayPhoneType = 'phone';
                            if (empty($displayPhone)) {
                                $phonesJson = \App\Models\Setting::get('phones', '[]');
                                $phones = is_string($phonesJson) ? json_decode($phonesJson, true) : [];
                                if (!empty($phones)) {
                                    $firstPhone = is_array($phones[0]) ? $phones[0] : ['number' => $phones[0], 'type' => 'phone'];
                                    $displayPhone = $firstPhone['number'] ?? $firstPhone;
                                    $displayPhoneType = $firstPhone['type'] ?? 'phone';
                                } else {
                                    $displayPhone = '+90 (212) 123 45 67';
                                }
                            } else {
                                $phonesJson = \App\Models\Setting::get('phones', '[]');
                                $phones = is_string($phonesJson) ? json_decode($phonesJson, true) : [];
                                foreach($phones as $phone) {
                                    $phoneNumber = is_array($phone) ? ($phone['number'] ?? '') : $phone;
                                    if ($phoneNumber == $displayPhone) {
                                        $displayPhoneType = is_array($phone) ? ($phone['type'] ?? 'phone') : 'phone';
                                        break;
                                    }
                                }
                            }
                        @endphp
                        <div class="d-inline-flex align-items-center me-4">
                            @if($displayPhoneType === 'whatsapp')
                            <small class="fab fa-whatsapp text-primary me-2"></small>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $displayPhone) }}" target="_blank" class="text-white text-decoration-none contact-link-topbar" title="WhatsApp ile iletişime geçin">
                                <small>{{ $displayPhone }}</small>
                            </a>
                            @else
                            <small class="fa fa-phone-alt text-primary me-2"></small>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $displayPhone) }}" class="text-white text-decoration-none contact-link-topbar" title="Aramak için tıklayın">
                                <small>{{ $displayPhone }}</small>
                            </a>
                            @endif
                        </div>
                        @php
                            $displayEmail = \App\Models\Setting::get('display_email');
                            if (empty($displayEmail)) {
                                $emailsJson = \App\Models\Setting::get('emails', '[]');
                                $emails = is_string($emailsJson) ? json_decode($emailsJson, true) : [];
                                $displayEmail = !empty($emails) ? $emails[0] : 'info@ukelektronik.com';
                            }
                        @endphp
                        <div class="d-inline-flex align-items-center me-4">
                            <small class="fa fa-envelope text-primary me-2"></small>
                            <a href="mailto:{{ $displayEmail }}" class="text-white text-decoration-none contact-link-topbar" title="E-posta göndermek için tıklayın">
                                <small>{{ $displayEmail }}</small>
                            </a>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            <a href="{{ route('datacenter') }}" class="text-white text-decoration-none me-3" style="font-size: 0.875rem;">{{ __('common.datacenter') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-end d-flex align-items-center justify-content-end">
                        <div class="d-inline-flex align-items-center me-4">
                            <form action="{{ route('lang.switch') }}" method="GET" id="languageForm" style="display: inline;">
                                <input type="hidden" name="redirect" value="{{ url()->current() }}">
                                <select class="form-select form-select-sm border-0 bg-transparent text-white topbar-language-select" 
                                        name="locale" 
                                        id="languageSelect"
                                        onchange="document.getElementById('languageForm').submit();"
                                        style="width: auto; padding: 0.25rem 2rem 0.25rem 0.5rem; font-size: 0.875rem; color: white !important;">
                                    <option value="tr" {{ app()->getLocale() == 'tr' ? 'selected' : '' }} style="background-color: #333; color: white;">{{ __('common.turkish') }}</option>
                                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }} style="background-color: #333; color: white;">{{ __('common.english') }}</option>
                                </select>
                            </form>
                        </div>
                        <div class="d-inline-flex align-items-center">
                            @php
                                $facebook = \App\Models\Setting::get('facebook');
                                $twitter = \App\Models\Setting::get('twitter');
                                $linkedin = \App\Models\Setting::get('linkedin');
                                $instagram = \App\Models\Setting::get('instagram');
                            @endphp
                            @if($facebook)
                            <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-white" href="{{ $facebook }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($twitter)
                            <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-white" href="{{ $twitter }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if($linkedin)
                            <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary text-white" href="{{ $linkedin }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-linkedin-in"></i></a>
                            @endif
                            @if($instagram)
                            <a class="btn btn-square btn-link rounded-0 text-white" href="{{ $instagram }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Centered Logo Area (CW Enerji Style) -->
        <div class="cw-toplogo text-center py-2 d-none d-lg-block">
            <div class="container d-flex flex-column align-items-center justify-content-center">
                <a href="{{ route('home') }}" class="cw-toplogo-brand d-inline-flex flex-column align-items-center text-decoration-none">
                    <img src="{{ asset('uklogo.png') }}" alt="UK Elektronik Güneş Enerjisi" class="cw-logo-img">
                    <span class="cw-logo-slogan">Güneşten Elektrik</span>
                </a>
            </div>
        </div>

        <!-- Main Navbar (Centered Navigation) -->
        <nav class="navbar navbar-expand-lg navbar-dark cw-navbar p-0">
            <div class="container position-relative">
                <!-- Mobile Brand in Center (visible only on mobile) -->
                <a href="{{ route('home') }}" class="navbar-brand d-lg-none mx-auto d-flex flex-column align-items-center py-2">
                    <img src="{{ asset('uklogo.png') }}" alt="UK Elektronik" style="max-height: 48px; width: auto;">
                    <span style="font-size: 9px; letter-spacing: 2px; color: #ffc107; font-weight: 700; text-transform: uppercase;">Güneşten Elektrik</span>
                </a>

                <button type="button" class="navbar-toggler position-absolute end-0 me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-label="Menüyü Aç/Kapat" style="border-color: rgba(255, 255, 255, 0.5);">
                    <span class="navbar-toggler-icon" style="filter: brightness(0) invert(1);"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">{{ __('common.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">{{ __('common.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('service') }}" class="nav-link {{ request()->routeIs('service*') ? 'active' : '' }}">{{ __('common.services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('isi-pompasi') }}" class="nav-link {{ request()->routeIs('isi-pompasi*') ? 'active' : '' }}" style="position: relative;">
                                {{ __('common.heat_pump') }}
                                <span class="badge bg-warning text-dark ms-1 d-none d-xl-inline-block" style="font-size: 0.65rem; padding: 2px 6px; border-radius: 4px; vertical-align: middle;">YENİ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('products') }}" class="nav-link {{ request()->routeIs('products*') ? 'active' : '' }}">{{ __('common.products') }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}">SSS</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">{{ __('common.contact') }}</a>
                        </li>
                    </ul>

                    <!-- Mobile Topbar Content inside Collapse -->
                    <div class="d-lg-none border-top border-secondary mt-2 pt-3 px-3 pb-2 text-center">
                        <div class="mb-2">
                            @if($displayPhoneType === 'whatsapp')
                            <small class="fab fa-whatsapp text-primary me-2"></small>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $displayPhone) }}" target="_blank" class="text-white text-decoration-none" style="font-size: 0.875rem;">
                                <small>{{ $displayPhone }}</small>
                            </a>
                            @else
                            <small class="fa fa-phone-alt text-primary me-2"></small>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $displayPhone) }}" class="text-white text-decoration-none" style="font-size: 0.875rem;">
                                <small>{{ $displayPhone }}</small>
                            </a>
                            @endif
                        </div>
                        <div class="mb-2">
                            <small class="fa fa-envelope text-primary me-2"></small>
                            <a href="mailto:{{ $displayEmail }}" class="text-white text-decoration-none" style="font-size: 0.875rem;">
                                <small>{{ $displayEmail }}</small>
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="{{ route('datacenter') }}" class="text-white text-decoration-none" style="font-size: 0.875rem;">{{ __('common.datacenter') }}</a>
                        </div>
                        <div class="mb-2">
                            <form action="{{ route('lang.switch') }}" method="GET" id="languageFormMobile" style="display: inline;">
                                <input type="hidden" name="redirect" value="{{ url()->current() }}">
                                <select class="form-select form-select-sm border-0 bg-transparent text-white" 
                                        name="locale" 
                                        id="languageSelectMobile"
                                        onchange="document.getElementById('languageFormMobile').submit();"
                                        style="width: auto; padding: 0.25rem 2rem 0.25rem 0.5rem; font-size: 0.875rem; color: white !important; margin: 0 auto;">
                                    <option value="tr" {{ app()->getLocale() == 'tr' ? 'selected' : '' }} style="background-color: #333; color: white;">{{ __('common.turkish') }}</option>
                                    <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }} style="background-color: #333; color: white;">{{ __('common.english') }}</option>
                                </select>
                            </form>
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-2">
                            @if($facebook)
                            <a class="btn btn-square btn-link rounded-0 border-0 text-white" href="{{ $facebook }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($twitter)
                            <a class="btn btn-square btn-link rounded-0 border-0 text-white" href="{{ $twitter }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if($linkedin)
                            <a class="btn btn-square btn-link rounded-0 border-0 text-white" href="{{ $linkedin }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-linkedin-in"></i></a>
                            @endif
                            @if($instagram)
                            <a class="btn btn-square btn-link rounded-0 border-0 text-white" href="{{ $instagram }}" target="_blank" style="color: white !important; padding: 0.5rem;"><i class="fab fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- CW Enerji Style Header End -->

    <!-- Content wrapper -->
    <div class="content-wrapper {{ request()->routeIs('home') ? 'home-wrapper' : 'subpage-wrapper' }}">
        @yield('content')
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">{{ __('common.contact_info') }}</h5>
                    @php
                        $footerAddress = \App\Models\Setting::get('address', 'Dörtyol, Hatay, Türkiye');
                    @endphp
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>
                        <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($footerAddress) }}" target="_blank" class="text-white-50 text-decoration-none contact-link-footer" title="Haritada görmek için tıklayın">
                            {{ $footerAddress }}
                        </a>
                    </p>
                    @php
                        $phonesJson = \App\Models\Setting::get('phones', '[]');
                        $phones = is_string($phonesJson) ? json_decode($phonesJson, true) : [];
                        if (!is_array($phones)) $phones = [];
                        // Convert old format to new format if needed
                        if (!empty($phones) && is_string($phones[0] ?? null)) {
                            $phones = array_map(function($phone) {
                                return ['number' => $phone, 'type' => 'phone'];
                            }, $phones);
                        }
                        if (empty($phones)) $phones = [['number' => '+90 (212) 123 45 67', 'type' => 'phone']];
                    @endphp
                    @foreach($phones as $phone)
                    @php
                        $phoneNumber = is_array($phone) ? ($phone['number'] ?? '') : $phone;
                        $phoneType = is_array($phone) ? ($phone['type'] ?? 'phone') : 'phone';
                    @endphp
                    <p class="mb-2">
                        @if($phoneType === 'whatsapp')
                        <i class="fab fa-whatsapp me-3"></i>
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $phoneNumber) }}" target="_blank" class="text-white-50 text-decoration-none contact-link-footer" title="WhatsApp ile iletişime geçin">
                            {{ $phoneNumber }}
                        </a>
                        @else
                        <i class="fa fa-phone-alt me-3"></i>
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phoneNumber) }}" class="text-white-50 text-decoration-none contact-link-footer" title="Aramak için tıklayın">
                            {{ $phoneNumber }}
                        </a>
                        @endif
                    </p>
                    @endforeach
                    @php
                        $emailsJson = \App\Models\Setting::get('emails', '[]');
                        $emails = is_string($emailsJson) ? json_decode($emailsJson, true) : [];
                        if (empty($emails)) $emails = ['info@ukelektronik.com'];
                    @endphp
                    @foreach($emails as $email)
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>
                        <a href="mailto:{{ $email }}" class="text-white-50 text-decoration-none contact-link-footer" title="E-posta göndermek için tıklayın">
                            {{ $email }}
                        </a>
                    </p>
                    @endforeach
                    <div class="d-flex pt-2">
                        @php
                            $facebook = \App\Models\Setting::get('facebook');
                            $twitter = \App\Models\Setting::get('twitter');
                            $linkedin = \App\Models\Setting::get('linkedin');
                            $instagram = \App\Models\Setting::get('instagram');
                        @endphp
                        @if($facebook)
                        <a class="btn btn-square btn-outline-light btn-social" href="{{ $facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if($twitter)
                        <a class="btn btn-square btn-outline-light btn-social" href="{{ $twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if($linkedin)
                        <a class="btn btn-square btn-outline-light btn-social" href="{{ $linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if($instagram)
                        <a class="btn btn-square btn-outline-light btn-social" href="{{ $instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">{{ __('common.quick_links') }}</h5>
                    <a class="btn btn-link" href="{{ route('home') }}">{{ __('common.home') }}</a>
                    <a class="btn btn-link" href="{{ route('about') }}">{{ __('common.about') }}</a>
                    <a class="btn btn-link" href="{{ route('service') }}">{{ __('common.services') }}</a>
                    <a class="btn btn-link" href="{{ route('project') }}">{{ __('common.projects') }}</a>
                    <a class="btn btn-link" href="{{ route('products') }}">{{ __('common.products') }}</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">{{ __('common.contact') }}</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">{{ __('common.projects') }}</h5>
                    @php
                        $footerProjects = \Illuminate\Support\Facades\Cache::remember('footer_projects_active', 1800, function () {
                            return \App\Models\Project::where('is_active', true)
                                ->orderBy('created_at', 'desc')
                                ->limit(6)
                                ->get();
                        });
                    @endphp
                    @if($footerProjects->count() > 0)
                        @foreach($footerProjects as $project)
                            <a class="btn btn-link" href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a>
                        @endforeach
                    @else
                        <p class="text-white-50 mb-0">Henüz proje eklenmemiş.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-12 text-center">
                        &copy; <a href="{{ route('home') }}">UK Elektronik</a>, {{ __('common.all_rights_reserved') }}.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('scripts')
    @stack('scripts')
    
    <style>
        .contact-link-topbar {
            transition: all 0.3s ease;
        }
        
        .contact-link-topbar:hover {
            color: #0d6efd !important;
            text-decoration: underline !important;
        }
        
        .contact-link-footer {
            transition: all 0.3s ease;
        }
        
        .contact-link-footer:hover {
            color: #ffffff !important;
            text-decoration: underline !important;
        }
        
        /* Topbar Language Select Styles */
        .topbar-language-select {
            color: white !important;
            background-color: transparent !important;
        }
        
        .topbar-language-select,
        .topbar-language-select:focus,
        .topbar-language-select:active {
            color: white !important;
            background-color: transparent !important;
        }
        
        .topbar-language-select option {
            background-color: #1a1a1a !important;
            color: white !important;
            padding: 8px !important;
        }
        
        .topbar-language-select option:hover,
        .topbar-language-select option:focus,
        .topbar-language-select option:active {
            background-color: #0d6efd !important;
            color: white !important;
        }
        
        .topbar-language-select option:checked {
            background-color: #0d6efd !important;
            color: white !important;
        }
        
        /* Select açıldığında dropdown menüsü */
        select.topbar-language-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        
        /* Select açıldığında arka plan */
        .topbar-language-select:focus {
            background-color: rgba(0, 0, 0, 0.5) !important;
            color: white !important;
            outline: none !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
        }
        
        /* Navbar pozisyon ayarları */
        @media (min-width: 992px) {
            .navbar-mobile {
                top: 45px !important;
            }
        }
        
        @media (max-width: 991.98px) {
            .navbar-mobile {
                top: 0 !important;
            }
            
            /* Content padding mobilde azalt */
            .content-wrapper {
                padding-top: 70px !important;
            }
        }
        
        /* Mobil görünümde logo ve hamburger menü hizalama */
        @media (max-width: 991.98px) {
            .navbar .container-fluid {
                display: flex !important;
                align-items: center !important;
                justify-content: space-between !important;
            }
            
            .navbar-logo {
                max-height: 40px !important;
                height: auto;
                width: auto;
            }
            
            .navbar-brand {
                padding: 0.5rem 0.75rem !important;
                margin: 0 !important;
                flex: 0 0 auto !important;
            }
            
            .navbar-toggler {
                padding: 0.25rem 0.5rem !important;
                margin-left: auto !important;
                flex: 0 0 auto !important;
            }
        }
    </style>
    <!-- CW Header & Entrance Enhancements -->
    <style>
        /* CW Enerji Header Styling */
        .cw-header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            z-index: 10000;
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(180deg, rgba(8, 14, 26, 0.88) 0%, rgba(8, 14, 26, 0.5) 75%, transparent 100%);
        }

        body.subpage .cw-header,
        .cw-header.header-scrolled {
            background: rgba(10, 16, 28, 0.96) !important;
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.45);
        }

        .cw-topbar {
            max-height: 45px;
            opacity: 1;
            transition: all 0.3s ease;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .cw-header.header-scrolled .cw-topbar {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            padding: 0 !important;
            border-bottom: none;
        }

        .cw-toplogo {
            transition: all 0.3s ease;
        }

        .cw-logo-img {
            max-height: 65px;
            width: auto;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.5));
        }

        .cw-header.header-scrolled .cw-logo-img {
            max-height: 44px;
        }

        .cw-logo-slogan {
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 3px;
            color: #ffc107;
            text-transform: uppercase;
            margin-top: 3px;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.8);
            transition: all 0.25s ease;
        }

        .cw-header.header-scrolled .cw-logo-slogan {
            opacity: 0;
            height: 0;
            margin: 0;
            overflow: hidden;
        }

        .cw-navbar {
            transition: all 0.3s ease;
        }

        .cw-navbar .nav-link {
            color: #ffffff !important;
            font-size: 14.5px !important;
            font-weight: 600 !important;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            padding: 12px 18px !important;
            margin: 0 2px;
            border-radius: 6px;
            transition: all 0.25s ease;
            position: relative;
        }

        .cw-navbar .nav-link:hover,
        .cw-navbar .nav-link.active {
            color: #ffc107 !important;
            background: rgba(255, 193, 7, 0.1);
            text-shadow: 0 0 10px rgba(255, 193, 7, 0.4);
        }

        /* Content wrapper padding */
        .content-wrapper.home-wrapper {
            padding-top: 0 !important;
        }

        .content-wrapper.subpage-wrapper {
            padding-top: 170px !important;
        }

        @media (max-width: 991.98px) {
            .cw-header {
                background: rgba(10, 16, 28, 0.97) !important;
                backdrop-filter: blur(12px);
                box-shadow: 0 2px 15px rgba(0,0,0,0.4);
            }
            .content-wrapper.subpage-wrapper {
                padding-top: 85px !important;
            }
            .content-wrapper.home-wrapper {
                padding-top: 70px !important;
            }
            .cw-navbar .nav-link {
                padding: 10px 14px !important;
            }
        }
    </style>

    <script>
        (function($) {
            "use strict";
            function handleCwHeader() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > 40) {
                    $('#cwMainHeader').addClass('header-scrolled');
                } else {
                    $('#cwMainHeader').removeClass('header-scrolled');
                }
            }
            $(window).on('scroll load resize', handleCwHeader);
            handleCwHeader();
        })(jQuery);
    </script>
</body>

</html>

