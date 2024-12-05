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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/therapist/step_7.css">
    <style>
        body {
            background-image: url('/public/assets/img/duvarkagidi8.jpg');
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
            background-image: url('/public/assets/img/duvarkagidi8.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(10px);
            /* Blur efekti */
            z-index: 0;
            /* Arka planda kalması için */
        }

        .customizedNavbar {
            background-color: transparent;
            background-color: transparent !important;
            /* Arka planı şeffaf yapar */
            box-shadow: none;
            /* Gölgeyi kaldırır */
            border-bottom: none;
            /* Alt çizgiyi kaldırır (varsa) */
        }

        .centered-container {
            z-index: 1;
            background: rgba(255, 255, 255, 0.8);
            /* Yarı saydam bir arka plan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Hafif gölge */
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

    .button-group {
        z-index: 1;
    }
</style>

<body>
    <div class="blurred-background"></div>

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
        <h2 class="text-center mb-4">Profil Fotoğrafı</h2>
        <h3 class="mt-2 mb-4" style="font-weight: 500; border-bottom: none;">Son olarak bir profil fotoğrafı seçiniz</h3>
        <div class="row mb-3">
            <div class="col text-center">

                <div id="photoPreview" class="rounded-circle border position-relative"
                style="width: 150px; height: 150px; background-color: gray; background-size: cover; background-position: center; display: inline-block;">
               <i class="fa-solid fa-camera position-absolute top-50 start-50 translate-middle"
                  id="cameraIcon" style="font-size: 32px; color: white;"></i>
           </div>

                <div class="mt-3">
                    <label for="fileInput" class="primary-button">Dosya Seç</label>
                    <input type="file" id="fileInput" accept=".png, .jpeg, .jpg" style="display: none;">
                    <span id="fileName" class="text-muted d-block mt-2">Dosya seçilmedi</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Butonlar -->
    <div class="button-group">
        <button type="button" class="modal-btn" id="backButton">Geri</button>
        <button type="button" class="primary-button" id="submitButton">Kaydımı Tamamla </button>
    </div>
    <!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="successModalLabel">Başarılı!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <i class="bi bi-check-circle-fill text-success" style="font-size: 50px;"></i>
                <p class="mt-3" style="font-size: 18px; font-weight: 500;">Başvurunuz başarıyla alınmıştır!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tamam</button>
            </div>
        </div>
    </div>
</div>
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
    <!-- Bootstrap JS ve Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

    
<script> 
   $(document).ready(() => {
    $('#submitButton').on('click', function () {
        const selectedFile = document.getElementById('fileInput').files[0];
        if (!selectedFile) {
            alert('Lütfen bir dosya seçin.');
            return;
        }

        const formData = new FormData();
        formData.append('profile_photo', selectedFile);
        formData.append('_token', "{{csrf_token()}}");

        $.ajax({
            url: '/api/kayit/terapist/6',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: (response) => {
                if (response.status) {
                    $('#successModal').modal('show');
                    setTimeout(() => {
                       // window.location.href = res.link;
                    }, 3000);
                } else {
                    $('#errorMessage').text(response.message || 'Bir hata oluştu.').show();
                }
            },
            error: (err) => {
                $('#errorMessage').text('Bir hata oluştu. Lütfen tekrar deneyin.').show();
                console.error(err);
            }
        });
    });
});

</script>
<script> 
document.getElementById('backButton').addEventListener('click', function () {
    $.ajax({
        url: '/api/kayit/terapist/6', // Sunucudan bir sonraki step'i belirleyecek bir API endpoint
        method: 'GET',
        success: function (response) {
            if (response.nextStep) {
                window.location.href = `/api/kayit/terapist/5${response.nextStep}`;
            } else {
                alert('Bir sonraki step bulunamadı.');
            }
        },
        error: function (err) {
            console.error(err);
            alert('Bir hata oluştu.');
        }
    });
});
</script>
</body>

</html>
