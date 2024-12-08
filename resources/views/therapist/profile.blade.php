<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terappy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/assets/css/terapist-profil.css">
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

    .card {
        display: flex;
        /* Flex düzeni */
        flex-direction: column;
        /* İçeriği dikey hizalar */
    }

    .danisan-bilgisi {
        text-align: left;
        /* Yazıları sola hizalar */
    }

    .onay-butonu {
        position: absolute;
        /* Kart içinde serbest konumlandırma */
        top: 20px;
        /* Kartın üstünden 20px boşluk */
        right: 50px;
        /* Kartın sağından 20px boşluk */
    }

    .onay-btn {
        padding: 8px 20px;
        /* Buton boyutunu küçültür */
        width: 15rem;
        font-size: 20px;
        /* Yazı boyutunu küçültür */
        background-color: #00D6A3;
        /* Buton rengi */
        color: white;
        border: 1px solid white;
        border-radius: 5px;
        /* Köşeleri yuvarla */
        cursor: pointer;
        /* Tıklanabilir işaretçisi */
        white-space: nowrap;
        /* Metnin bir satırda kalmasını sağlar */
        transition: 0.3s;
    }

    .onay-btn:hover {
        color: black;
        background: transparent;
        border: 2px solid #00D6A3 !important;
    }

    .dosya-button {
        margin-top: 40px;
        padding: 5px 20px;
        border-radius: 8px;
        display: block;
        justify-content: center;
        align-items: center;
        background: #00D6A3;
        border: 2px solid #0dc99d !important;
        transition: 0.3s;
        font-weight: 600;
        color: #3a3636;
        font-size: 20px;
        margin-bottom: 20px;
        width: 150px;
    }

    .dosya-button:hover {
        transform: translateY(-10px);
        border: 2px solid #00D6A3 !important;
        color: #3a3636;
        background-color: white;
    }
</style>

<body class="bg-success">
    <div class="blurred-background"></div>
    <div class="container text-center my-5">
        <div class="row">
            <!-- 3 kolonluk alan -->
            <div class="col-3 p-4 mb-3">
                <h1 style="font-size:50px;">Terappy</h1>

                <h1 class="mt-5 " id="kullanıcı-adi">Hoş Geldiniz,<span >{{$therapist->name}}</span></h1>
                <div class="terapistiniz border rounded border-white p-3">
                    <i class="fa-solid fa-laptop-medical me-3"></i>
                    <a href="#" id="tab-1" onclick="openTab(1);" data-opener="1" class="mt-5 text-dark">Danışanlarınız</a>
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
                    <h3>Danışanlarınız</h3>
                    @foreach($matches as $match)
                    <div class="card mt-3">
                        <div class="danisan-bilgisi">
                            <h4>{{$match->name}}</h4>
                            <h5>Yaşı: <span>{{$match->age}}</span></h4>
                                <h5>E-mail: {{$match->email}}</h5>
                        </div>
                        <div class="onay-butonu">
                            <button class="btn onay-btn">Bu hastayla ilgilen</button>
                        </div>
                    </div>
                    @endforeach


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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pic-tab" style="color: black;" data-bs-toggle="tab"
                                data-bs-target="#pic" type="button" role="tab" aria-controls="pic"
                                aria-selected="false">
                                Profil Resmi
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="hakkimda-tab" style="color: black;" data-bs-toggle="tab"
                                data-bs-target="#hakkimda" type="button" role="tab" aria-controls="pic"
                                aria-selected="false">
                                Hakkımda
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="profileTabContent">
                        <div class="tab-pane fade show active" id="password" role="tabpanel"
                            aria-labelledby="password-tab">
                            <div class=" p-3">
                                <h5 class="mb-4 mt-2 text-center">Şifre Değiştir</h5>
                                <div class="d-flex justify-content-center">
                                    <input type="password" class="form-control w-50 mb-3" placeholder="Eski Şifreniz">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="password" class="form-control w-50 mb-3" placeholder="Yeni Şifreniz">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input type="password" class="form-control w-50 mb-3"
                                        placeholder="Yeni Şifrenizi Onaylayın">
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
                        <div class="tab-pane fade" id="pic" role="tabpanel" aria-labelledby="pic-tab">
                            <div class="p-3">
                                <h3 class="mb-4 mt-2 text-center " style="font-weight: 500;">Profil Resmi Düzenle</h5>
                                    <h5 class="mt-2 mb-4" style="font-weight: 500; border-bottom: none;">Profil
                                        fotoğrafını Değiştir
                                </h3>
                                <div class="row mb-3">
                                    <div class="col text-center">

                                        <div id="photoPreview" class="rounded-circle border position-relative"
                                            style="width: 100px; height: 100px; background-color: gray; background-size: cover; background-position: center; display: inline-block;">
                                            <i class="fa-solid fa-camera position-absolute top-50 start-50 translate-middle"
                                                id="cameraIcon" style="font-size: 32px; color: white;"></i>
                                        </div>

                                        <div class="d-flex flex-column justify-content-center align-items-center mt-3">
                                            <span id="fileName" class="text-muted d-block mb-2">Dosya seçilmedi</span>
                                            <label for="fileInput" class="dosya-button">Dosya Seç</label>
                                            <input type="file" id="fileInput" accept=".png, .jpeg, .jpg"
                                                style="display: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn modal-pri-button w-25">Değiştir</button>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="hakkimda" role="tabpanel" aria-labelledby="hakkimda-tab">
                            <div class="p-3">
                                <h2 class="text-center mb-4">Hakkımda</h2>

                                <div class="mb-4 d-flex justify-content-center">
                                    <textarea id="about" name="about" class="form-control" rows="15" placeholder="Buraya kendinizi tanıtan bir metin yazabilirsiniz." style="width: 400px;"></textarea>
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
    // JavaScript ile dosya yükleme ve önizleme
    document.getElementById('fileInput').addEventListener('change', function (event) {
        const file = event.target.files[0];
        const photoPreview = document.getElementById('photoPreview');
        const fileName = document.getElementById('fileName');

        if (file) {
            fileName.textContent = file.name; // Dosya adını göster
            const reader = new FileReader();
            reader.onload = function (e) {
                photoPreview.style.backgroundImage = `url(${e.target.result})`;
                cameraIcon.style.display = 'none';
            };
            reader.readAsDataURL(file); // Dosyayı Base64 formatına çevir
        } else {
            fileName.textContent = 'Dosya seçilmedi'; // Dosya iptal edilirse
            photoPreview.style.backgroundImage = ''; // Önizlemeyi sıfırla

            cameraIcon.style.display = 'block';
        }
    });
</script>
</body>

</html>
