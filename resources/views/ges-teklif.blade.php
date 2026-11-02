@extends('layouts.app')

@section('title', 'GES Teklif Formu - Güneş Enerjisi Teklifi Alın | UK Elektronik')
@section('meta_description', 'Çatı ve arazi tipi güneş enerjisi santrali (GES) projeleriniz için UK Elektronik uzman mühendis kadrosundan anında ücretsiz ön fizibilite ve teklif alın.')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('{{ asset('img/carousel-1.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">GES Teklif Formu</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">{{ __('common.home') }}</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('service') }}">{{ __('common.services') }}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">GES Teklif Formu</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Intro Header Section Start -->
    <div class="container-xxl py-3">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="text-primary text-uppercase fw-bold">// Ücretsiz Ön Fizibilite & Mühendislik</h6>
                <h1 class="display-6 fw-bold mb-3">Güneş Enerjisi (GES) Teklifinizi Hemen Alın</h1>
                <p class="text-muted fs-6">
                    Aşağıdaki formu doldurarak projenize özel güneş enerjisi sistemi için yaklaşık güç ve maliyet analizini uzman mühendislerimizden doğrudan WhatsApp üzerinden anında talep edebilirsiniz.
                </p>
            </div>
        </div>
    </div>
    <!-- Intro Header Section End -->

    <!-- Form Section Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10">
                    <div class="bg-white rounded-4 shadow-lg p-4 p-md-5 border">
                        <form id="gesForm" novalidate>
                            <div class="row g-4 g-lg-5">
                                
                                <!-- SOL KOLON: İLETİŞİM BİLGİLERİ -->
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-4 pb-2 border-bottom">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 42px; height: 42px;">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <h4 class="fw-bold mb-0 text-dark">İletişim Bilgileriniz</h4>
                                    </div>

                                    <!-- İsim - Soyisim -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="isim" name="isim" placeholder="İsim - Soyisim" autocomplete="name" required>
                                        <label for="isim">İsim - Soyisim <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">Lütfen adınızı ve soyadınızı yazın.</div>
                                    </div>

                                    <!-- Proje Tipi -->
                                    <div class="mb-4 p-3 bg-light rounded-3 border" id="tipGrupWrapper">
                                        <label class="form-label fw-bold text-dark mb-2 d-block">
                                            Proje Tipi <span class="text-danger">*</span>
                                        </label>
                                        <div class="row g-2" id="tipGrup">
                                            <div class="col-6">
                                                <div class="form-check form-check-inline m-0 w-100 p-2 bg-white rounded border">
                                                    <input class="form-check-input ms-1 me-2" type="radio" name="proje_tipi" id="tip_ongrid" value="On Grid (Şebeke Bağlantılı)">
                                                    <label class="form-check-label fw-semibold" for="tip_ongrid">On Grid</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline m-0 w-100 p-2 bg-white rounded border">
                                                    <input class="form-check-input ms-1 me-2" type="radio" name="proje_tipi" id="tip_offgrid" value="Off Grid (Akü / Depolamalı)">
                                                    <label class="form-check-label fw-semibold" for="tip_offgrid">Off Grid</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline m-0 w-100 p-2 bg-white rounded border">
                                                    <input class="form-check-input ms-1 me-2" type="radio" name="proje_tipi" id="tip_sulama" value="Tarımsal Sulama">
                                                    <label class="form-check-label fw-semibold" for="tip_sulama">Sulama</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-check-inline m-0 w-100 p-2 bg-white rounded border">
                                                    <input class="form-check-input ms-1 me-2" type="radio" name="proje_tipi" id="tip_oztuketim" value="Öz Tüketim / Çatı">
                                                    <label class="form-check-label fw-semibold" for="tip_oztuketim">Öz Tüketim</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-danger small mt-2 d-none" id="tipErr">Lütfen bir proje tipi seçiniz.</div>
                                    </div>

                                    <!-- Telefon -->
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="05XXXXXXXXX" autocomplete="tel" required>
                                        <label for="telefon">Telefon Numarası <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">Geçerli bir telefon numarası yazın.</div>
                                    </div>

                                    <!-- E-posta -->
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="eposta" name="eposta" placeholder="ornek@alanadi.com" autocomplete="email" required>
                                        <label for="eposta">E-posta Adresi <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">Geçerli bir e-posta adresi yazın.</div>
                                    </div>

                                    <!-- Adres -->
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" autocomplete="street-address">
                                        <label for="adres">Açık Adres (Opsiyonel)</label>
                                    </div>

                                    <!-- Mesaj / Proje Notu -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="mesaj" name="mesaj" placeholder="Mesajınız..." style="height: 120px;"></textarea>
                                        <label for="mesaj">Proje ile İlgili Eklemek İstedikleriniz / Notlar</label>
                                    </div>
                                </div>

                                <!-- SAĞ KOLON: PROJE BİLGİLERİ -->
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-4 pb-2 border-bottom">
                                        <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 42px; height: 42px;">
                                            <i class="fa fa-solar-panel"></i>
                                        </div>
                                        <h4 class="fw-bold mb-0 text-dark">Proje Bilgileri</h4>
                                    </div>

                                    <!-- Şehir -->
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="sehir" name="sehir" required>
                                            <option value="">Lütfen Şehir Seçiniz</option>
                                        </select>
                                        <label for="sehir">Projenin Kurulacağı Şehir <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">Lütfen bir şehir seçiniz.</div>
                                    </div>

                                    <!-- İlçe -->
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="ilce" name="ilce">
                                            <option value="">Önce Şehir Seçiniz</option>
                                        </select>
                                        <label for="ilce">Yaşadığınız / Kurulacak İlçe</label>
                                    </div>

                                    <!-- Projenin Uygulanacağı Alan -->
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="alan" name="alan">
                                            <option value="Arazi GES">Arazi GES</option>
                                            <option value="Çatı GES" selected>Çatı GES</option>
                                            <option value="Tarımsal Sulama GES">Tarımsal Sulama GES</option>
                                            <option value="Fabrika / İşletme">Fabrika / İşletme</option>
                                            <option value="Müstakil Konut / Villa">Konut / Villa</option>
                                            <option value="Diğer">Diğer</option>
                                        </select>
                                        <label for="alan">Projenin Uygulanacağı Alan</label>
                                    </div>

                                    <!-- Tahmini kWp -->
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="kwp" name="kwp" min="1" step="any" placeholder="10" required>
                                        <label for="kwp">Tahmini İhtiyaç Duyulan Enerji (kWp) <span class="text-danger">*</span></label>
                                        <div class="invalid-feedback">Lütfen tahmini kWp değerini yazın (Örn: 10).</div>
                                    </div>

                                    <div class="row g-2 mb-3">
                                        <!-- Çalışan Sayısı -->
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="calisan" name="calisan" min="0" placeholder="5">
                                                <label for="calisan">Çalışan Sayısı</label>
                                            </div>
                                        </div>
                                        <!-- Aylık Ortalama Fatura -->
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="fatura" name="fatura" min="0" step="any" placeholder="5000">
                                                <label for="fatura">Aylık Fatura (TL)</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fatura Dosyası Yükleme Bilgisi -->
                                    <div class="p-3 mb-4 rounded border bg-light">
                                        <label class="form-label fw-bold text-dark small mb-1 d-flex align-items-center">
                                            <i class="fa fa-file-invoice text-primary me-2"></i> Elektrik Faturanızın Kopyası (Opsiyonel)
                                        </label>
                                        <input type="file" class="form-control form-control-sm" id="fatura_dosya" name="fatura_dosya" accept=".jpg,.jpeg,.png,.gif,.pdf">
                                        <div class="form-text small text-muted">
                                            <i class="fa fa-info-circle me-1"></i> Faturanızı dilerseniz buradan seçebilir, WhatsApp sohbeti açıldığında da doğrudan ekleyebilirsiniz.
                                        </div>
                                    </div>

                                    <!-- Güvenlik Kodu (Captcha) -->
                                    <div class="p-3 rounded border bg-light mb-3">
                                        <label class="form-label fw-bold text-dark small mb-2 d-flex align-items-center">
                                            <i class="fa fa-shield-alt text-primary me-2"></i> Güvenlik Doğrulaması <span class="text-danger ms-1">*</span>
                                        </label>
                                        <div class="d-flex align-items-center gap-3 flex-wrap">
                                            <canvas id="cv" width="180" height="50" class="border rounded bg-white" title="Güvenlik Kodu"></canvas>
                                            <button type="button" id="yenile" class="btn btn-outline-secondary btn-sm" title="Kodu Yenile">
                                                <i class="fa fa-sync-alt"></i> Yenile
                                            </button>
                                        </div>
                                        <div class="mt-2">
                                            <input type="text" class="form-control" id="kod" placeholder="Resimdeki 5 haneli kodu yazınız" autocomplete="off" required>
                                            <div class="text-danger small mt-1 d-none" id="kodErr">Güvenlik kodu hatalı, lütfen tekrar deneyin.</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Onaylar (KVKK, Ticari İletişim) -->
                            <div class="border-top pt-4 mt-3">
                                <div class="form-check form-switch mb-3" id="c1">
                                    <input class="form-check-input" type="checkbox" id="kvkk" required>
                                    <label class="form-check-label small" for="kvkk">
                                        <strong>UK Elektronik Solar Enerji KVKK Aydınlatma Metnini</strong> okudum, inceledim ve kişisel verilerimin teklif hazırlanması amacıyla işlenmesini onaylıyorum. <span class="text-danger">*</span>
                                    </label>
                                    <div class="text-danger small mt-1 d-none" id="kvkkErr">Devam etmek için KVKK metnini onaylamanız gerekmektedir.</div>
                                </div>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="onay_eposta" name="onay_eposta" checked>
                                    <label class="form-check-label small text-muted" for="onay_eposta">
                                        Ticari İletişim ve Ticari Elektronik İletiler Hakkında Yönetmelik kapsamında tarafıma elektronik posta gönderilmesine onay veriyorum.
                                    </label>
                                </div>
                                <div class="form-check form-switch mb-4">
                                    <input class="form-check-input" type="checkbox" id="onay_sms" name="onay_sms" checked>
                                    <label class="form-check-label small text-muted" for="onay_sms">
                                        Ticari İletişim ve Ticari Elektronik İletiler Hakkında Yönetmelik kapsamında tarafıma kısa mesaj (SMS) gönderilmesine onay veriyorum.
                                    </label>
                                </div>
                            </div>

                            <!-- Gönder Butonu ve Bilgilendirme -->
                            <div class="row align-items-center g-3 pt-2">
                                <div class="col-md-7">
                                    <div class="d-flex flex-wrap gap-2">
                                        <button class="btn btn-success btn-lg px-4 py-3 rounded-pill fw-bold shadow-sm d-inline-flex align-items-center" type="submit" id="gonder">
                                            <i class="fab fa-whatsapp fa-lg me-2"></i> WhatsApp ile Teklif İste
                                        </button>
                                        <button class="btn btn-outline-primary btn-lg px-4 py-3 rounded-pill fw-semibold" type="button" id="btnOnizle">
                                            <i class="fa fa-eye me-2"></i> Mesajı Önizle
                                        </button>
                                    </div>
                                    <small class="text-muted d-block mt-2">
                                        <i class="fa fa-lock me-1"></i> Bilgileriniz SSL güvencesi altındadır ve doğrudan resmi WhatsApp hattımıza aktarılır.
                                    </small>
                                </div>
                                <div class="col-md-5 text-md-end">
                                    <div class="p-3 rounded-3 bg-light border d-inline-block text-start w-100">
                                        <div class="small fw-bold text-dark mb-1"><i class="fa fa-headset text-primary me-1"></i> Hızlı Danışma Hattı:</div>
                                        <a href="tel:{{ $whatsappNumber }}" class="text-decoration-none fw-bold text-primary fs-5">
                                            <i class="fa fa-phone-alt me-1"></i> +90 (505) 396 70 70
                                        </a>
                                        <div class="small text-muted">Mühendislerimiz çalışma saatlerinde 15 dk içinde dönüş yapar.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Önizleme ve Kopyalama Kutusu (Açılır/Kapanır) -->
                            <div class="card mt-4 border-primary d-none" id="previewBox">
                                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                    <span class="fw-bold"><i class="fab fa-whatsapp me-2"></i> WhatsApp'a İletilecek Mesaj Taslağı</span>
                                    <button type="button" class="btn btn-sm btn-light py-0 px-2" id="btnClosePreview">&times;</button>
                                </div>
                                <div class="card-body bg-light">
                                    <pre id="previewText" class="p-3 bg-white border rounded text-dark" style="white-space: pre-wrap; font-family: inherit; font-size: 14px; max-height: 250px; overflow-y: auto;"></pre>
                                    <div class="d-flex justify-content-between align-items-center mt-2 flex-wrap gap-2">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" id="btnCopyText">
                                            <i class="fa fa-copy me-1"></i> Metni Kopyala
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm fw-bold px-3" id="btnSendFromPreview">
                                            <i class="fab fa-whatsapp me-1"></i> Şimdi WhatsApp ile Gönder
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Başarı Bildirimi -->
                            <div class="alert alert-success mt-4 d-none" id="okAlert" role="alert">
                                <h5 class="alert-heading fw-bold mb-1"><i class="fa fa-check-circle me-2"></i> Talebiniz Hazırlandı!</h5>
                                <p class="mb-0">
                                    WhatsApp uygulaması açıldı. Mesajınızı WhatsApp üzerinden ilettiğinizde teknik ekibimiz en kısa sürede projelendirme detaylarıyla tarafınıza dönüş sağlayacaktır.
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form Section End -->

    <!-- Bilgilendirici Kartlar: GES Süreci -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <h6 class="text-primary text-uppercase fw-bold">// Nasıl Çalışıyoruz?</h6>
                <h1 class="display-6 fw-bold">4 Adımda Anahtar Teslim Güneş Enerjisi</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded p-4 text-center h-100 shadow-sm border">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 70px; height: 70px;">
                            <span class="fs-3 fw-bold text-primary">1</span>
                        </div>
                        <h5 class="fw-bold mb-3">Ön Değerlendirme & Keşif</h5>
                        <p class="text-muted small mb-0">Teklif formunuzdaki verilerle çatınız veya araziniz uydu görüntüleri ve tüketim analiziyle incelenir.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-4 text-center h-100 shadow-sm border">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 70px; height: 70px;">
                            <span class="fs-3 fw-bold text-primary">2</span>
                        </div>
                        <h5 class="fw-bold mb-3">Mühendislik & Fizibilite</h5>
                        <p class="text-muted small mb-0">En yüksek verimli panel ve inverter kombinasyonu seçilerek amortisman süresi hesaplanır.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded p-4 text-center h-100 shadow-sm border">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 70px; height: 70px;">
                            <span class="fs-3 fw-bold text-primary">3</span>
                        </div>
                        <h5 class="fw-bold mb-3">Resmi İzinler & Başvuru</h5>
                        <p class="text-muted small mb-0">Dağıtım şirketi çağrı mektubu, TEDAŞ onay süreçleri ve bağlantı anlaşmaları UK Elektronik tarafından yürütülür.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-white rounded p-4 text-center h-100 shadow-sm border">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 70px; height: 70px;">
                            <span class="fs-3 fw-bold text-primary">4</span>
                        </div>
                        <h5 class="fw-bold mb-3">Montaj & Kabul</h5>
                        <p class="text-muted small mb-0">Sertifikalı ekibimiz kurulumu tamamlar, kabul yapılarak santraliniz elektrik üretmeye başlar.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 81 İl ve İlçe Listesi (ges-teklif-formu.html ile birebir uyumlu)
    const SEHIRLER = [
        "Adana","Adıyaman","Afyonkarahisar","Ağrı","Aksaray","Amasya","Ankara","Antalya","Ardahan","Artvin",
        "Aydın","Balıkesir","Bartın","Batman","Bayburt","Bilecik","Bingöl","Bitlis","Bolu","Burdur",
        "Bursa","Çanakkale","Çankırı","Çorum","Denizli","Diyarbakır","Düzce","Edirne","Elazığ","Erzincan",
        "Erzurum","Eskişehir","Gaziantep","Giresun","Gümüşhane","Hakkâri","Hatay","Iğdır","Isparta","İstanbul",
        "İzmir","Kahramanmaraş","Karabük","Karaman","Kars","Kastamonu","Kayseri","Kilis","Kırıkkale","Kırklareli",
        "Kırşehir","Kocaeli","Konya","Kütahya","Malatya","Manisa","Mardin","Mersin","Muğla","Muş",
        "Nevşehir","Niğde","Ordu","Osmaniye","Rize","Sakarya","Samsun","Şanlıurfa","Siirt","Sinop",
        "Sivas","Şırnak","Tekirdağ","Tokat","Trabzon","Tunceli","Uşak","Van","Yalova","Yozgat","Zonguldak"
    ];

    const ILCE_VERI = `
Adana:Aladağ,Ceyhan,Çukurova,Feke,İmamoğlu,Karaisalı,Karataş,Kozan,Pozantı,Saimbeyli,Sarıçam,Seyhan,Tufanbeyli,Yumurtalık,Yüreğir
Adıyaman:Besni,Çelikhan,Gerger,Gölbaşı,Kahta,Merkez,Samsat,Sincik,Tut
Afyonkarahisar:Başmakçı,Bayat,Bolvadin,Çay,Çobanlar,Dazkırı,Dinar,Emirdağ,Evciler,Hocalar,İhsaniye,İscehisar,Kızılören,Merkez,Sandıklı,Sinanpaşa,Sultandağı,Şuhut
Ağrı:Diyadin,Doğubayazıt,Eleşkirt,Hamur,Merkez,Patnos,Taşlıçay,Tutak
Aksaray:Ağaçören,Eskil,Gülağaç,Güzelyurt,Merkez,Ortaköy,Sarıyahşi,Sultanhanı
Amasya:Göynücek,Gümüşhacıköy,Hamamözü,Merkez,Merzifon,Suluova,Taşova
Ankara:Akyurt,Altındağ,Ayaş,Balâ,Beypazarı,Çamlıdere,Çankaya,Çubuk,Elmadağ,Etimesgut,Evren,Gölbaşı,Güdül,Haymana,Kahramankazan,Kalecik,Keçiören,Kızılcahamam,Mamak,Nallıhan,Polatlı,Pursaklar,Sincan,Şereflikoçhisar,Yenimahalle
Antalya:Akseki,Aksu,Alanya,Demre,Döşemealtı,Elmalı,Finike,Gazipaşa,Gündoğmuş,İbradı,Kaş,Kemer,Kepez,Konyaaltı,Korkuteli,Kumluca,Manavgat,Muratpaşa,Serik
Ardahan:Çıldır,Damal,Göle,Hanak,Merkez,Posof
Artvin:Ardanuç,Arhavi,Borçka,Hopa,Kemalpaşa,Merkez,Murgul,Şavşat,Yusufeli
Aydın:Bozdoğan,Buharkent,Çine,Didim,Efeler,Germencik,İncirliova,Karacasu,Karpuzlu,Koçarlı,Köşk,Kuşadası,Kuyucak,Nazilli,Söke,Sultanhisar,Yenipazar
Balıkesir:Altıeylül,Ayvalık,Balya,Bandırma,Bigadiç,Burhaniye,Dursunbey,Edremit,Erdek,Gömeç,Gönen,Havran,İvrindi,Karesi,Kepsut,Manyas,Marmara,Savaştepe,Sındırgı,Susurluk
Bartın:Amasra,Kurucaşile,Merkez,Ulus
Batman:Beşiri,Gercüş,Hasankeyf,Kozluk,Merkez,Sason
Bayburt:Aydıntepe,Demirözü,Merkez
Bilecik:Bozüyük,Gölpazarı,İnhisar,Merkez,Osmaneli,Pazaryeri,Söğüt,Yenipazar
Bingöl:Adaklı,Genç,Karlıova,Kiğı,Merkez,Solhan,Yayladere,Yedisu
Bitlis:Adilcevaz,Ahlat,Güroymak,Hizan,Merkez,Mutki,Tatvan
Bolu:Dörtdivan,Gerede,Göynük,Kıbrıscık,Mengen,Merkez,Mudurnu,Seben,Yeniçağa
Burdur:Ağlasun,Altınyayla,Bucak,Çavdır,Çeltikçi,Gölhisar,Karamanlı,Kemer,Merkez,Tefenni,Yeşilova
Bursa:Büyükorhan,Gemlik,Gürsu,Harmancık,İnegöl,İznik,Karacabey,Keles,Kestel,Mudanya,Mustafakemalpaşa,Nilüfer,Orhaneli,Orhangazi,Osmangazi,Yenişehir,Yıldırım
Çanakkale:Ayvacık,Bayramiç,Biga,Bozcaada,Çan,Eceabat,Ezine,Gelibolu,Gökçeada,Lapseki,Merkez,Yenice
Çankırı:Atkaracalar,Bayramören,Çerkeş,Eldivan,Ilgaz,Kızılırmak,Korgun,Kurşunlu,Merkez,Orta,Şabanözü,Yapraklı
Çorum:Alaca,Bayat,Boğazkale,Dodurga,İskilip,Kargı,Laçin,Mecitözü,Merkez,Oğuzlar,Ortaköy,Osmancık,Sungurlu,Uğurludağ
Denizli:Acıpayam,Babadağ,Baklan,Bekilli,Beyağaç,Bozkurt,Buldan,Çal,Çameli,Çardak,Çivril,Güney,Honaz,Kale,Merkezefendi,Pamukkale,Sarayköy,Serinhisar,Tavas
Diyarbakır:Bağlar,Bismil,Çermik,Çınar,Çüngüş,Dicle,Eğil,Ergani,Hani,Hazro,Kayapınar,Kocaköy,Kulp,Lice,Silvan,Sur,Yenişehir
Düzce:Akçakoca,Cumayeri,Çilimli,Gölyaka,Gümüşova,Kaynaşlı,Merkez,Yığılca
Edirne:Enez,Havsa,İpsala,Keşan,Lalapaşa,Meriç,Merkez,Süloğlu,Uzunköprü
Elazığ:Ağın,Alacakaya,Arıcak,Baskil,Karakoçan,Keban,Kovancılar,Maden,Merkez,Palu,Sivrice
Erzincan:Çayırlı,İliç,Kemah,Kemaliye,Merkez,Otlukbeli,Refahiye,Tercan,Üzümlü
Erzurum:Aşkale,Aziziye,Çat,Hınıs,Horasan,İspir,Karaçoban,Karayazı,Köprüköy,Narman,Oltu,Olur,Palandöken,Pasinler,Pazaryolu,Şenkaya,Tekman,Tortum,Uzundere,Yakutiye
Eskişehir:Alpu,Beylikova,Çifteler,Günyüzü,Han,İnönü,Mahmudiye,Mihalgazi,Mihalıççık,Odunpazarı,Sarıcakaya,Seyitgazi,Sivrihisar,Tepebaşı
Gaziantep:Araban,İslahiye,Karkamış,Nizip,Nurdağı,Oğuzeli,Şahinbey,Şehitkamil,Yavuzeli
Giresun:Alucra,Bulancak,Çamoluk,Çanakçı,Dereli,Doğankent,Espiye,Eynesil,Görele,Güce,Keşap,Merkez,Piraziz,Şebinkarahisar,Tirebolu,Yağlıdere
Gümüşhane:Kelkit,Köse,Kürtün,Merkez,Şiran,Torul
Hakkâri:Çukurca,Derecik,Merkez,Şemdinli,Yüksekova
Hatay:Altınözü,Antakya,Arsuz,Belen,Defne,Dörtyol,Erzin,Hassa,İskenderun,Kırıkhan,Kumlu,Payas,Reyhanlı,Samandağ,Yayladağı
Iğdır:Aralık,Karakoyunlu,Merkez,Tuzluca
Isparta:Aksu,Atabey,Eğirdir,Gelendost,Gönen,Keçiborlu,Merkez,Senirkent,Sütçüler,Şarkikaraağaç,Uluborlu,Yalvaç,Yenişarbademli
İstanbul:Adalar,Arnavutköy,Ataşehir,Avcılar,Bağcılar,Bahçelievler,Bakırköy,Başakşehir,Bayrampaşa,Beşiktaş,Beykoz,Beylikdüzü,Beyoğlu,Büyükçekmece,Çatalca,Çekmeköy,Esenler,Esenyurt,Eyüpsultan,Fatih,Gaziosmanpaşa,Güngören,Kadıköy,Kağıthane,Kartal,Küçükçekmece,Maltepe,Pendik,Sancaktepe,Sarıyer,Silivri,Sultanbeyli,Sultangazi,Şile,Şişli,Tuzla,Ümraniye,Üsküdar,Zeytinburnu
İzmir:Aliağa,Balçova,Bayındır,Bayraklı,Bergama,Beydağ,Bornova,Buca,Çeşme,Çiğli,Dikili,Foça,Gaziemir,Güzelbahçe,Karabağlar,Karaburun,Karşıyaka,Kemalpaşa,Kınık,Kiraz,Konak,Menderes,Menemen,Narlıdere,Ödemiş,Seferihisar,Selçuk,Tire,Torbalı,Urla
Kahramanmaraş:Afşin,Andırın,Çağlayancerit,Dulkadiroğlu,Ekinözü,Elbistan,Göksun,Nurhak,Onikişubat,Pazarcık,Türkoğlu
Karabük:Eflani,Eskipazar,Merkez,Ovacık,Safranbolu,Yenice
Karaman:Ayrancı,Başyayla,Ermenek,Kazımkarabekir,Merkez,Sarıveliler
Kars:Akyaka,Arpaçay,Digor,Kağızman,Merkez,Sarıkamış,Selim,Susuz
Kastamonu:Abana,Ağlı,Araç,Azdavay,Bozkurt,Cide,Çatalzeytin,Daday,Devrekani,Doğanyurt,Hanönü,İhsangazi,İnebolu,Küre,Merkez,Pınarbaşı,Seydiler,Şenpazar,Taşköprü,Tosya
Kayseri:Akkışla,Bünyan,Develi,Felahiye,Hacılar,İncesu,Kocasinan,Melikgazi,Özvatan,Pınarbaşı,Sarıoğlan,Sarız,Talas,Tomarza,Yahyalı,Yeşilhisar
Kilis:Elbeyli,Merkez,Musabeyli,Polateli
Kırıkkale:Bahşılı,Balışeyh,Çelebi,Delice,Karakeçili,Keskin,Merkez,Sulakyurt,Yahşihan
Kırklareli:Babaeski,Demirköy,Kofçaz,Lüleburgaz,Merkez,Pehlivanköy,Pınarhisar,Vize
Kırşehir:Akçakent,Akpınar,Boztepe,Çiçekdağı,Kaman,Merkez,Mucur
Kocaeli:Başiskele,Çayırova,Darıca,Derince,Dilovası,Gebze,Gölcük,İzmit,Kandıra,Karamürsel,Kartepe,Körfez
Konya:Ahırlı,Akören,Akşehir,Altınekin,Beyşehir,Bozkır,Cihanbeyli,Çeltik,Çumra,Derbent,Derebucak,Doğanhisar,Emirgazi,Ereğli,Güneysınır,Hadim,Halkapınar,Hüyük,Ilgın,Kadınhanı,Karapınar,Karatay,Kulu,Meram,Sarayönü,Selçuklu,Seydişehir,Taşkent,Tuzlukçu,Yalıhüyük,Yunak
Kütahya:Altıntaş,Aslanapa,Çavdarhisar,Domaniç,Dumlupınar,Emet,Gediz,Hisarcık,Merkez,Pazarlar,Simav,Şaphane,Tavşanlı
Malatya:Akçadağ,Arapgir,Arguvan,Battalgazi,Darende,Doğanşehir,Doğanyol,Hekimhan,Kale,Kuluncak,Pütürge,Yazıhan,Yeşilyurt
Manisa:Ahmetli,Akhisar,Alaşehir,Demirci,Gölmarmara,Gördes,Kırkağaç,Köprübaşı,Kula,Salihli,Sarıgöl,Saruhanlı,Selendi,Soma,Şehzadeler,Turgutlu,Yunusemre
Mardin:Artuklu,Dargeçit,Derik,Kızıltepe,Mazıdağı,Midyat,Nusaybin,Ömerli,Savur,Yeşilli
Mersin:Akdeniz,Anamur,Aydıncık,Bozyazı,Çamlıyayla,Erdemli,Gülnar,Mezitli,Mut,Silifke,Tarsus,Toroslar,Yenişehir
Muğla:Bodrum,Dalaman,Datça,Fethiye,Kavaklıdere,Köyceğiz,Marmaris,Menteşe,Milas,Ortaca,Seydikemer,Ula,Yatağan
Muş:Bulanık,Hasköy,Korkut,Malazgirt,Merkez,Varto
Nevşehir:Acıgöl,Avanos,Derinkuyu,Gülşehir,Hacıbektaş,Kozaklı,Merkez,Ürgüp
Niğde:Altunhisar,Bor,Çamardı,Çiftlik,Merkez,Ulukışla
Ordu:Akkuş,Altınordu,Aybastı,Çamaş,Çatalpınar,Çaybaşı,Fatsa,Gölköy,Gülyalı,Gürgentepe,İkizce,Kabadüz,Kabataş,Korgan,Kumru,Mesudiye,Perşembe,Ulubey,Ünye
Osmaniye:Bahçe,Düziçi,Hasanbeyli,Kadirli,Merkez,Sumbas,Toprakkale
Rize:Ardeşen,Çamlıhemşin,Çayeli,Derepazarı,Fındıklı,Güneysu,Hemşin,İkizdere,İyidere,Kalkandere,Merkez,Pazar
Sakarya:Adapazarı,Akyazı,Arifiye,Erenler,Ferizli,Geyve,Hendek,Karapürçek,Karasu,Kaynarca,Kocaali,Pamukova,Sapanca,Serdivan,Söğütlü,Taraklı
Samsun:19 Mayıs,Alaçam,Asarcık,Atakum,Ayvacık,Bafra,Canik,Çarşamba,Havza,İlkadım,Kavak,Ladik,Salıpazarı,Tekkeköy,Terme,Vezirköprü,Yakakent
Şanlıurfa:Akçakale,Birecik,Bozova,Ceylanpınar,Eyyübiye,Halfeti,Haliliye,Harran,Hilvan,Karaköprü,Siverek,Suruç,Viranşehir
Siirt:Baykan,Eruh,Kurtalan,Merkez,Pervari,Şirvan,Tillo
Sinop:Ayancık,Boyabat,Dikmen,Durağan,Erfelek,Gerze,Merkez,Saraydüzü,Türkeli
Sivas:Akıncılar,Altınyayla,Divriği,Doğanşar,Gemerek,Gölova,Gürün,Hafik,İmranlı,Kangal,Koyulhisar,Merkez,Suşehri,Şarkışla,Ulaş,Yıldızeli,Zara
Şırnak:Beytüşşebap,Cizre,Güçlükonak,İdil,Merkez,Silopi,Uludere
Tekirdağ:Çerkezköy,Çorlu,Ergene,Hayrabolu,Kapaklı,Malkara,Marmaraereğlisi,Muratlı,Saray,Süleymanpaşa,Şarköy
Tokat:Almus,Artova,Başçiftlik,Erbaa,Merkez,Niksar,Pazar,Reşadiye,Sulusaray,Turhal,Yeşilyurt,Zile
Trabzon:Akçaabat,Araklı,Arsin,Beşikdüzü,Çarşıbaşı,Çaykara,Dernekpazarı,Düzköy,Hayrat,Köprübaşı,Maçka,Of,Ortahisar,Sürmene,Şalpazarı,Tonya,Vakfıkebir,Yomra
Tunceli:Çemişgezek,Hozat,Mazgirt,Merkez,Nazımiye,Ovacık,Pertek,Pülümür
Uşak:Banaz,Eşme,Karahallı,Merkez,Sivaslı,Ulubey
Van:Bahçesaray,Başkale,Çaldıran,Çatak,Edremit,Erciş,Gevaş,Gürpınar,İpekyolu,Muradiye,Özalp,Saray,Tuşba
Yalova:Altınova,Armutlu,Çınarcık,Çiftlikköy,Merkez,Termal
Yozgat:Akdağmadeni,Aydıncık,Boğazlıyan,Çandır,Çayıralan,Çekerek,Kadışehri,Merkez,Saraykent,Sarıkaya,Sorgun,Şefaatli,Yenifakılı,Yerköy
Zonguldak:Alaplı,Çaycuma,Devrek,Ereğli,Gökçebey,Kilimli,Kozlu,Merkez
    `;

    const ILCELER = {};
    ILCE_VERI.trim().split("\n").forEach(line => {
        const idx = line.indexOf(":");
        if (idx !== -1) {
            const sehirAdi = line.slice(0, idx).trim();
            const ilceListesi = line.slice(idx + 1).split(",").map(i => i.trim());
            ILCELER[sehirAdi] = ilceListesi;
        }
    });

    const sehirSelect = document.getElementById('sehir');
    const ilceSelect = document.getElementById('ilce');

    SEHIRLER.forEach(s => {
        const opt = document.createElement('option');
        opt.value = s;
        opt.textContent = s;
        sehirSelect.appendChild(opt);
    });

    sehirSelect.addEventListener('change', function() {
        ilceSelect.innerHTML = '<option value="">Lütfen İlçe Seçiniz</option>';
        const secilenSehir = this.value;
        if (secilenSehir && ILCELER[secilenSehir]) {
            ILCELER[secilenSehir].forEach(ilce => {
                const opt = document.createElement('option');
                opt.value = ilce;
                opt.textContent = ilce;
                ilceSelect.appendChild(opt);
            });
        }
    });

    // Güvenlik Kodu (Canvas Captcha)
    let kodDegeri = "";
    function kodUret() {
        const harfler = "ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789";
        kodDegeri = Array.from({length: 5}, () => harfler[Math.floor(Math.random() * harfler.length)]).join("");
        const c = document.getElementById('cv');
        if (!c) return;
        const g = c.getContext('2d');
        g.clearRect(0, 0, c.width, c.height);
        
        // Arka plan gradyanı
        const gradient = g.createLinearGradient(0, 0, c.width, c.height);
        gradient.addColorStop(0, '#f8f9fa');
        gradient.addColorStop(1, '#e9ecef');
        g.fillStyle = gradient;
        g.fillRect(0, 0, c.width, c.height);

        // Gürültü noktaları
        for (let i = 0; i < 90; i++) {
            g.fillStyle = `rgba(0, 0, 0, ${Math.random() * 0.4})`;
            g.fillRect(Math.random() * c.width, Math.random() * c.height, 2, 2);
        }

        // Çizgiler
        g.strokeStyle = '#0d6efd';
        g.lineWidth = 1.5;
        g.beginPath();
        g.moveTo(0, 15 + Math.random() * 20);
        g.bezierCurveTo(50, 0, 100, 50, c.width, 15 + Math.random() * 20);
        g.stroke();

        // Harfleri çiz
        g.font = "bold 28px Roboto, Arial, sans-serif";
        g.textBaseline = "middle";
        [...kodDegeri].forEach((ch, i) => {
            g.save();
            g.translate(16 + i * 32, 25 + (Math.random() * 6 - 3));
            g.rotate((Math.random() - 0.5) * 0.3);
            g.fillStyle = i % 2 === 0 ? "#0d6efd" : "#ffc107";
            g.fillText(ch, 0, 0);
            g.restore();
        });
    }

    kodUret();
    document.getElementById('yenile')?.addEventListener('click', function() {
        kodUret();
        const kodInput = document.getElementById('kod');
        if (kodInput) kodInput.value = "";
    });

    // Hedef WhatsApp Numarası
    const targetWhatsapp = "{{ $whatsappNumber }}";

    // Mesaj Oluşturucu Fonksiyon
    function generateMessage() {
        const form = document.getElementById('gesForm');
        const isim = form.isim.value.trim();
        const projeTipi = form.querySelector('input[name="proje_tipi"]:checked')?.value || 'Belirtilmedi';
        const telefon = form.telefon.value.trim();
        const eposta = form.eposta.value.trim();
        const adres = form.adres.value.trim() || 'Belirtilmedi';
        const mesaj = form.mesaj.value.trim() || 'Belirtilmedi';

        const sehirVal = form.sehir.value || 'Belirtilmedi';
        const ilceVal = form.ilce.value || 'Belirtilmedi';
        const alanVal = form.alan.value || 'Belirtilmedi';
        const kwpVal = form.kwp.value ? `${form.kwp.value} kWp` : 'Belirtilmedi';
        const calisanVal = form.calisan.value ? `${form.calisan.value} Kişi` : 'Belirtilmedi';
        const faturaVal = form.fatura.value ? `${Number(form.fatura.value).toLocaleString('tr-TR')} TL` : 'Belirtilmedi';
        const dosyaVar = form.fatura_dosya.files && form.fatura_dosya.files.length > 0;

        let msg = `☀️ *GÜNEŞ ENERJİSİ (GES) TEKLİF TALEBİ*\n`;
        msg += `━━━━━━━━━━━━━━━━━━━━━\n\n`;
        
        msg += `👤 *İLETİŞİM BİLGİLERİ*\n`;
        msg += `• *Ad Soyad:* ${isim}\n`;
        msg += `• *Telefon:* ${telefon}\n`;
        msg += `• *E-posta:* ${eposta}\n`;
        msg += `• *Adres:* ${adres}\n\n`;

        msg += `⚡ *PROJE & KAPASİTE BİLGİLERİ*\n`;
        msg += `• *Proje Tipi:* ${projeTipi}\n`;
        msg += `• *Kurulum İli / İlçesi:* ${sehirVal} / ${ilceVal}\n`;
        msg += `• *Uygulama Alanı:* ${alanVal}\n`;
        msg += `• *Tahmini Güç İhtiyacı:* ${kwpVal}\n`;
        msg += `• *Aylık Ortalama Fatura:* ${faturaVal}\n`;
        msg += `• *Çalışan Sayısı:* ${calisanVal}\n\n`;

        if (dosyaVar) {
            msg += `📎 *Elektrik Faturası:* Formda dosya seçildi (${form.fatura_dosya.files[0].name}), bu sohbet üzerinden ek olarak iletiyorum.\n\n`;
        }

        if (mesaj && mesaj !== 'Belirtilmedi') {
            msg += `📝 *MÜŞTERİ NOTU:*\n${mesaj}\n\n`;
        }

        msg += `━━━━━━━━━━━━━━━━━━━━━\n`;
        msg += `✅ _KVKK ve İletişim Aydınlatma Metni onaylanmıştır._\n`;
        msg += `📍 _Bu talep UK Elektronik GES Teklif Formu üzerinden iletilmiştir._`;

        return msg;
    }

    // Doğrulama Fonksiyonu
    function validateForm() {
        const form = document.getElementById('gesForm');
        let isValid = true;

        // İsim
        if (!form.isim.value.trim()) {
            form.isim.classList.add('is-invalid');
            isValid = false;
        } else {
            form.isim.classList.remove('is-invalid');
            form.isim.classList.add('is-valid');
        }

        // Proje Tipi
        const tipSecili = form.querySelector('input[name="proje_tipi"]:checked');
        const tipErr = document.getElementById('tipErr');
        if (!tipSecili) {
            tipErr.classList.remove('d-none');
            isValid = false;
        } else {
            tipErr.classList.add('d-none');
        }

        // Telefon
        const telClean = form.telefon.value.replace(/\D/g, '');
        if (telClean.length < 10) {
            form.telefon.classList.add('is-invalid');
            isValid = false;
        } else {
            form.telefon.classList.remove('is-invalid');
            form.telefon.classList.add('is-valid');
        }

        // E-posta
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(form.eposta.value.trim())) {
            form.eposta.classList.add('is-invalid');
            isValid = false;
        } else {
            form.eposta.classList.remove('is-invalid');
            form.eposta.classList.add('is-valid');
        }

        // Şehir
        if (!form.sehir.value) {
            form.sehir.classList.add('is-invalid');
            isValid = false;
        } else {
            form.sehir.classList.remove('is-invalid');
            form.sehir.classList.add('is-valid');
        }

        // kWp
        if (!form.kwp.value || Number(form.kwp.value) <= 0) {
            form.kwp.classList.add('is-invalid');
            isValid = false;
        } else {
            form.kwp.classList.remove('is-invalid');
            form.kwp.classList.add('is-valid');
        }

        // Güvenlik Kodu
        const girilenKod = document.getElementById('kod').value.trim();
        const kodErr = document.getElementById('kodErr');
        if (!girilenKod || girilenKod.toLowerCase() !== kodDegeri.toLowerCase()) {
            kodErr.classList.remove('d-none');
            document.getElementById('kod').classList.add('is-invalid');
            isValid = false;
        } else {
            kodErr.classList.add('d-none');
            document.getElementById('kod').classList.remove('is-invalid');
            document.getElementById('kod').classList.add('is-valid');
        }

        // KVKK Switch
        const kvkk = document.getElementById('kvkk');
        const kvkkErr = document.getElementById('kvkkErr');
        if (!kvkk.checked) {
            kvkkErr.classList.remove('d-none');
            isValid = false;
        } else {
            kvkkErr.classList.add('d-none');
        }

        if (!isValid) {
            const firstInvalid = form.querySelector('.is-invalid, .is-invalid select, .d-none:not(#previewBox):not(#okAlert)');
            if (firstInvalid) {
                firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        return isValid;
    }

    // WhatsApp'a Yönlendirme
    function sendToWhatsapp() {
        if (!validateForm()) return;

        const message = generateMessage();
        const waUrl = `https://api.whatsapp.com/send?phone=${targetWhatsapp}&text=${encodeURIComponent(message)}`;
        
        document.getElementById('okAlert')?.classList.remove('d-none');
        window.open(waUrl, '_blank');
    }

    // Form Submit
    document.getElementById('gesForm')?.addEventListener('submit', function(e) {
        e.preventDefault();
        sendToWhatsapp();
    });

    // Önizleme Butonu
    document.getElementById('btnOnizle')?.addEventListener('click', function() {
        if (!validateForm()) return;
        const msg = generateMessage();
        document.getElementById('previewText').textContent = msg;
        document.getElementById('previewBox').classList.remove('d-none');
        document.getElementById('previewBox').scrollIntoView({ behavior: 'smooth', block: 'center' });
    });

    // Önizlemeyi Kapat
    document.getElementById('btnClosePreview')?.addEventListener('click', function() {
        document.getElementById('previewBox').classList.add('d-none');
    });

    // Metni Kopyala
    document.getElementById('btnCopyText')?.addEventListener('click', async function() {
        const text = document.getElementById('previewText')?.textContent || '';
        try {
            await navigator.clipboard.writeText(text);
            const orig = this.innerHTML;
            this.innerHTML = '<i class="fa fa-check text-success me-1"></i> Kopyalandı!';
            setTimeout(() => this.innerHTML = orig, 2000);
        } catch (e) {
            alert('Metin seçildi, lütfen kopyalayınız.');
        }
    });

    // Önizlemeden Gönder
    document.getElementById('btnSendFromPreview')?.addEventListener('click', function() {
        sendToWhatsapp();
    });

    // Dinamik input validasyon temizleme
    ['isim', 'telefon', 'eposta', 'sehir', 'kwp', 'kod'].forEach(id => {
        document.getElementById(id)?.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                this.classList.remove('is-invalid');
            }
        });
    });

    document.getElementById('kvkk')?.addEventListener('change', function() {
        if (this.checked) {
            document.getElementById('kvkkErr')?.classList.add('d-none');
        }
    });

    document.querySelectorAll('input[name="proje_tipi"]').forEach(r => {
        r.addEventListener('change', function() {
            document.getElementById('tipErr')?.classList.add('d-none');
        });
    });
});
</script>
@endpush

