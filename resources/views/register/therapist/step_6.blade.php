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
    <link rel="stylesheet" href="/assets/css/therapist/step_6.css">
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
            filter: blur(10px);
            /* Blur efekti */
            z-index: 0;
            /* Arka planda kalması için */
        }

        .customizedNavbar {
            background-color: transparent !important; /* Arka planı şeffaf yapar */
    box-shadow: none; /* Gölgeyi kaldırır */
    border-bottom: none; /* Alt çizgiyi kaldırır (varsa) */
        }

        .centered-container {
            z-index: 1;
            background: rgba(255, 255, 255, 0.8);
            /* Yarı saydam bir arka plan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Hafif gölge */
            margin-top: 100px;
        }

        .container h3 {
            font-size: 18px;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
            margin: 0;
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
            border: 2px solid white;

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
</head>

<body>
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
    <div class="container centered-container">
        <h2 class="text-center mb-4">Seminerler ve Konferanslar</h2>
        <h3 class="mt-2 mb-4" style="font-weight: 500; border-bottom: none;">Profiliniz için lütfen katıldığınız eğitim ve seminerleri giriniz</h3>
        <!-- Seminer Giriş Alanları -->
        <div class="row">
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar1" class="form-label me-3" style="width: 150px;">Seminer 1</label>
                <input type="text" id="seminar1" name="seminar1" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar2" class="form-label me-3" style="width: 150px;">Seminer 2</label>
                <input type="text" id="seminar2" name="seminar2" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar3" class="form-label me-3" style="width: 150px;">Seminer 3</label>
                <input type="text" id="seminar3" name="seminar3" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar4" class="form-label me-3" style="width: 150px;">Seminer 4</label>
                <input type="text" id="seminar4" name="seminar4" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar5" class="form-label me-3" style="width: 150px;">Seminer 5</label>
                <input type="text" id="seminar5" name="seminar5" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar6" class="form-label me-3" style="width: 150px;">Seminer 6</label>
                <input type="text" id="seminar6" name="seminar6" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar7" class="form-label me-3" style="width: 150px;">Seminer 7</label>
                <input type="text" id="seminar7" name="seminar7" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar8" class="form-label me-3" style="width: 150px;">Seminer 8</label>
                <input type="text" id="seminar8" name="seminar8" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar9" class="form-label me-3" style="width: 150px;">Seminer 9</label>
                <input type="text" id="seminar9" name="seminar9" class="form-control" placeholder="Seminer adı giriniz">
            </div>
            <div class="col-12 mb-3 d-flex align-items-center">
                <label for="seminar10" class="form-label me-3" style="width: 150px;">Seminer 10</label>
                <input type="text" id="seminar10" name="seminar10" class="form-control" placeholder="Seminer adı giriniz">
            </div>
        </div>
    </div>

    <div class="button-group text-center mt-4">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button">Devam Et</button>
    </div>
    <!-- Bootstrap JS ve Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(() => {
        $('.primary-button').click(() => {
            // Formdaki seminer bilgilerini topla
            let seminars = {
                seminar1: $('#seminar1').val(),
                seminar2: $('#seminar2').val(),
                seminar3: $('#seminar3').val(),
                seminar4: $('#seminar4').val(),
                seminar5: $('#seminar5').val(),
                seminar6: $('#seminar6').val(),
                seminar7: $('#seminar7').val(),
                seminar8: $('#seminar8').val(),
                seminar9: $('#seminar9').val(),
                seminar10: $('#seminar10').val(),
            };

            // AJAX isteği gönder
            $.ajax({
                url: '/api/kayit/terapist/5',
                method: 'POST',
                data: {
                    ...seminars,
                    _token: '{{ csrf_token() }}'
                },
                success: (res) => {
                    if (res.status) {
                        // Başarılı ise yönlendir
                        window.location.href = res.link;
                    } else {
                        alert(res.message);
                    }
                },
                error: (err) => {
                    alert('Bir hata oluştu.');
                    console.log(err);
                }
            });
        });
    });
</script>

</body>

</html>
