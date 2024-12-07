<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .barlow-thin {
            font-family: "Barlow", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .barlow-extralight {
            font-family: "Barlow", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .barlow-light {
            font-family: "Barlow", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .barlow-regular {
            font-family: "Barlow", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .barlow-medium {
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .barlow-semibold {
            font-family: "Barlow", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .barlow-bold {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .barlow-extrabold {
            font-family: "Barlow", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .barlow-black {
            font-family: "Barlow", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .barlow-thin-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .barlow-extralight-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .barlow-light-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .barlow-regular-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .barlow-medium-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .barlow-semibold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .barlow-bold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .barlow-extrabold-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .barlow-black-italic {
            font-family: "Barlow", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

        .container-section {
            display: none;
        }

        .container-section.active {
            display: block;
        }

        .arrowBoxLeft,
        .arrowBoxRight {
            z-index: 10;
            /* Diğer elemanların üstüne çıkar */
            cursor: pointer;
            /* Tıklanabilir olduğunu belirt */
        }

        .hidden {
            display: none !important;
        }

        @media only screen and (max-width: 768px) {
            .mobileClass {
                margin-top: 100px !important;
            }
        }

        @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: Barlow;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            /* Elemanları dikeyde sıralar */
            justify-content: center;
            /* Dikeyde ortalama */
            align-items: center;
            /* Yatayda ortalama */
        }


        .primary-button {
            margin-top: 20px;
            padding: 8px 40px;
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
        }

        .btn-navbar {
            padding: 8px 40px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #00D6A3;
            width: max-content;
            border: 2px solid #0dc99d !important;
            transition: 0.3s;
            font-weight: 600;
            color: #3a3636;
            font-size: 20px;
            margin-left: 10px;
        }

        .modal-btn {
            margin-top: 20px;
            /* Container'ın altından boşluk */
            display: block;
            padding: 8px 40px;
            border-radius: 8px;
            background: white;
            border: 2px solid #00D6A3 !important;
            transition: 0.3s;
            font-weight: 600;
            color: #3a3636;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .modal-btn:hover {
            transform: translateY(-10px);
            border: 2px solid #0dc99d !important;
            color: #3a3636;
            background: #00D6A3;
        }

        .primary-button:hover {
            transform: translateY(-10px);
            border: 2px solid #00D6A3 !important;
            color: white;
            background-color: transparent;
        }

        .form-label {
            font-size: 18px !important;
            font-weight: 600;
            color: #1A1A1A;
        }

        .form-control {
            font-size: 18px !important;
        }

        .form-check {
            margin-top: 1.5rem;
            /* Üstten 2rem boşluk ekle */
            display: flex;
            /* Checkbox ve etiketi yatayda hizalamak için flexbox kullan */
            align-items: center;
            /* Yatayda hizalama */
            justify-content: center;
            /* Ortalamak için */
        }

        .form-check-label {
            margin-left: 8px;
            /* Checkbox ile etiket arasına mesafe ekle */
        }


        @media only screen and (max-width: 768px) {
            .leftSide {
                display: none !important;
            }

            .mobileClass {
                margin-top: 100px !important;
            }

            body {
                overflow: auto !important;
            }

            .arrowBoxRight {
                background: #00d6a467;
            }

            .stdimg {
                width: 100% !important;
                margin: auto;
                margin-left: 0px !important;
            }
        }


        .centered-container {
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            /* Elemanları dikey hizala */
            align-items: center;
            /* Yatayda ortala */
            min-height: 70vh;
            border: 2px solid rgba(255, 255, 255, 0.8);
            /* Saydam border */
            border-radius: 15px;
            backdrop-filter: blur(10px);
            /* Blur efekti */
            background: rgba(255, 255, 255, 0.2);
            /* Saydam beyaz arka plan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Hafif gölge efekti */
            overflow-y: auto;
            /* Yüksek içerik için kaydırma çubuğu */
            max-height: 90vh;
            /* Container'ın yüksekliği ekranın %90'ı kadar */
            margin-top: 100px;
            /* Üst kısımdan boşluk bırakmak */
            max-width: 600px;
            padding: 20px;

        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            /* Butonlar arasındaki boşluk */
            margin-top: 15px;
            z-index: 10;
        }

        .centered-container h2 {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin: 0;
        }

        .textarea {
            width: 100px;
            height: 100px;
        }

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

        .help-center-title {
            position: absolute;
            top: 30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2.5rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="blurred-background"></div>
    <div class="help-center-title text-center">
        <h1>Yardım Merkezi</h1>
    </div>
    <div class="container centered-container">
        <h2 class="text-center mb-4">Bize Sorunuzu İletin</h2>
        <form>
            <!-- İsim -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">İsim</label>
                    <input type="text" class="form-control" id="firstName" placeholder="İsminizi giriniz" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Soy İsim</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Soy isminizi giriniz" required>
                </div>
            </div>
            <!-- E-posta -->
            <div class="mb-3">
                <label for="email" class="form-label">E-posta</label>
                <input type="email" class="form-control" id="email" placeholder="E-posta adresinizi giriniz" required>
            </div>
            <!-- Yaş -->
            <div class="mb-3">
                <label for="aciklama" class="form-label">Açıklama</label>
                <textarea class="form-control" id="aciklama" placeholder="Bize sorununuzu iletin..." rows="8"
                    required></textarea>
            </div>


        </form>
    </div>

    <!-- Butonlar -->
    <div class="button-group">
        <button type="button" class="primary-button">İletin</button>
    </div>

</body>

</html>