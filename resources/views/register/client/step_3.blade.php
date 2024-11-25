<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link rel="stylesheet" href="/assets/css/client/step_3.css">
    <style>
        /* Radio butonlarının alt alta sıralanması */
        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 10px; /* Butonlar arasındaki boşluk */
        }

        /* Radio butonlarının etrafındaki kutu */
        .radio-option input {
            appearance: none;
            width: 20px;
            height: 20px;
            margin-right: 10px; /* Sağ boşluk */
            border: 2px solid #00D6A3;
            border-radius: 50%; /* Daire şekli */
            background-color: white; /* Arka plan beyaz */
            cursor: pointer;
        }

        /* Radio butonları seçildiğinde etrafında kırmızı çerçeve */
        .radio-option input:checked {
            border: 2px solid white;

            /* Kırmızı sınır */
            background-color: #00D6A3;
            /* Kırmızı arka plan */
        }

        /* Seçeneklerin yazılarının hizalanması */
        .radio-option {
            font-size: 18px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
    </style>
</head>

<body>
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
        <h2>Terapistinizde Cinsiyet Tercihinizi Seçiniz</h2>
        <div class="radio-group">
            <label class="radio-option">
                <input type="radio" name="gender" value="woman">
                Kadın
            </label>
            <label class="radio-option">
                <input type="radio" name="gender" value="man">
                Erkek
            </label>
            <label class="radio-option">
                <input type="radio" name="gender" value="doesnt_matter">
                Fark Etmiyor
            </label>
        </div>
    </div>

    <div class="button-group">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button">Devam Et</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
