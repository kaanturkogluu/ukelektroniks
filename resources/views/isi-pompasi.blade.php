@extends('layouts.app')

@section('title', 'Isı Pompası Sistemleri - UK Elektronik')
@section('meta_description', 'UK Elektronik ve Ersutek güvencesiyle yüksek verimli R32 ve R290 inverter ısı pompası çözümleri. Güneş enerjisi ile entegre, A+++ enerji tasarruflu iklimlendirme.')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{ __('common.heat_pump') }} Sistemleri</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">{{ __('common.home') }}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">{{ __('common.heat_pump') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Intro Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase fw-bold mb-2">// Çevreci & Akıllı İklimlendirme</h6>
                    <h1 class="display-5 fw-bold mb-4">Geleceğin Isınma ve Soğutma Teknolojisi: <span class="text-primary">Isı Pompası</span></h1>
                    <p class="mb-4 text-muted fs-5">
                        Isı pompaları; havada, toprakta veya suda depolanmış doğal ısı enerjisini kullanarak minimum elektrik tüketimiyle evinizi kışın ısıtan, yazın serinleten ve 365 gün kesintisiz kullanım sıcak suyu sağlayan yeni nesil sistemlerdir.
                    </p>
                    <p class="mb-4">
                        <strong>UK Elektronik</strong> olarak, güneş enerjisi (GES) santrallerimiz ile ısı pompası sistemlerini entegre ederek iklimlendirme giderlerinizi <strong>sıfıra yakın seviyelere</strong> düşürüyoruz. Resmi çözüm ortağımız <strong>Ersutek</strong> teknolojisi ile anahtar teslim projelendirme ve uygulama sunuyoruz.
                    </p>
                    <div class="row g-3 pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center bg-light p-3 rounded">
                                <i class="fa fa-percentage text-primary fa-2x me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">%75'e Varan</h6>
                                    <small class="text-muted">Enerji Tasarrufu</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center bg-light p-3 rounded">
                                <i class="fa fa-solar-panel text-primary fa-2x me-3"></i>
                                <div>
                                    <h6 class="mb-0 fw-bold">GES Uyumu</h6>
                                    <small class="text-muted">Güneşle Sıfır Fatura</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden shadow-lg" style="min-height: 420px; background: linear-gradient(135deg, #0d1b2a 0%, #1b263b 100%);">
                        <div class="p-5 text-white h-100 d-flex flex-column justify-content-between">
                            <div>
                                <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3">Çözüm Ortağımız</span>
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white p-3 rounded me-3 shadow-sm" style="max-width: 170px;">
                                        <img src="{{ asset('img/partners/ersutek.svg') }}" alt="Ersutek Logo" class="img-fluid" style="max-height: 45px;">
                                    </div>
                                    <div>
                                        <h4 class="text-white mb-0">Ersutek Teknolojisi</h4>
                                        <small class="text-white-50">Isıtma, Soğutma & Arıtma Sistemleri</small>
                                    </div>
                                </div>
                                <p class="text-white-50 mb-4">
                                    Türkiye'nin önde gelen iklimlendirme markalarından Ersutek'in R32 ve R290 çevre dostu monoblok ısı pompaları, yüksek verimli invertör kompresörleri ve akıllı kontrol sistemleriyle UK Elektronik güvencesiyle sunulmaktadır.
                                </p>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="https://www.ersutek.com.tr/" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2 btn-sm">
                                    Ersutek Web Sitesi <i class="fa fa-external-link-alt ms-1"></i>
                                </a>
                                @php
                                    $whatsappNumber = \App\Models\Setting::get('product_whatsapp', '');
                                    if(empty($whatsappNumber)) {
                                        $displayPhone = \App\Models\Setting::get('display_phone', '905000000000');
                                        $whatsappNumber = preg_replace('/[^0-9]/', '', $displayPhone);
                                    }
                                    $waMsg = urlencode("Merhaba UK Elektronik, Isı Pompası sistemleri hakkında bilgi ve fiyat teklifi almak istiyorum.");
                                @endphp
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ $waMsg }}" target="_blank" class="btn btn-success rounded-pill px-4 py-2 btn-sm">
                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp'tan Danışın
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Section End -->

    <!-- Features / Why Heat Pump Start -->
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-4">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h6 class="text-primary text-uppercase fw-bold">// Avantajlar</h6>
                <h1 class="display-6 fw-bold">Neden Isı Pompası Tercih Etmelisiniz?</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded p-4 h-100 shadow-sm border text-center">
                        <div class="btn-lg-square bg-primary text-white rounded-circle mx-auto mb-4">
                            <i class="fa fa-leaf fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-3">A+++ Enerji Sınıfı</h5>
                        <p class="text-muted mb-0">1 kW elektrik enerjisi harcayarak 4.5 kW'a kadar ısıtma enerjisi üretir (COP > 4.5). Klasik elektrikli ısıtıcılara göre %75 daha az tüketim sağlar.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded p-4 h-100 shadow-sm border text-center">
                        <div class="btn-lg-square bg-primary text-white rounded-circle mx-auto mb-4">
                            <i class="fa fa-sun fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Güneşle %100 Uyum</h5>
                        <p class="text-muted mb-0">Çatınıza kurduğumuz güneş enerjisi panelleri ile ısı pompanızın elektriğini bedava üreterek kışın ısınma maliyetinizi sıfırlayabilirsiniz.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white rounded p-4 h-100 shadow-sm border text-center">
                        <div class="btn-lg-square bg-primary text-white rounded-circle mx-auto mb-4">
                            <i class="fa fa-sync-alt fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-3">3'ü Bir Arada Konfor</h5>
                        <p class="text-muted mb-0">Tek bir kompakt cihaz ile kışın yerden ısıtma/petek ısıtması, yazın fancoil ile serinletme ve 4 mevsim sıcak su ihtiyacını karşılar.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-white rounded p-4 h-100 shadow-sm border text-center">
                        <div class="btn-lg-square bg-primary text-white rounded-circle mx-auto mb-4">
                            <i class="fa fa-shield-alt fa-lg"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Güvenli & Çevreci</h5>
                        <p class="text-muted mb-0">Baca, gaz patlaması, zehirlenme veya yakıt deposu tehlikesi yoktur. Fosil yakıt yakmaz, sıfır emisyon ile doğayı korur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Product Series Showcase Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h6 class="text-primary text-uppercase fw-bold">// Ürün Serileri</h6>
                <h1 class="display-6 fw-bold">Ersutek Isı Pompası Çözümlerimiz</h1>
                <p class="text-muted">Konutlardan ticari tesislere, villalardan havuzlara her ölçekte yüksek verimli çözümler.</p>
            </div>

            <div class="row g-4">
                <!-- Seri 1 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-primary px-3 py-2 rounded-pill">Monoblok Hava Kaynaklı</span>
                                <span class="text-success fw-bold"><i class="fa fa-check-circle me-1"></i> A+++ Enerji</span>
                            </div>
                            <h3 class="fw-bold mb-3">R32 Isı Pompası Serisi</h3>
                            <p class="text-muted mb-4">
                                Gelişmiş Full DC Inverter kompresör teknolojisi ile dış hava sıcaklığı -25°C'ye kadar düşse bile yüksek verimle ısıtma sağlar. Kompakt monoblok yapısıyla iç mekanda yer kaplamaz.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Çevre dostu R32 gazı ile yüksek termodinamik verim</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> 60°C'ye varan çıkış suyu sıcaklığı</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Akıllı Wi-Fi bağlantısı ve mobil uygulama kontrolü</li>
                                <li class="mb-2"><i class="fa fa-check text-primary me-2"></i> Ultra sessiz gece modu teknolojisi</li>
                            </ul>
                            <div class="d-flex gap-2">
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('R32 Isı Pompası Serisi hakkında teklif ve keşif talep ediyorum.') }}" target="_blank" class="btn btn-primary rounded-pill px-4">
                                    <i class="fab fa-whatsapp me-2"></i>Teklif Al
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                    Keşif İste
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seri 2 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-success px-3 py-2 rounded-pill">Doğal Akışkanlı</span>
                                <span class="text-warning fw-bold"><i class="fa fa-fire me-1"></i> 75°C Yüksek Sıcaklık</span>
                            </div>
                            <h3 class="fw-bold mb-3">R290 Doğal Soğutucu Akışkanlı Seri</h3>
                            <p class="text-muted mb-4">
                                Doğal propan (R290) gazı kullanan yeni nesil teknoloji. 75°C çıkış suyu sıcaklığı sayesinde eski döküm veya panel radyatörlü binalarda tesisatı değiştirmeden doğrudan entegre edilir.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fa fa-check text-success me-2"></i> GWP = 3 ile küresel ısınmaya sıfır etki</li>
                                <li class="mb-2"><i class="fa fa-check text-success me-2"></i> 75°C su çıkışı ile radyatörlü sistemlere %100 uyum</li>
                                <li class="mb-2"><i class="fa fa-check text-success me-2"></i> -30°C ekstrem kış şartlarında dahi kesintisiz çalışma</li>
                                <li class="mb-2"><i class="fa fa-check text-success me-2"></i> SG-Ready (Akıllı Şebeke / Solar GES) tam entegrasyonu</li>
                            </ul>
                            <div class="d-flex gap-2">
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('R290 Yüksek Sıcaklık Isı Pompası hakkında bilgi ve teklif talep ediyorum.') }}" target="_blank" class="btn btn-success rounded-pill px-4">
                                    <i class="fab fa-whatsapp me-2"></i>Teklif Al
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-secondary rounded-pill px-4">
                                    Keşif İste
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seri 3 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-info text-white px-3 py-2 rounded-pill">Havuz Çözümleri</span>
                                <span class="text-primary fw-bold"><i class="fa fa-water me-1"></i> 4 Mevsim Havuz</span>
                            </div>
                            <h3 class="fw-bold mb-3">R32 Havuz Isı Pompası Serisi</h3>
                            <p class="text-muted mb-4">
                                Açık ve kapalı yüzme havuzlarınızı yılın 12 ayı ideal sıcaklıkta tutmak için geliştirilmiş özel titanyum eşanjörlü inverter havuz ısı pompası çözümleri.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fa fa-check text-info me-2"></i> Klor ve tuzlu suya dayanıklı saf titanyum ısı değiştirici</li>
                                <li class="mb-2"><i class="fa fa-check text-info me-2"></i> Yüksek COP (8.0-16.0) ile ultra düşük elektrik sarfiyatı</li>
                                <li class="mb-2"><i class="fa fa-check text-info me-2"></i> Otomatik akıllı ısıtma ve soğutma modu</li>
                            </ul>
                            <div class="d-flex gap-2">
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Havuz Isı Pompası hakkında bilgi ve teklif almak istiyorum.') }}" target="_blank" class="btn btn-info text-white rounded-pill px-4">
                                    <i class="fab fa-whatsapp me-2"></i>Teklif Al
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Seri 4 -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-dark px-3 py-2 rounded-pill">Endüstriyel & Ticari</span>
                                <span class="text-danger fw-bold"><i class="fa fa-building me-1"></i> Yüksek Kapasite</span>
                            </div>
                            <h3 class="fw-bold mb-3">Ticari & Endüstriyel Kaskad Sistemler</h3>
                            <p class="text-muted mb-4">
                                Oteller, hastaneler, fabrikalar, yurtlar ve siteler için kaskad bağlanabilir modüler ısı pompası çözümleri. Yüksek debili merkezi kullanım suyu ve konfor iklimlendirmesi.
                            </p>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fa fa-check text-dark me-2"></i> 16 adede kadar kaskad bağlantı ve merkezi otomasyon</li>
                                <li class="mb-2"><i class="fa fa-check text-dark me-2"></i> Yüksek tasarruf ve kısa amortisman süresi</li>
                                <li class="mb-2"><i class="fa fa-check text-dark me-2"></i> UK Elektronik mühendislik projelendirmesi</li>
                            </ul>
                            <div class="d-flex gap-2">
                                <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('Ticari / Endüstriyel Isı Pompası projemiz için keşif ve teklif istiyoruz.') }}" target="_blank" class="btn btn-dark rounded-pill px-4">
                                    <i class="fab fa-whatsapp me-2"></i>Teklif Al
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dynamic products if added in admin panel -->
            @if(isset($products) && $products->count() > 0)
            <div class="mt-5 pt-4">
                <h4 class="fw-bold mb-4">Katalog Ürünleri</h4>
                <div class="row g-4">
                    @foreach($products as $product)
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm rounded-3">
                            <img src="{{ str_starts_with($product->image, 'http') ? $product->image : asset($product->image) }}" class="card-img-top p-3" alt="{{ $product->name }}" style="height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <h6 class="card-title fw-bold">{{ $product->name }}</h6>
                                <p class="card-text text-muted small">{{ Str::limit(strip_tags($product->description), 80) }}</p>
                                <a href="{{ route('product.detail', $product->slug) }}" class="btn btn-sm btn-primary rounded-pill w-100">İncele</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
    <!-- Product Series End -->

    <!-- Isı Pompası Ön Değerlendirme Formu Start -->
    @php
        $rawWhatsapp = \App\Models\Setting::get('product_whatsapp');
        if (empty($rawWhatsapp)) {
            $rawWhatsapp = \App\Models\Setting::get('display_phone', '+905053967070');
        }
        $targetWhatsapp = preg_replace('/[^0-9]/', '', $rawWhatsapp);
        if (empty($targetWhatsapp)) {
            $targetWhatsapp = '905053967070';
        }
    @endphp

    <div class="container-xxl py-5" id="onDegerlendirmeFormu">
        <div class="container" style="max-width: 860px;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <span class="badge bg-primary px-3 py-2 rounded-pill text-uppercase fw-bold mb-2">Hızlı & Kolay Keşif</span>
                <h2 class="display-6 fw-bold">Isı Pompası Ön Değerlendirme Formu</h2>
                <p class="text-muted">Doğru cihaz ve kapasiteyi seçebilmemiz için binanız ve kullanım alışkanlıklarınız hakkında bilgileri doldurun. Yanıtlarınız doğrudan <strong>WhatsApp</strong> üzerinden uzman mühendis ekibimize okunaklı bir rapor olarak iletilecektir.</p>
            </div>

            <form id="heatPumpEvalForm" class="evaluation-form" novalidate>
                <!-- Bölüm: Müşteri Bilgileri -->
                <div class="card border shadow-sm rounded-4 p-4 mb-4 bg-white">
                    <h4 class="fw-bold text-primary mb-1"><i class="fa fa-user-circle me-2"></i>Müşteri Bilgileri</h4>
                    <p class="text-muted small mb-4">Adınız ve telefon numaranız teklifinizi size ulaştırmamız için zorunludur.</p>
                    
                    <div class="mb-3 form-group-item" data-req="1">
                        <label for="eval_ad" class="form-label fw-semibold">Müşteri Adı Soyadı <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-lg rounded-3" id="eval_ad" name="ad" placeholder="Adınız ve Soyadınız">
                        <div class="invalid-feedback">Lütfen adınızı ve soyadınızı giriniz.</div>
                    </div>

                    <div class="mb-3 form-group-item" data-req="1">
                        <label for="eval_tel" class="form-label fw-semibold">Müşteri Telefon Numarası <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control form-control-lg rounded-3" id="eval_tel" name="tel" placeholder="05XX XXX XX XX">
                        <div class="invalid-feedback">Lütfen telefon numaranızı giriniz.</div>
                    </div>

                    <div class="mb-0 form-group-item">
                        <label for="eval_adres" class="form-label fw-semibold">Adres / İl - İlçe</label>
                        <textarea class="form-control rounded-3" id="eval_adres" name="adres" rows="2" placeholder="Örn: Hatay / Dörtyol veya adresiniz"></textarea>
                    </div>
                </div>

                <!-- Bölüm 1: Bina ve Yapı Özellikleri -->
                <div class="card border shadow-sm rounded-4 p-4 mb-4 bg-white">
                    <h4 class="fw-bold text-primary mb-1"><i class="fa fa-home me-2"></i>1. Bina ve Yapı Özellikleri</h4>
                    <p class="text-muted small mb-4">Binanın mimari ve alan bilgileri cihaz kapasitesinin belirlenmesi için gereklidir.</p>

                    <div class="mb-4 form-group-item">
                        <label for="eval_m2" class="form-label fw-semibold">Binanın toplam net kullanım alanı kaç metrekare (m²)?</label>
                        <div class="input-group input-group-lg" style="max-width: 280px;">
                            <input type="number" class="form-control rounded-start-3" id="eval_m2" name="m2" min="1" placeholder="Örn: 150">
                            <span class="input-group-text rounded-end-3">m²</span>
                        </div>
                    </div>

                    <div class="mb-4 form-group-item">
                        <label for="eval_sehir" class="form-label fw-semibold">Binanın bulunduğu şehir ve bölge neresi?</label>
                        <span class="form-text text-muted d-block mb-2">Kışın en düşük dış ortam sıcaklığını bilmek cihaz seçimi için kritiktir.</span>
                        <input type="text" class="form-control form-control-lg rounded-3" id="eval_sehir" name="sehir" placeholder="Örn: Hatay Dörtyol / Kışın en düşük +5°C">
                    </div>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Binanın yalıtım durumu nasıl? <span class="text-muted fw-normal">(Birden fazla seçilebilir)</span></label>
                        <span class="form-text text-muted d-block mb-2">Duvarlarda mantolama var mı, camlar çift cam mı, çatı yalıtımı yapılmış mı?</span>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Duvarlarda mantolama var', 'Camlar çift cam', 'Çatı yalıtımı yapılmış', 'Hiçbiri', 'Bilmiyorum'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="checkbox" name="yalitim" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Bina kaç katlı ve ısıtılacak alan tek bir kat mı yoksa müstakil bir villa mı?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Tek kat', 'Apartman dairesi', 'Çok katlı müstakil villa'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="kat" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-0 form-group-item">
                        <label class="form-label fw-semibold d-block">Binanın tavan yüksekliği standart (2,70 – 2,80 m) mı yoksa asma kat/galeri boşluğu var mı?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Standart yükseklik', 'Asma kat / galeri boşluğu var'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="tavan" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Bölüm 2: Isıtma ve Soğutma Sistemi -->
                <div class="card border shadow-sm rounded-4 p-4 mb-4 bg-white">
                    <h4 class="fw-bold text-primary mb-1"><i class="fa fa-fire me-2"></i>2. Mevcut veya Planlanan Isıtma/Soğutma Sistemi</h4>
                    <p class="text-muted small mb-4">Uç birimlerin türü ısı pompasının ideal çıkış suyu sıcaklığını belirler.</p>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Yerden ısıtma (radyant) sistemi mi yoksa radyatör (petek) sistemi mi kullanılacak?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Yerden ısıtma', 'Radyatör (petek)', 'İkisi birlikte'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="dagitim" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4 form-group-item conditional-field d-none" id="field_petek">
                        <label class="form-label fw-semibold d-block">Radyatör ise peteklerinizin türü nedir?</label>
                        <span class="form-text text-muted d-block mb-2">Isı pompaları düşük sıcaklıkta çalışan yerden ısıtmada en yüksek verimi verir.</span>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Alüminyum', 'Panel radyatör', 'Döküm'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="checkbox" name="petek" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Sistem sadece ısıtma için mi kullanılacak, yoksa yazın soğutma (klima etkisi) da isteniyor mu?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Sadece ısıtma', 'Isıtma ve soğutma'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="mod" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-0 form-group-item conditional-field d-none" id="field_fancoil">
                        <label class="form-label fw-semibold d-block">Yazın soğutma isteniyorsa fancoil sistemi kurulacak mı?</label>
                        <span class="form-text text-muted d-block mb-2">Yerden ısıtma borularından soğutma yapılması yoğuşma riski nedeniyle zordur; fancoil veya duvardan soğutma tercih edilir.</span>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Evet', 'Hayır', 'Henüz karar vermedim'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="fancoil" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Bölüm 3: Kullanım Suyu ve Tüketim Alışkanlıkları -->
                <div class="card border shadow-sm rounded-4 p-4 mb-4 bg-white">
                    <h4 class="fw-bold text-primary mb-1"><i class="fa fa-shower me-2"></i>3. Kullanım Suyu (Boyler) ve Tüketim Alışkanlıkları</h4>
                    <p class="text-muted small mb-4">Sıcak su ihtiyacına göre boyler hacmi ve cihaz seçimi optimize edilir.</p>

                    <div class="mb-4 form-group-item">
                        <label for="eval_kisi" class="form-label fw-semibold">Evde sürekli yaşayan kaç kişi var?</label>
                        <span class="form-text text-muted d-block mb-2">Sıcak su ihtiyacını ve boyler hacmini belirlemek için.</span>
                        <div class="input-group input-group-lg" style="max-width: 250px;">
                            <input type="number" class="form-control rounded-start-3" id="eval_kisi" name="kisi" min="1" placeholder="Örn: 4">
                            <span class="input-group-text rounded-end-3">Kişi</span>
                        </div>
                    </div>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Isı pompası aynı zamanda banyo/mutfak sıcak suyunu (kullanım sıcak suyu) da karşılayacak mı?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Evet', 'Hayır'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="skw" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3 form-group-item">
                        <label class="form-label fw-semibold d-block">Evde jakuzi, büyük küvet veya aynı anda çalışan birden fazla duş gibi yoğun sıcak su tüketen alanlar var mı?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Evet', 'Hayır'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="yogun" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-0 form-group-item conditional-field d-none" id="field_yogunnot">
                        <label for="eval_yogunnot" class="form-label fw-semibold">Varsa kısaca belirtin</label>
                        <textarea class="form-control rounded-3" id="eval_yogunnot" name="yogunnot" rows="2" placeholder="Örn: 2 ebeveyn banyosu ve 1 adet jakuzi bulunmaktadır"></textarea>
                    </div>
                </div>

                <!-- Bölüm 4: Altyapı ve Kurulum Alanı -->
                <div class="card border shadow-sm rounded-4 p-4 mb-4 bg-white">
                    <h4 class="fw-bold text-primary mb-1"><i class="fa fa-bolt me-2"></i>4. Altyapı ve Kurulum Alanı</h4>
                    <p class="text-muted small mb-4">Montaj konumu ve elektrik gücü uyumu gereklilikleridir.</p>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Evin elektrik altyapısı monofaze (220V) mi yoksa trifaze (380V) mi?</label>
                        <span class="form-text text-muted d-block mb-2">Yüksek kapasiteli ısı pompaları trifaze elektrik gerektirir.</span>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Monofaze (220V)', 'Trifaze (380V)', 'Bilmiyorum'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="elk" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-4 form-group-item">
                        <label class="form-label fw-semibold d-block">Dış üniteyi koymak için uygun bir bahçe, balkon veya teras alanı var mı?</label>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Bahçe', 'Balkon', 'Teras', 'Uygun alan yok'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="radio" name="dis" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-0 form-group-item">
                        <label class="form-label fw-semibold d-block">Mevcut bir kazan, kombi veya güneş enerjisi sistemi var mı?</label>
                        <span class="form-text text-muted d-block mb-2">Isı pompası hibrit olarak bu sistemlere entegre edilebilir.</span>
                        <div class="d-flex flex-wrap gap-2 opt-group">
                            @foreach(['Kazan', 'Kombi', 'Güneş enerjisi', 'Hiçbiri'] as $opt)
                            <label class="custom-opt-btn">
                                <input type="checkbox" name="mevcut" value="{{ $opt }}">
                                <span>{{ $opt }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Gönderim Alanı -->
                <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 text-center bg-light">
                    <div class="d-inline-flex align-items-center justify-content-center bg-success text-white rounded-circle mx-auto mb-3" style="width: 60px; height: 60px;">
                        <i class="fab fa-whatsapp fa-2x"></i>
                    </div>
                    <h4 class="fw-bold mb-2">Ön Değerlendirmenizi Hemen Gönderin</h4>
                    <p class="text-muted small mb-4 mx-auto" style="max-width: 600px;">
                        Verdiğiniz yanıtlar düzenli bir rapor halinde <strong>WhatsApp</strong> üzerinden teknik ekibimize iletilir. Mühendislerimiz projenize en uygun cihazı ve fiyat teklifini hemen hazırlar.
                    </p>
                    
                    <div class="form-check form-switch d-inline-block text-start mb-4">
                        <input class="form-check-input" type="checkbox" id="eval_kvkk" checked required>
                        <label class="form-check-label small text-muted" for="eval_kvkk">
                            <strong>UK Elektronik KVKK Aydınlatma Metnini</strong> okudum, inceledim ve kabul ediyorum.
                            <a href="#kvkkModal" data-bs-toggle="modal" data-bs-target="#kvkkModal" class="text-primary text-decoration-underline fw-semibold ms-1">Metni İnceleyin</a>
                        </label>
                    </div>

                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <button type="button" id="btnSendWhatsapp" class="btn btn-success btn-lg rounded-pill px-5 py-3 fw-bold shadow">
                            <i class="fab fa-whatsapp fa-lg me-2"></i> WhatsApp ile Teklif Talebini Gönder
                        </button>
                        <button type="button" id="btnPreviewModal" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-semibold">
                            <i class="fa fa-eye me-2"></i> Raporu Önizle
                        </button>
                    </div>
                </div>
            </form>

            <!-- Önizleme ve Kopyalama Kartı -->
            <div id="evalPreviewBox" class="card border-0 shadow-lg rounded-4 p-4 mt-4 d-none bg-white">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold text-success mb-0"><i class="fab fa-whatsapp me-2"></i>Hazırlanan WhatsApp Mesaj Özeti</h5>
                    <button type="button" id="btnClosePreview" class="btn btn-sm btn-outline-secondary rounded-pill">Kapat</button>
                </div>
                <pre id="evalPreviewText" class="p-3 bg-light rounded-3 border text-dark" style="white-space: pre-wrap; font-family: monospace; font-size: 0.92rem; max-height: 400px; overflow-y: auto; line-height: 1.6;"></pre>
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <button type="button" id="btnDirectSendFromPreview" class="btn btn-success rounded-pill px-4 fw-bold">
                        <i class="fab fa-whatsapp me-2"></i> WhatsApp'ta Aç ve Gönder
                    </button>
                    <button type="button" id="btnCopyText" class="btn btn-outline-secondary rounded-pill px-4">
                        <i class="fa fa-copy me-2"></i> Metni Kopyala
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-opt-btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border: 1.5px solid #d3e0e1;
            border-radius: 9px;
            background: #f8fafc;
            cursor: pointer;
            font-size: 0.95rem;
            font-weight: 500;
            color: #1e293b;
            transition: all 0.2s ease;
            user-select: none;
            margin: 0;
        }
        .custom-opt-btn:hover {
            border-color: #0f5565;
            background: #f1f5f9;
        }
        .custom-opt-btn input {
            accent-color: #0f5565;
            width: 17px;
            height: 17px;
            margin: 0;
        }
        .custom-opt-btn.is-active,
        .custom-opt-btn:has(input:checked) {
            border-color: #0f5565;
            background: #e2eeef;
            color: #0f5565;
            font-weight: 600;
        }
        .form-group-item.has-error input {
            border-color: #dc3545 !important;
        }
        .form-group-item.has-error .invalid-feedback {
            display: block;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('heatPumpEvalForm');
            const targetWhatsapp = "{{ $targetWhatsapp }}";

            // Dinamik alan gizleme/gösterme
            function syncConditions() {
                // dagitim -> petek
                const dagitim = form.querySelector('input[name="dagitim"]:checked');
                const dagitimVal = dagitim ? dagitim.value : '';
                const fieldPetek = document.getElementById('field_petek');
                if (fieldPetek) {
                    const showPetek = /Radyatör|İkisi/.test(dagitimVal);
                    fieldPetek.classList.toggle('d-none', !showPetek);
                }

                // mod -> fancoil
                const mod = form.querySelector('input[name="mod"]:checked');
                const modVal = mod ? mod.value : '';
                const fieldFancoil = document.getElementById('field_fancoil');
                if (fieldFancoil) {
                    const showFancoil = /soğutma/.test(modVal);
                    fieldFancoil.classList.toggle('d-none', !showFancoil);
                }

                // yogun -> yogunnot
                const yogun = form.querySelector('input[name="yogun"]:checked');
                const yogunVal = yogun ? yogun.value : '';
                const fieldYogunnot = document.getElementById('field_yogunnot');
                if (fieldYogunnot) {
                    const showYogunnot = (yogunVal === 'Evet');
                    fieldYogunnot.classList.toggle('d-none', !showYogunnot);
                }
            }

            form.addEventListener('change', syncConditions);
            form.addEventListener('input', syncConditions);
            syncConditions();

            // Seçim butonlarını aktif renkle işaretleme
            form.querySelectorAll('.custom-opt-btn input').forEach(input => {
                input.addEventListener('change', function() {
                    if (this.type === 'radio') {
                        form.querySelectorAll(`input[name="${this.name}"]`).forEach(r => {
                            r.closest('.custom-opt-btn')?.classList.toggle('is-active', r.checked);
                        });
                    } else {
                        this.closest('.custom-opt-btn')?.classList.toggle('is-active', this.checked);
                    }
                });
            });

            // WhatsApp Mesaj Formatı
            function buildWhatsappMessage() {
                const ad = (document.getElementById('eval_ad')?.value || '').trim();
                const tel = (document.getElementById('eval_tel')?.value || '').trim();
                const adres = (document.getElementById('eval_adres')?.value || '').trim();

                const m2 = (document.getElementById('eval_m2')?.value || '').trim();
                const sehir = (document.getElementById('eval_sehir')?.value || '').trim();
                
                const yalitim = Array.from(form.querySelectorAll('input[name="yalitim"]:checked')).map(c => c.value).join(', ');
                const kat = form.querySelector('input[name="kat"]:checked')?.value || '';
                const tavan = form.querySelector('input[name="tavan"]:checked')?.value || '';

                const dagitim = form.querySelector('input[name="dagitim"]:checked')?.value || '';
                const petek = Array.from(form.querySelectorAll('input[name="petek"]:checked')).map(c => c.value).join(', ');
                const mod = form.querySelector('input[name="mod"]:checked')?.value || '';
                const fancoil = form.querySelector('input[name="fancoil"]:checked')?.value || '';

                const kisi = (document.getElementById('eval_kisi')?.value || '').trim();
                const skw = form.querySelector('input[name="skw"]:checked')?.value || '';
                const yogun = form.querySelector('input[name="yogun"]:checked')?.value || '';
                const yogunnot = (document.getElementById('eval_yogunnot')?.value || '').trim();

                const elk = form.querySelector('input[name="elk"]:checked')?.value || '';
                const dis = form.querySelector('input[name="dis"]:checked')?.value || '';
                const mevcut = Array.from(form.querySelectorAll('input[name="mevcut"]:checked')).map(c => c.value).join(', ');

                let msg = "📋 *ISI POMPASI ÖN DEĞERLENDİRME FORMU*\n";
                msg += "━━━━━━━━━━━━━━━━━━━━\n\n";

                msg += "👤 *MÜŞTERİ BİLGİLERİ*\n";
                msg += "• *Ad Soyad:* " + (ad || 'Belirtilmedi') + "\n";
                msg += "• *Telefon:* " + (tel || 'Belirtilmedi') + "\n";
                if (adres) msg += "• *Adres:* " + adres + "\n";
                msg += "\n";

                msg += "🏠 *1. BİNA VE YAPI ÖZELLİKLERİ*\n";
                if (m2) msg += "• *Net Kullanım Alanı:* " + m2 + " m²\n";
                if (sehir) msg += "• *Şehir / Bölge:* " + sehir + "\n";
                if (yalitim) msg += "• *Yalıtım Durumu:* " + yalitim + "\n";
                if (kat) msg += "• *Yapı Tipi / Kat:* " + kat + "\n";
                if (tavan) msg += "• *Tavan Yüksekliği:* " + tavan + "\n";
                msg += "\n";

                msg += "🔥 *2. ISITMA & SOĞUTMA SİSTEMİ*\n";
                if (dagitim) msg += "• *Dağıtım Türü:* " + dagitim + "\n";
                if (petek && /Radyatör|İkisi/.test(dagitim)) msg += "• *Petek Türü:* " + petek + "\n";
                if (mod) msg += "• *Çalışma Modu:* " + mod + "\n";
                if (fancoil && /soğutma/.test(mod)) msg += "• *Fancoil Sistemi:* " + fancoil + "\n";
                msg += "\n";

                msg += "🚿 *3. KULLANIM SUYU (BOYLER) & TÜKETİM*\n";
                if (kisi) msg += "• *Yaşayan Kişi Sayısı:* " + kisi + " kişi\n";
                if (skw) msg += "• *Kullanım Sıcak Suyu:* " + skw + "\n";
                if (yogun) msg += "• *Yoğun Sıcak Su (Jakuzi vb.):* " + yogun + "\n";
                if (yogunnot && yogun === 'Evet') msg += "• *Yoğun Tüketim Detayı:* " + yogunnot + "\n";
                msg += "\n";

                msg += "⚡ *4. ALTYAPI VE KURULUM ALANI*\n";
                if (elk) msg += "• *Elektrik Altyapısı:* " + elk + "\n";
                if (dis) msg += "• *Dış Ünite Yeri:* " + dis + "\n";
                if (mevcut) msg += "• *Mevcut Isıtma Sistemi:* " + mevcut + "\n";
                msg += "\n";

                msg += "━━━━━━━━━━━━━━━━━━━━\n";
                msg += "_Bu talep UK Elektronik Isı Pompası Ön Değerlendirme Formu üzerinden gönderilmiştir._";

                return msg;
            }

            // Doğrulama kontrolü
            function validateForm() {
                let valid = true;
                form.querySelectorAll('[data-req="1"]').forEach(item => {
                    const input = item.querySelector('input');
                    const val = input ? input.value.trim() : '';
                    if (!val) {
                        item.classList.add('has-error');
                        valid = false;
                    } else {
                        item.classList.remove('has-error');
                    }
                });
                if (!valid) {
                    const firstError = form.querySelector('.has-error');
                    if (firstError) {
                        firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstError.querySelector('input')?.focus();
                    }
                }
                return valid;
            }

            // WhatsApp'a yönlendirme
            function sendToWhatsapp() {
                if (!validateForm()) return;
                const text = buildWhatsappMessage();
                const url = "https://api.whatsapp.com/send?phone=" + targetWhatsapp + "&text=" + encodeURIComponent(text);
                window.open(url, '_blank');
            }

            document.getElementById('btnSendWhatsapp')?.addEventListener('click', sendToWhatsapp);
            document.getElementById('btnDirectSendFromPreview')?.addEventListener('click', sendToWhatsapp);

            // Önizleme
            document.getElementById('btnPreviewModal')?.addEventListener('click', function() {
                if (!validateForm()) return;
                const text = buildWhatsappMessage();
                const previewBox = document.getElementById('evalPreviewBox');
                const previewText = document.getElementById('evalPreviewText');
                if (previewText) previewText.textContent = text;
                if (previewBox) {
                    previewBox.classList.remove('d-none');
                    previewBox.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });

            document.getElementById('btnClosePreview')?.addEventListener('click', function() {
                document.getElementById('evalPreviewBox')?.classList.add('d-none');
            });

            // Metni Kopyala
            document.getElementById('btnCopyText')?.addEventListener('click', async function() {
                const text = document.getElementById('evalPreviewText')?.textContent || '';
                try {
                    await navigator.clipboard.writeText(text);
                    const orig = this.innerHTML;
                    this.innerHTML = '<i class="fa fa-check me-2 text-success"></i> Kopyalandı!';
                    setTimeout(() => this.innerHTML = orig, 2000);
                } catch (e) {
                    alert('Metin seçildi, lütfen kopyalayınız.');
                }
            });
        });
    </script>
    <!-- Isı Pompası Ön Değerlendirme Formu End -->

    <!-- FAQ Heat Pump Start -->
    <div class="container-xxl py-5">
        <div class="container" style="max-width: 900px;">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase fw-bold">// Merak Edilenler</h6>
                <h1 class="display-6 fw-bold">Isı Pompası Hakkında Sıkça Sorulanlar</h1>
            </div>
            <div class="accordion" id="heatPumpFaq">
                <div class="accordion-item border mb-3 rounded shadow-sm overflow-hidden">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Isı pompası doğalgaz olmayan yerlerde kullanılabilir mi?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#heatPumpFaq">
                        <div class="accordion-body text-muted">
                            Evet, ısı pompaları elektriğin olduğu her yerde çalışır. Doğalgaz hattının olmadığı köyler, yaylalar, yazlık siteler ve müstakil evler için en ekonomik ve konforlu ısınma çözümüdür. Kömür, fuel-oil veya tüp gaz gibi zahmetli yakıtlara gerek kalmaz.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border mb-3 rounded shadow-sm overflow-hidden">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            Mevcut peteklerimi (radyatörlerimi) değiştirmem gerekir mi?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#heatPumpFaq">
                        <div class="accordion-body text-muted">
                            Yerden ısıtma sistemlerinde 35-45°C çıkış suyu yeterli olduğundan verim en üst seviyededir. Ancak Ersutek R290 serisi yüksek sıcaklık ısı pompalarımız ile 75°C'ye kadar sıcak su üretilebildiğinden, standart radyatörlü sistemlerinize herhangi bir tadilat yapmadan doğrudan bağlanabilmektedir.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border mb-3 rounded shadow-sm overflow-hidden">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Güneş paneli (GES) ile birlikte nasıl çalışır?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#heatPumpFaq">
                        <div class="accordion-body text-muted">
                            Isı pompalarımız SG-Ready (Smart Grid) desteğine sahiptir. Çatınızdaki güneş panelleri elektrik üretirken, sistem bunu algılayarak ısı pompasını çalıştırır, boylerdeki kullanım suyunu ve evinizi ısıtır. Böylece şebekeden elektrik çekmeden güneş enerjisini depolamış olursunuz.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->
@include('partials.kvkk-modal')

@endsection

