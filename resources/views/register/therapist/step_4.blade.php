<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/therapist/step_4.css">
    <style>
        body {
            background-image: url('/assets/img/duvarkagidi8.jpg');
            /* JPG dosyasını buraya ekleyin */
            background-size: cover;
            /* Arkaplanın tam olarak kapsamasını sağlar */
            background-position: center;
            /* Ortalar */
            background-repeat: no-repeat;
    
        }
        .blurred-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/assets/img/duvarkagidi8.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(10px); /* Blur efekti */
            z-index: 0; /* Arka planda kalması için */
        }
        .customizedNavbar{
            background-color: transparent;
            background-color: transparent !important; /* Arka planı şeffaf yapar */
    box-shadow: none; /* Gölgeyi kaldırır */
    border-bottom: none; /* Alt çizgiyi kaldırır (varsa) */
        }
        .centered-container{
            z-index: 1;
            background: rgba(255, 255, 255, 0.8); /* Yarı saydam bir arka plan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Hafif gölge */
        }
    </style>
</head>
<style>
    .container h3 {
        font-size: 18px;
        font-weight: bold;
        border-bottom: 1px solid #ccc;
        margin: 0;
    }

    .dosya-button {
        margin-top: 20px;
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

    .cv-label {
        font-size: 18px;
        margin-top: 10px;
    }

    .kisisel-container {
        margin-top: 20px;
        /* Container ile arasında boşluk */
        margin-bottom: 20px;
        /* Butonlarla arasında boşluk */
        text-align: center;
        /* Ortada konumlandır */
    }

    /* Sorun 16 checkbox stilleri */
    .kisisel-container input[type="checkbox"] {
        appearance: none;
        /* Varsayılan görünümü kaldırır */
        width: 20px;
        height: 20px;
        border: 2px solid #00D6A3;
        /* Başlangıçta sınır şeffaf olacak */
        border-radius: 50%;
        /* Çember şekli */
        background-color: white;
        /* Başlangıçta şeffaf arka plan */
        cursor: pointer;
        transition: all 0.3s ease;
        margin-right: 10px;
    }

    /* Seçilen checkbox için kırmızı çember */
    .kisisel-container input[type="checkbox"]:checked {
        border: 2px solid black;

        /* Kırmızı sınır */
        background-color: #00D6A3;
        /* Kırmızı arka plan */
    }

    .kisisel-container label {
        font-size: 18px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        /* Etiketleri sola hizalar */
    }

    .button-group{
        z-index:1;
    }
</style>

<body><div class="blurred-background"></div>

    <div class="blurred-background"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light customizedNavbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img style="height:35px"
                    src="http://webdemo2.risegraph.net/wp-content/uploads/2021/03/cropped-cropped-Untitled-1-1.png"
                    alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- Ortalanan container -->
    <div class="container centered-container">
        <h2 class="text-center mb-4">Başvuru Bilgileri</h2>
        <form>
            <div class="row mb-3">

                <label for="ozel" class="form-label">Özel olarak ilgilendiğiniz alan</label>
                <div class="form-select" id="ozelSelect" data-bs-toggle="modal" data-bs-target="#ozelModal">
                    Özel alanınızı seçin
                </div>
            </div>
            <div class="row mb-3">

                <label for="dil" class="form-label">Terapide Kullanabileceğiniz Diller</label>
                <div class="form-select" id="dilSelect" data-bs-toggle="modal" data-bs-target="#dilModal">
                    Seçiniz
                </div>
            </div>
            <div class="row mb-3">
                <div class="col cv-label">Özgeçmiş / Cv
                    <label for="fileInput" class="dosya-button">Dosya Seç</label>
                    <input type="file" id="fileInput" accept=".pdf" style="display: none;">
                    <span id="fileName" class="text-muted">Dosya seçilmedi</span>
                </div>
            </div>

    </div>
    <div class="kisisel-container">
        <label>
            <input type="checkbox" name="kisisel" value="kisisel">
            <span></span>
            Kişisel bilgilerimi paylaşmayı kabul ediyorum.
        </label>
    </div>
    </form>
    </div>
    </div>
    <div class="modal fade" id="ozelModal" tabindex="-1" aria-labelledby="ozelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ozelModalLabel">Alan Seçimi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        @foreach($diseases as $disease)
                        <li class="list-group-item" data-bs-dismiss="modal" id="disease_{{$disease->id}}"
                            onclick="chooseOption('{{$disease->name_disease}}')">{{$disease->name_disease}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="dilModal" tabindex="-1" aria-labelledby="dilModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dilModalLabel">Alan Seçimi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item" data-bs-dismiss="modal" id="turkce">Türkçe</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="ingilizce">İngilizce</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="arapca">Arapça</li>
                        <li class="list-group-item" data-bs-dismiss="modal" id="diger">Diğer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Butonlar -->
    <div class="button-group">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button">Kaydımı Tamamla </button>
    </div>

    <script>
        let chooseOption = hastalik => {
            document.getElementById("ozelSelect").innerText = hastalik;
        }
        document.getElementById("Hastalık1").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık1";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
        document.getElementById("Hastalık2").addEventListener("click", function () {
            document.getElementById("ozelSelect").innerText = "Hastalık2";
        });
    </script>
    <script>
        document.getElementById("turkce").addEventListener("click", function () {
            document.getElementById("dilSelect").innerText = "Türkçe";
        });
        document.getElementById("ingilizce").addEventListener("click", function () {
            document.getElementById("dilSelect").innerText = "İngilizce";
        });
        document.getElementById("ingilizce").addEventListener("click", function () {
            document.getElementById("dilSelect").innerText = "İngilizce";
        });
        document.getElementById("ingilizce").addEventListener("click", function () {
            document.getElementById("dilSelect").innerText = "İngilizce";
        });
    </script>
    <script>
        const fileInput = document.getElementById('fileInput');
        const fileName = document.getElementById('fileName');

        fileInput.addEventListener('change', function () {
            if (fileInput.files.length > 0) {
                const selectedFile = fileInput.files[0];
                if (selectedFile.type === "application/pdf") {
                    fileName.textContent = selectedFile.name;
                } else {
                    fileName.textContent = "Lütfen bir PDF dosyası seçin";
                }
            } else {
                fileName.textContent = "Dosya seçilmedi";
            }
        });
    </script>
    <!-- Bootstrap JS ve Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    
    <script>
       $(document).ready(() => {
            $('.primary-button').click(() => {
                let ozelSelect = $('#ozelSelect').val();
                let dilSelect = $('#dilSelecet').val();
                let fileInput = $('#fileInput').val();

                $.ajax({
                    url: '/api/kayit/danisan/5',
                    method: 'POST',
                    data: {
                        ozelSelect:ozelSelect,
                        dilSelect:dilSelect,
                        fileInput:fileInput,
                        _token: '{{ csrf_token() }}'
                    },
                    success:(res)=>{
                    if(res.status) {
                      window.location.href = res.link;
                    }
                },
                error:(err)=>{
                    alert('Bir hata oluştu');
                    console.log(err);
                }
                });
            });
        });
    </script>






    </script>
</body>

</html>