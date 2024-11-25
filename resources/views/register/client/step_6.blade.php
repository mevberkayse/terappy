<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link rel="stylesheet" href="/assets/css/client/step_6.css">
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
            background-color: transparent;
        }

        .centered-container {
            z-index: 1;
            background: rgba(255, 255, 255, 0.8);
            /* Yarı saydam bir arka plan */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            /* Hafif gölge */
        }
    </style>
    <style>
        /* Checkboxları gizlemek ve sadece arka planını kırmızı yapmak */
        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: left;
            /* Sorunları sola hizalar */
        }

        .radio-group label {
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Etiketleri sola hizalar */
        }

        .radio-group input[type="radio"] {
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

        /* Seçenek işaretlendiğinde */
        .radio-group input[type="radio"]:checked {
            border: 2px solid white;

            /* Kırmızı sınır */
            background-color: #00D6A3;
            /* Kırmızı arka plan */
        }

        .radio-group label {
            display: block;
            padding-bottom: 10px;
            margin-bottom: 10px;

        }


        /* Checkbox ve metin arasına boşluk ekler */
        .radio-group input[type="checkbox"]:checked+.problem {
            margin-top: 10px;
            /* Daire ile sorun arasında boşluk */
        }

        .container h2 {
            border-bottom: 1px solid #ccc;
            /* Gri çizgi */
            padding-bottom: 10px;
            /* Çizgi ile başlık arasında boşluk */
            margin-bottom: 20px;
            /* Çizgi ile altındaki içeriği ayırmak için boşluk */
        }

        /* Radio butonlarının alt alta sıralanması */
        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
            /* Butonlar arasındaki boşluk */
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

    <div class="centered-container">
        <h2>Daha önce terapi aldınız mı</h2>
        <div class="radio-group">
            <label class="radio-option">
                <input type="radio" name="gender" value="woman">
                Hayır
            </label>
            <label class="radio-option">
                <input type="radio" name="gender" value="man">
                Evet
            </label>
        </div>
    </div>

    <div class="button-group">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button">Kaydımı Tamamla</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>