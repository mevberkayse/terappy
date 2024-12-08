<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terappy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
  </style>
<body class="bg-success">
    <div class="blurred-background"></div>
    <div class="container text-center my-5">
      <div class="row">
        <!-- 3 kolonluk alan -->
        <div class="col-3 p-4 mb-3">
          <h1 style="font-size:50px;">Terappy</h1>
          <h1 class="mt-5 " id="kullanıcı-adi">Selam, <span>{{$user->name}}</span></h1>
                  <div class="terapistiniz border rounded border-white p-3">
                      <i class="fa-solid fa-laptop-medical me-3"></i>
                      <a href="#" id="tab-1" onclick="openTab(1);" data-opener="1" class="mt-5 text-dark">Terapistiniz</a>
                  </div>

                  <div class="profiliniz border rounded border-white p-3">
                      <i class="fa-regular fa-user me-3"></i>
                      <a href="#" id="tab-2" onclick="openTab(2);" data-opener="2" class="mt-5">Profiliniz</a>
                  </div>
          <div class="mt-auto">
            <button class="btn mt-5"><i class="fa-solid fa-right-from-bracket"></i></button>
          </div>
        </div>

        <div class="col-8 rounded p-4 mb-3">
          <!-- Terapistiniz İçeriği -->
          <div id="content-1" class="content-section">
            <h3>Terapistiniz</h3>
            <div class="card mt-3">
              <div class="card-body">
                <div class="profile">
                  <img src="{{$therapist->profile_picture}}" alt="Psikolog Fotoğrafı" class="profile-img">
                  <div class="profile-info">
                    <h5 class="name">{{$therapist->name}}</h5>
                    <p class="title">{{$therapist->title}}</p>
                    <p class="about">{{$therapist->about}}.</p>
                    @if($isMatched) Terapistinizle eşleştiniz! İletişime geçebilirsiniz. @else Terapistiniz henüz eşleşme isteğinizi kabul etmedi. @endif
                  </div>
                </div>
                <a href="/terapist/profil/{{$therapist->id}}" target="_blank" class="modal-pri-button">Profili Görüntüle</a>
              </div>
            </div>
            <i class="fa-solid fa-circle-exclamation" style="color: white; font-size:20px "></i>
            <h4 style="color: white;"> Terapistinizin iletişim bilgisi için yukarıdaki profili görüntüle butonuna basınız.</h4>
            <div class="card-degerlendir mt-3">
              <div class="card-body">
                <div class="profile" style="text-align: center !important; justify-content: center;">
                  <div class="profile-info text-center">
                    <h5 class="name" style="color: white;">Terapistinizi Değerlendirin</h5>
                    <p class="text-center">Lütfen değerlendirmemiz için terapistiniz oylayın 😊</p>
                    <div class="stars">
                      <i class="fa-regular fa-star" data-value="1"></i>
                      <i class="fa-regular fa-star" data-value="2"></i>
                      <i class="fa-regular fa-star" data-value="3"></i>
                      <i class="fa-regular fa-star" data-value="4"></i>
                      <i class="fa-regular fa-star" data-value="5"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="modal-pri-button change-btn mt-3">Terapistimi Değiştir</button>
          </div>

          <!-- Profiliniz İçeriği -->
          <div id="content-2" class="content-section d-none">
            <h3 class="text-center">Profiliniz</h3>

            <ul class="nav nav-tabs justify-content-center mb-4 mt-5" id="profileTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" style="color: black;" id="password-tab" data-bs-toggle="tab"
                  data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="true">
                  Şifre Düzenle
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="name-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#name"
                  type="button" role="tab" aria-controls="name" aria-selected="false">
                  İsim-Soyisim
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="email-tab" style="color: black;" data-bs-toggle="tab" data-bs-target="#email"
                  type="button" role="tab" aria-controls="email" aria-selected="false">
                  E-posta Düzenle
                </button>
              </li>
            </ul>

            <div class="tab-content" id="profileTabContent">
              <div class="tab-pane fade show active" id="password" role="tabpanel" aria-labelledby="password-tab">
                <div class=" p-3">
                  <h5 class="mb-4 mt-2 text-center">Şifre Değiştir</h5>
                  <div class="d-flex justify-content-center">
                    <input type="password" class="form-control w-50 mb-3" placeholder="Eski Şifreniz">
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="password" class="form-control w-50 mb-3" placeholder="Yeni Şifreniz">
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="password" class="form-control w-50 mb-3" placeholder="Yeni Şifrenizi Onaylayın">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button class="btn modal-pri-button w-50">Değiştir</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="name" role="tabpanel" aria-labelledby="name-tab">
                <div class="p-3">
                  <h5 class="mb-4 mt-2 text-center">İsim-Soyisim</h5>
                  <div class="d-flex justify-content-center">
                    <input type="text" class="form-control w-50 mb-3" placeholder="Eski İsim-Soyisim">
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="text" class="form-control w-50 mb-3" placeholder="Yeni İsim-Soyisim">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button class="btn modal-pri-button w-50">Değiştir</button>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
                <div class="p-3">
                  <h5 class="mb-4 mt-2 text-center">E-posta Düzenle</h5>
                  <div class="d-flex justify-content-center">
                    <input type="email" class="form-control w-50 mb-3" placeholder="Eski E-posta">
                  </div>
                  <div class="d-flex justify-content-center">
                    <input type="email" class="form-control w-50 mb-3" placeholder="Yeni E-posta">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button class="btn modal-pri-button w-50">Değiştir</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        openTab(1);
      });

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
            //alert(`Teşekkürler.Değerlendirmeniz Alınmıştır!`);
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
</body>

</html>
