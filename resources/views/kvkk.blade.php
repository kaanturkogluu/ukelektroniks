@extends('layouts.app')

@section('title', 'KVKK Aydınlatma Metni - UK Elektronik')
@section('meta_description', 'UK Elektronik 6698 Sayılı Kişisel Verilerin Korunması Kanunu (KVKK) Kapsamında Aydınlatma Metni ve Gizlilik Politikası.')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('{{ asset('img/carousel-1.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">KVKK Aydınlatma Metni</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">{{ __('common.home') }}</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">KVKK Aydınlatma Metni</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Content Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                        <div class="border-bottom pb-3 mb-4">
                            <span class="badge bg-primary px-3 py-2 rounded-pill mb-2">6698 Sayılı Kanun Uyarınca</span>
                            <h2 class="fw-bold text-dark mb-1">KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİ AYDINLATMA METNİ</h2>
                            <small class="text-muted">Son Güncelleme: Kasım 2026</small>
                        </div>

                        <div class="kvkk-content text-muted lh-lg fs-6">
                            <p>
                                <strong>UK Elektronik Solar Enerji Sistemleri</strong> (“Şirket” veya “UK Elektronik”) olarak; 6698 sayılı Kişisel Verilerin Korunması Kanunu (“KVKK”) ve ilgili mevzuat kapsamında, veri sorumlusu sıfatıyla, tarafımıza iletmiş olduğunuz kişisel verilerinizin güvenliğine, gizliliğine ve hukuka uygun şekilde işlenmesine azami hassasiyet göstermekteyiz.
                            </p>
                            <p>
                                Bu Aydınlatma Metni, web sitemiz (<strong>{{ url('/') }}</strong>), teklif formlarımız (GES Teklif Formu, Isı Pompası Ön Değerlendirme Formu vb.), iletişim kanallarımız veya doğrudan kurulan temaslar aracılığıyla toplanan kişisel verilerinizin işlenme usul ve esasları hakkında sizleri bilgilendirmek amacıyla hazırlanmıştır.
                            </p>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">1. Veri Sorumlusu</h4>
                            <p>
                                KVKK uyarınca kişisel verileriniz; veri sorumlusu olarak <strong>UK Elektronik</strong> tarafından aşağıda açıklanan kapsamda işlenebilecektir:
                            </p>
                            <ul class="list-unstyled ps-3">
                                <li><i class="fa fa-building text-primary me-2"></i> <strong>Unvan:</strong> UK Elektronik Solar Enerji ve İklimlendirme Sistemleri</li>
                                <li><i class="fa fa-map-marker-alt text-primary me-2"></i> <strong>Adres:</strong> Dörtyol, Hatay, Türkiye</li>
                                <li><i class="fa fa-phone-alt text-primary me-2"></i> <strong>Telefon / WhatsApp:</strong> +90 (505) 396 70 70</li>
                                <li><i class="fa fa-envelope text-primary me-2"></i> <strong>E-posta:</strong> info@ukelektronik.com</li>
                            </ul>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">2. İşlenen Kişisel Verileriniz</h4>
                            <p>
                                Şirketimiz tarafından sunulan güneş enerjisi santrali (GES), ısı pompası ve elektrik/elektronik mühendislik hizmetleri kapsamında aşağıdaki kategorilerdeki kişisel verileriniz işlenebilmektedir:
                            </p>
                            <ul>
                                <li><strong>Kimlik Bilgileri:</strong> Ad, soyad, unvan.</li>
                                <li><strong>İletişim Bilgileri:</strong> Telefon numarası, cep telefonu, e-posta adresi, ikamet/iş yeri adresi.</li>
                                <li><strong>Mekan ve Proje Bilgileri:</strong> Kurulum yapılacak mülkün bulunduğu şehir, ilçe, mahalle, parsel/çatı bilgileri, uygulama alanı (çatı, arazi, konut, ticarethane, tarımsal sulama).</li>
                                <li><strong>Tüketim ve Teknik Veriler:</strong> Elektrik fatura tutarları, abone grubu, tüketim değerleri (kWh), ihtiyaç duyulan kurulu güç (kWp), elektrik faturası görseli/kopyası.</li>
                                <li><strong>Müşteri İşlem & Talep Bilgileri:</strong> İletişim formu mesajları, teklif talepleri, WhatsApp yazışma kayıtları, randevu ve keşif notları.</li>
                                <li><strong>İşlem Güvenliği Verileri:</strong> IP adresi, form gönderim tarihi ve saati, güvenlik doğrulaması (captcha) kayıtları.</li>
                            </ul>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">3. Kişisel Verilerin İşlenme Amaçları</h4>
                            <p>Kişisel verileriniz aşağıdaki amaçlarla sınırlı, ölçülü ve KVKK ilkelerine uygun olarak işlenmektedir:</p>
                            <ol>
                                <li>Güneş Enerjisi (GES) ve Isı Pompası projelerine yönelik ön fizibilite, kapasite hesabı, keşif ve fiyat tekliflerinin hazırlanması,</li>
                                <li>Talep ettiğiniz ürün ve hizmetler hakkında sizinle telefon, WhatsApp veya e-posta yoluyla iletişime geçilmesi,</li>
                                <li>Sözleşme öncesi değerlendirmelerin yürütülmesi, proje çizimi, mühendislik hesaplamaları ve statik/elektrik uygunluk kontrollerinin yapılması,</li>
                                <li>Elektrik dağıtım şirketleri (TEDAŞ, Toroslar EDAŞ vb.) nezdinde lisanssız elektrik üretimi çağrı mektubu, bağlantı anlaşması ve onay süreçlerinin yürütülmesi,</li>
                                <li>Satış sonrası teknik servis, garanti, bakım ve onarım süreçlerinin planlanması ve icrası,</li>
                                <li>Yasal mevzuattan kaynaklanan bilgi saklama, raporlama ve bilgilendirme yükümlülüklerinin yerine getirilmesi,</li>
                                <li>Onay vermeniz halinde kampanyalar, yeni teknolojiler ve teşvikler hakkında ticari elektronik ileti (SMS/E-posta) gönderilmesi.</li>
                            </ol>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">4. Kişisel Verilerin Aktarılması</h4>
                            <p>
                                Toplanan kişisel verileriniz; kanunen yetkili kılınmış kamu kurum ve kuruluşları (EPDK, TEDAŞ, Enerji Bakanlığı, ilgili elektrik dağıtım şirketleri), yasal danışmanlar, mali müşavirler ve projenin gerektirdiği ölçüde resmi teknoloji/çözüm ortaklarımız (Ersutek Isı Pompaları vb.) haricinde kesinlikle üçüncü kişi ve kurumlarla paylaşılmamakta, ticari amaçla satılmamaktadır.
                            </p>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">5. Kişisel Veri Toplamanın Yöntemi ve Hukuki Sebebi</h4>
                            <p>
                                Kişisel verileriniz; web sitemiz üzerindeki teklif formları, çağrı merkezimiz, WhatsApp iletişim hattımız, e-posta veya saha keşifleri vasıtasıyla elektronik ya da fiziki ortamda toplanmaktadır.
                            </p>
                            <p>Bu toplama faaliyeti, KVKK Madde 5 kapsamında;</p>
                            <ul>
                                <li>Bir sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması,</li>
                                <li>Veri sorumlusunun hukuki yükümlülüğünü yerine getirebilmesi için zorunlu olması,</li>
                                <li>İlgili kişinin temel hak ve özgürlüklerine zarar vermemek kaydıyla meşru menfaatlerimiz için veri işlenmesinin zorunlu olması,</li>
                                <li>Gereken hallerde ise açık rızanızın temin edilmesi hukuki sebeplerine dayanmaktadır.</li>
                            </ul>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">6. KVKK Madde 11 Kapsamındaki Haklarınız</h4>
                            <p>Kişisel veri sahibi olarak Şirketimize başvurarak aşağıdaki haklarınızı her zaman kullanabilirsiniz:</p>
                            <ul>
                                <li>Kişisel verilerinizin işlenip işlenmediğini öğrenme,</li>
                                <li>Kişisel verileriniz işlenmişse buna ilişkin bilgi talep etme,</li>
                                <li>İşlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını öğrenme,</li>
                                <li>Yurt içinde veya yurt dışında kişisel verilerin aktarıldığı üçüncü kişileri bilme,</li>
                                <li>Kişisel verilerin eksik veya yanlış işlenmiş olması hâlinde bunların düzeltilmesini isteme,</li>
                                <li>KVKK 7. maddesinde öngörülen şartlar çerçevesinde kişisel verilerin silinmesini veya yok edilmesini isteme,</li>
                                <li>Düzeltme, silme veya yok etme işlemlerinin kişisel verilerin aktarıldığı üçüncü kişilere bildirilmesini isteme,</li>
                                <li>İşlenen verilerin münhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle aleyhinize bir sonucun ortaya çıkmasına itiraz etme,</li>
                                <li>Kanuna aykırı olarak işlenmesi sebebiyle zarara uğramanız hâlinde zararın giderilmesini talep etme.</li>
                            </ul>

                            <hr class="my-4">

                            <h4 class="fw-bold text-dark mb-3">7. İletişim ve Başvuru</h4>
                            <p>
                                Kanun kapsamındaki haklarınıza ilişkin taleplerinizi yazılı olarak veya kayıtlı elektronik posta (KEP) adresi, güvenli elektronik imza, mobil imza ya da tarafınızca Şirketimize daha önce bildirilen ve sistemimizde kayıtlı bulunan elektronik posta adresinizi kullanmak suretiyle <strong>info@ukelektronik.com</strong> adresine iletebilirsiniz. Talepleriniz en geç otuz (30) gün içinde ücretsiz olarak sonuçlandırılacaktır.
                            </p>

                            <div class="mt-4 pt-3 border-top d-flex flex-wrap gap-3">
                                <a href="{{ route('ges.teklif') }}" class="btn btn-warning rounded-pill px-4 fw-bold">
                                    <i class="fa fa-solar-panel me-2"></i> GES Teklif Formuna Dön
                                </a>
                                <a href="{{ route('isi-pompasi') }}" class="btn btn-outline-primary rounded-pill px-4 fw-semibold">
                                    <i class="fa fa-fire-alt me-2"></i> Isı Pompası Sayfası
                                </a>
                                <a href="{{ route('home') }}" class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">
                                    <i class="fa fa-home me-2"></i> Ana Sayfa
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
@endsection

