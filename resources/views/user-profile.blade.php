<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terappy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/user-profile.css">
    <script>
        FontAwesome.config.autoReplaceSvg = "nest"
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        background-image: url('/assets/img/duvarkagidi4.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .blurred-background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/assets/img/duvarkagidi4.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: blur(10px);
        /* Blur efekti */
        z-index: 0;
        /* Arka planda kalması için */
    }

    body {
        margin: 0;
        padding: 0;
        font-family: Barlow;
    }

    .container {
        margin-top: 50px;
    }

    h1 {
        color: white;
        text-shadow: 2px 2px 4px black;
        /* Siyah gölge */
    }

    h3 {
        color: white;
        font-size: 30px;
        text-shadow: 2px 2px 4px black;
        /* Siyah gölge */
    }

    a {
        color: white;
        text-decoration: none;
        font-size: 25px;
        font-weight: 500;
    }

    a:hover {
        color: black;
        text-decoration: none;
        font-size: 25px;
        font-weight: 500;
    }

    button {
        width: 100%;
        bottom: 20px;
    }

    .row {
        display: flex;
        gap: 30px;
        /* Kolonlar arasındaki boşluk */
        align-items: stretch;
        /* Kolonların aynı yükseklikte olmasını sağlar */
    }

    .col-3,
    .col-8 {
        padding: 20px;
        border-radius: 8px;
        min-height: 46rem;
        /* Yükseklik eşitleme */
        display: flex;
        flex-direction: column;
    }

    .col-3 {
        background-color: transparent;
        z-index: 1;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .col-8 {
        padding: 20px;
        min-height: 450px;
        /* Yükseklik eklendi */
        display: flex;
        flex-direction: column;
        /* Yalnızca dikeyde hizalama */
        border: 1px solid white;
        position: relative;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);

    }

    .change-btn {
        position: absolute;
        bottom: 20px;
        /* Altta 20px boşluk bırakacak şekilde */
        right: 20px;
        /* Sağda 20px boşluk bırakacak şekilde */
    }

    .col-3 .btn {
        bottom: 10px;
        /* Butonu aşağıya kaydırır */
    }

    .btn {
        background: #daf2d9;
        border: none;
        /* Kenarlık kaldırılır */
        padding: 5px 5px;
        /* Düğmenin boyutunu büyütmek için */
        font-size: 24px;
        /* İkonun boyutunu büyütmek için */
        border-radius: 10px;
        /* Köşeleri yuvarlatmak için */
        cursor: pointer;
        /* Tıklanabilir görünüm */
        transition: 0.3s;
        width: 50px;
    }

    .btn:hover {
        background-color: transparent;
        /* Hover sırasında hafif bir renk değişimi */
        border: 1px solid #0dc99d;
        color: white;
    }

    .terapistiniz {
        margin-top: 100px;
        font-size: 30px;
        color: white;
    }

    .profiliniz {
        margin-top: 20px;
        font-size: 30px;
        color: white;
    }

    .stars {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .stars i {
        font-size: 30px;
        /* Yıldız boyutu */
        color: gray;
        /* Yıldızların başlangıç rengi */
        cursor: pointer;
        /* Tıklanabilir görünüm */
        transition: color 0.3s ease;
        /* Renk değişimini yumuşatır */
    }

    .stars i.active {
        color: gold;
        /* Sarı renk */
    }

    .modal-btn {
        padding: 8px 40px;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: white;
        width: max-content;
        border: 2px solid #00D6A3 !important;
        transition: 0.3s;
        font-weight: 600;
        color: #3a3636;
        font-size: 20px;
        margin-left: 10px;
        margin-top: 5px;
    }
    .delete-btn {
        padding: 8px 40px;
        border-radius: 8px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: white;
        width: max-content;
        border: 2px solid #eb3232 !important;
        transition: 0.3s;
        font-weight: 600;
        color: #3a3636;
        font-size: 20px;
        margin-left: 10px;
        margin-top: 5px;
    }

    .modal-btn:hover {
        transform: translateY(-10px);
        border: 2px solid #0dc99d !important;
        color: #3a3636;
        background: #00D6A3;
    }

    .delete-btn:hover {
        transform: translateY(-10px);
        border: 2px solid #eb3232 !important;
        color: white;
        background: #eb3232;
    }
    .btn-red {
        background: #6b1818;
        border: none;
        /* Kenarlık kaldırılır */
        padding: 5px 5px;
        /* Düğmenin boyutunu büyütmek için */
        font-size: 24px;
        /* İkonun boyutunu büyütmek için */
        border-radius: 10px;
        /* Köşeleri yuvarlatmak için */
        cursor: pointer;
        /* Tıklanabilir görünüm */
        transition: 0.3s;
        width: 50px;
        color: white;
    }
    .btn-red:hover {
        background-color: transparent;
        /* Hover sırasında hafif bir renk değişimi */
        border: 1px solid #6b1818;
        color: white;
    }

    .modal-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Yatayda ortala */
        padding: 20px;
        /* Her yerden padding */
        position: relative;
        border-bottom: none;
    }

    .modal-header .btn-close {
        position: absolute;
        top: 10px;
        right: 10px;
    }
    .logo-img{
        width: 200px;
        height: 200px;
    }
