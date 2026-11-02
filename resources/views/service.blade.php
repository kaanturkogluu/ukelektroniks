@extends('layouts.app')

@section('title', __('common.services') . ' - UK Elektronik')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ __('common.services') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">{{ __('common.home') }}</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">{{ __('common.pages') }}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ __('common.services') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">{{ __('common.our_services') }}</h6>
                <h1 class="mb-4">{{ __('common.renewable_energy_leader') }}</h1>
            </div>
            <div class="row g-4 align-items-stretch">
                @forelse($services as $index => $service)
                <div class="col-md-6 col-lg-4 d-flex wow fadeInUp" data-wow-delay="{{ ($index % 3) * 0.2 }}s">
                    <a href="{{ route('service.detail', $service->slug) }}" class="text-decoration-none w-100 d-flex flex-column">
                        <div class="service-item rounded overflow-hidden d-flex flex-column h-100 bg-white" style="cursor: pointer; transition: transform 0.3s, box-shadow 0.3s;">
                            <div style="height: 240px; background-color: #f8f9fa; overflow: hidden; flex-shrink: 0;">
                                @if(!empty($service->image))
                                    @if(str_starts_with($service->image, 'http://') || str_starts_with($service->image, 'https://'))
                                        <img class="img-fluid w-100 h-100" src="{{ $service->image }}" alt="{{ $service->title }}" loading="lazy" decoding="async" style="object-fit: cover; object-position: center;">
                                    @else
                                        <img class="img-fluid w-100 h-100" src="{{ asset($service->image) }}" alt="{{ $service->title }}" loading="lazy" decoding="async" style="object-fit: cover; object-position: center;">
                                    @endif
                                @else
                                    <img class="img-fluid w-100 h-100" src="{{ asset('img/img-600x400-' . (($index % 6) + 1) . '.jpg') }}" alt="{{ $service->title }}" loading="lazy" decoding="async" style="object-fit: cover; object-position: center;">
                                @endif
                            </div>
                            <div class="position-relative p-4 d-flex flex-column flex-grow-1">
                                <div class="mb-3" style="min-height: 54px; display: flex; align-items: center;">
                                    @if($service->icon)
                                    <div class="btn-lg-square bg-primary rounded-circle me-3 flex-shrink-0">
                                        <i class="fa {{ $service->icon }} text-white"></i>
                                    </div>
                                    @endif
                                    <h4 class="mb-0" style="color: #1A2A36; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                        {{ $service->title }}
                                    </h4>
                                </div>
                                <p class="service-card-desc flex-grow-1 mb-4" style="color: #6c757d; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; min-height: 4.5em; line-height: 1.5;">
                                    {{ $service->short_description }}
                                </p>
                                <div class="mt-auto pt-3 border-top border-light">
                                    <span class="small fw-bold text-primary">Detayları Gör<i class="fa fa-arrow-right ms-2"></i></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p class="text-muted">Henüz hizmet eklenmemiş.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Neden Bizi Seçmelisiniz!</h6>
                        <h1 class="mb-4">Tam Ticari ve Konut Güneş Sistemleri</h1>
                        <p class="mb-4 pb-2">UK Elektronik olarak, ticari ve konut projeleriniz için anahtar teslim güneş enerjisi sistemleri sunuyoruz. Profesyonel ekibimiz ve kaliteli ürünlerimizle güvenilir çözümler sağlıyoruz.</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Kaliteli</p>
                                        <h5 class="mb-0">Hizmetler</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Uzman</p>
                                        <h5 class="mb-0">Çalışanlar</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-drafting-compass text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Ücretsiz</p>
                                        <h5 class="mb-0">Danışmanlık</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-headphones text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">Müşteri</p>
                                        <h5 class="mb-0">Desteği</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/feature.jpg') }}" loading="lazy" decoding="async" style="object-fit: cover;" alt="Güneş Enerjisi Çözümleri">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

@endsection

@push('styles')
<style>
    .service-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .service-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    /* Card içeriklerini eşit yükseklikte tut */
    .service-item .position-relative {
        flex: 1;
        display: flex;
        flex-direction: column;
        min-height: 0;
    }

    /* Açıklama uzunsa kartı büyütmesin (tek satır, ... ile) */
    .service-item .service-card-desc {
        display: block;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        margin-bottom: 0.75rem;
        min-height: 1.5em; /* tek satır */
    }

    /* "Detayları Gör" her zaman en altta dursun */
    .service-item span.small {
        margin-top: auto;
    }
</style>
@endpush

