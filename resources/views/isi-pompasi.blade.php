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

    <!-- Solar + Heat Pump Integration Banner Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-primary rounded-4 p-5 text-white position-relative overflow-hidden shadow-lg">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 text-white fw-bold mb-3">Güneş Enerjisi (GES) + Isı Pompası = 0 TL Fatura!</h2>
                        <p class="text-white-50 fs-5 mb-4">
                            Çatınıza kuracağımız fotovoltaik güneş panelleri gün boyu elektrik üretir, ısı pompanız bu elektriği kullanarak evinizi ısıtır ve sıcak suyunuzu hazırlar. Şebekeye bağımlılığınızı ortadan kaldırın.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-light rounded-pill px-5 py-3 fw-bold text-primary">
                                <i class="fa fa-envelope me-2"></i> Ücretsiz Keşif Talep Edin
                            </a>
                            <a href="https://wa.me/{{ $whatsappNumber }}?text={{ urlencode('GES ve Isı Pompası entegre sistem hakkında bilgi almak istiyorum.') }}" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-3 fw-bold">
                                <i class="fab fa-whatsapp me-2"></i> WhatsApp Danışma
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center mt-4 mt-lg-0">
                        <div class="p-4 bg-white rounded-circle d-inline-flex align-items-center justify-content-center shadow" style="width: 170px; height: 170px;">
                            <div class="text-center">
                                <span class="h1 fw-bold text-primary d-block mb-0">100%</span>
                                <span class="small text-muted fw-bold">Temiz Enerji</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

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
@endsection