</style>

<body class="bg-success">
    <div class="blurred-background"></div>
    <div class="container text-center my-5">
        <div class="row">
            <!-- 3 kolonluk alan -->
            <div class="col-3 p-4 mb-3">
                <h1 style="font-size:50px;"><img class="logo-img"src="/assets/img/logobeyaz.png" alt=""></h1>
                <h1 class="mt-5 " id="kullanıcı-adi">Hoş Geldin, <span>{{$user->name}}</span></h1>
                <div class="terapistiniz border rounded border-white p-3">
                    <i class="fa-solid fa-laptop-medical me-3"></i>
                    <a href="#" id="tab-1" onclick="openTab(1);" data-opener="1" class="mt-5 text-dark">Terapistiniz</a>
                </div>

                <div class="profiliniz border rounded border-white p-3">
                    <i class="fa-regular fa-user me-3"></i>
                    <a href="#" id="tab-2" onclick="openTab(2);" data-opener="2" class="mt-5">Profiliniz</a>
                </div>
                <div class="mt-auto">
                    <button class="btn mt-5 me-3" onclick="window.location.href = '/'"><i class="fa-solid fa-right-from-bracket"></i></button>
                    <button class="btn btn-red mt-5" data-bs-toggle="modal" data-bs-target="#deleteModal"><i
                            class="fa-solid fa-trash"></i></button>
                </div>
            </div>
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center">
                        <div class="modal-header flex-column border-0">
                            <h5 class="modal-title w-100" id="deletModalLabel">Hesabımı sil</h5>
                        </div>
                        <div class="modal-body text-center">
                            <p class="mb-3 mt-2">Hesabınız devre dışı bırakıldığında işlem geri alınamaz.Hesabınızı
                                silmek istediğinizden emin misiniz?</p>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn modal-btn" data-bs-dismiss="modal">Vazgeç</button>
                                <button type="button" class="btn delete-btn me-3 w-50">Hesabımı Sil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8 rounded p-4 mb-3">
                <!-- Terapistiniz İçeriği -->
                <div id="content-1" class="content-section">
                    <h3>Terapistiniz</h3>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="profile">
                                <img src="{{$therapist->profile_picture}}" alt="Psikolog Fotoğrafı"
                                    class="profile-img">
                                <div class="profile-info">
                                    <h5 class="name">{{$therapist->name}}</h5>
                                    <p class="title">{{$therapist->title}}</p>
                                    <p class="about">{{$therapist->about}}</p>

                                </div>
                            </div>
                            <div class="d-flex align-items-center ">
                            <button class="modal-pri-button me-5"
                                onclick="window.location.href ='/terapist/profil/{{$therapist->id}}'">Profili
                                Görüntüle</button>
                            @if($isMatched === true)
                            <b>Terapistiniz eşleşmeyi onayladı, aşağıdaki iletişim bilgilerinden kendisiyle iletişime
                                geçebilirsiniz 😊</b>

                            @else
                            <b>Terapistiniz henüz eşleşmeyi onaylamadı. ⌛</b>
                            @endif
                            </div>
                           
                        </div>
                    </div>

                    <div style="color: white; border: 1px solid white; font-size: 20px; border-radius: 10px;" class="p-5">@if($isMatched === true)
                        <h4>Terapistinizin İletişim Bilgileri</h4>
                        <p>E-Posta Adresi: <a style="font-size: 20px !important;" href="mailto:{{$therapist->email}}">{{$therapist->email}}</a></p>
                        <p>Telefon Numarası: <a href="tel:{{$therapist->phone_number}}" style="font-size: 20px !important;">{{$therapist->phone_number}}</a></p>
                        <p>{{$therapist->social_media}}: {{$therapist->socail}}</p>
                        @else

                        <p>Terapistiniz henüz eşleşmeyi onaylamadı. Eşleşme onaylandığında iletişim bilgileri burada yer alacaktır.</p>
                        @endif
                    </div>
                    <div class="card-degerlendir mt-3">
                        <div class="card-body">
                            <div class="profile" style="text-align: center !important; justify-content: center; color: white;">
                                <div class="profile-info text-center">
                                    <h5 class="name" style="color: white;">Terapistinizi Değerlendirin</h5>
                                    <p class="text-center" style="color: white;">Lütfen değerlendirmemiz için terapistiniz oylayın 😊</p>
                                    <div class="stars" style="color: white;">
                                        <i class="fa-regular fa-star" data-value="1"></i>
                                        <i class="fa-regular fa-star" data-value="2"></i>
                                        <i class="fa-regular fa-star" data-value="3"></i>
                                        <i class="fa-regular fa-star" data-value="4"></i>
                                        <i class="fa-regular fa-star" data-value="5"></i>
                                        <input type="hidden" name="" value="{{$therapist->id}}" id="therapist-id">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profiliniz İçeriği -->
                <div id="content-2" class="content-section d-none">
                    <h3 class="text-center">Profiliniz</h3>

                    <ul class="nav nav-tabs justify-content-center mb-4 mt-5" id="profileTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" style="color: black;" id="password-tab" data-bs-toggle="tab"
                                data-bs-target="#password" type="button" role="tab" aria-controls="password"
                                aria-selected="true">
                                Şifre Düzenle
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="name-tab" style="color: black;" data-bs-toggle="tab"
                                data-bs-target="#name" type="button" role="tab" aria-controls="name"
                                aria-selected="false">
                                İsim-Soyisim
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="email-tab" style="color: black;" data-bs-toggle="tab"
                                data-bs-target="#email" type="button" role="tab" aria-controls="email"
                                aria-selected="false">
                                E-posta Düzenle
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="profileTabContent">
                        <div class="tab-pane fade show active" id="password" role="tabpanel"
                            aria-labelledby="password-tab">
                            <div class=" p-3">
                                <h5 class="mb-4 mt-2 text-center">Şifre Değiştir</h5>
                                <div class="d-flex justify-content-center">
                                    <input type="password" class="form-control w-50 mb-3" id="old_password"
                                        placeholder="Eski Şifreniz">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="password" class="form-control w-50 mb-3" id="new_password"
                                        placeholder="Yeni Şifreniz">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="password" class="form-control w-50 mb-3" id="new_password_confirm"
                                        placeholder="Yeni Şifrenizi Onaylayın">
                                </div>
                                <div id="successMessage"></div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn modal-pri-button w-50" id="changePassword">Değiştir</button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="name" role="tabpanel" aria-labelledby="name-tab">
                            <div class="p-3">
                                <h5 class="mb-4 mt-2 text-center">İsim-Soyisim</h5>
                                <div class="d-flex justify-content-center">
                                    <input type="text" class="form-control w-50 mb-3" value="{{$user->name}}" disabled
                                        placeholder="Eski İsim-Soyisim">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="text" class="form-control w-50 mb-3" id="new_name"
                                        placeholder="Yeni İsim-Soyisim">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn modal-pri-button w-50" id="changeNameBtn">Değiştir</button>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
                            <div class="p-3">
                                <h5 class="mb-4 mt-2 text-center">E-posta Düzenle</h5>
                                <div class="d-flex justify-content-center">
                                    <input type="email" class="form-control w-50 mb-3" value="{{$user->email}}" disabled
                                        placeholder="Eski E-posta">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="email" class="form-control w-50 mb-3" placeholder="Yeni E-posta"
                                        id="new_email">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn modal-pri-button w-50" id="changeMail">Değiştir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

        <script>
            function openTab(tabId) {
                const allContents = document.querySelectorAll(".content-section");
                allContents.forEach(content => content.classList.add("d-none"));

                document.getElementById(`content-${tabId}`).classList.remove("d-none");

                const allTabs = document.querySelectorAll('a');
                allTabs.forEach(tab => tab.classList.remove("text-dark"));
                const activeTab = document.getElementById(`tab-${tabId}`);
                activeTab.classList.add("text-dark");
            }
        </script>
</body>

<script>
    const stars = document.querySelectorAll(".stars i");
    let selectedIndex = -1; // Seçilen yıldızları takip etmek için

    stars.forEach((star, index) => {
        // Fare üzerine gelindiğinde
        star.addEventListener("mouseover", () => {
            highlightStars(index); // Yıldızları geçici olarak renklendir
        });

        // Fare dışarı çıktığında, seçili yıldızlara geri dön
        star.addEventListener("mouseout", () => {
            highlightStars(selectedIndex);
        });

        // Yıldız tıklandığında
        star.addEventListener("click", () => {
            selectedIndex = index; // Seçimi kaydet
            highlightStars(selectedIndex);
            alert(`Teşekkürler.Değerlendirmeniz Alınmıştır!`);
        });
    });

    // Yıldızları renklendirme fonksiyonu
    function highlightStars(limit) {
        stars.forEach((star, idx) => {
            if (idx <= limit) {
                star.classList.add("active");
                star.classList.replace("fa-regular", "fa-solid"); // İçi dolu yıldız
            } else {
                star.classList.remove("active");
                star.classList.replace("fa-solid", "fa-regular"); // İçi boş yıldız
            }
        });
    }



</script>
<script>
    stars.forEach((star, index) => {
        star.addEventListener("click", () => {
            selectedIndex = index;
            highlightStars(selectedIndex);

            // Puanlama verisini gönder
            $.ajax({
                url: '/therapist/rate', // İlgili endpoint
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // CSRF token'ını buraya ekliyoruz
                    therapist_id: document.getElementById("therapist-id").value, // Terapist ID'sini input alanından al
                    rating: selectedIndex + 1, // Rating verisini al
                },
                success: function (data) {
                    alert(data.message); // Sunucudan dönen mesajı göster
                },
                error: function (xhr, status, error) {
                    console.error('Hata:', error);
                }
            });
        });
    });

</script>
<script>
    document.getElementById('changeNameBtn').addEventListener('click', function () {
        // Yeni isim soyisim değerini al
        const newName = document.getElementById('new_name').value;

        if (!newName) {
            alert("Lütfen geçerli bir isim girin!");
            return;
        }

        // AJAX isteği gönder
        $.ajax({
            url: '/profile/update-name', // URL
            method: 'POST', // İstek metodu
            contentType: 'application/json', // Gönderilen verinin tipi
            data: JSON.stringify({
                name: newName,
                _token: "{{ csrf_token() }}" // CSRF token'ı data içinde gönderiyoruz
            }),
            success: function (response) {
                if (response.success) {
                    // Başarı mesajını göster
                    $('#successMessage').text(response.message).fadeIn().delay(3000).fadeOut();
                    location.reload(); // Sayfayı yenileyerek değişikliği göster
                } else {
                    // Hata mesajını göster
                    $('#errorMessage').text("Bir hata oluştu: " + response.message).fadeIn().delay(3000).fadeOut();
                }
            },
            error: function (xhr, status, error) {
                // AJAX hata mesajı
                $('#errorMessage').text("Bir hata oluştu: " + error).fadeIn().delay(3000).fadeOut();
            }
        });
    });

</script>
<script>
    document.getElementById('changeMail').addEventListener('click', function () {
        // Yeni isim soyisim değerini al
        const newEmail = document.getElementById('new_email').value;

        if (!newEmail) {
            alert("Lütfen geçerli bir isim girin!");
            return;
        }

        // AJAX isteği gönder
        $.ajax({
            url: '/profile/update-email', // URL
            method: 'POST', // İstek metodu
            contentType: 'application/json', // Gönderilen verinin tipi
            data: JSON.stringify({
                email: newEmail,
                _token: "{{ csrf_token() }}" // CSRF token'ı data içinde gönderiyoruz
            }),
            success: function (response) {
                if (response.success) {
                    // Başarı mesajını göster
                    $('#successMessage').text(response.message).fadeIn().delay(3000).fadeOut();
                    location.reload(); // Sayfayı yenileyerek değişikliği göster
                } else {
                    // Hata mesajını göster
                    $('#errorMessage').text("Bir hata oluştu: " + response.message).fadeIn().delay(3000).fadeOut();
                }
            },
            error: function (xhr, status, error) {
                // AJAX hata mesajı
                $('#errorMessage').text("Bir hata oluştu: " + error).fadeIn().delay(3000).fadeOut();
            }
        });
    });

</script>

<script>
    document.getElementById('changePassword').addEventListener('click', function () {
        // Yeni isim soyisim değerini al
        const oldPassword = document.getElementById('old_password').value;
        const newPassword = document.getElementById('new_password').value;
        const newPasswordConfirm = document.getElementById('new_password_confirm').value;

        if (!oldPassword || !newPassword || !newPasswordConfirm) {
            alert("Lütfen tüm alan  doldurun!");  // Tüm alanların doldurulduğundan emin ol
            return;
        }
        if (newPassword !== newPasswordConfirm) {
            alert("Yeni şifreler uyuşmuyor!"); // Yeni şifrelerin uyuştuğundan emin ol
            return;
        }
        // AJAX isteği gönder
        $.ajax({
            url: '/profile/update-password', // URL
            method: 'POST', // İstek metodu
            contentType: 'application/json', // Gönderilen verinin tipi
            data: JSON.stringify({
                old_password: oldPassword,
                new_password: newPassword,
                new_password_confirmation: newPasswordConfirm,
                _token: "{{ csrf_token() }}" // CSRF token'ı data içinde gönderiyoruz
            }), // Gönderilen veriler
            success: function (response) {
                if (response.success) {
                    // Başarı mesajını göster
                    $('#successMessage').text(response.message).fadeIn().delay(3000).fadeOut();
                    location.reload(); // Sayfayı yenileyerek değişikliği göster
                } else {
                    // Hata mesajını göster
                    $('#errorMessage').text("Bir hata oluştu: " + response.message).fadeIn().delay(3000).fadeOut();
                }
            },  // Başarılı durumda yapılacaklar
            error: function (xhr, status, error) {
                // AJAX hata mesajı
                $('#errorMessage').text("Bir hata oluştu: " + error).fadeIn().delay(3000).fadeOut();
            } // Hata durumunda yapılacaklar
        });
    });
</script>
</body>

</html>
