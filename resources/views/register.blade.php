<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link rel="stylesheet" href="/assets/css/register.css">
</head>
<style>
    body {
        background-image: url('assets/img/duvarkagidi8.jpg');
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
        background-image: url('assets/img/duvarkagidi8.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: blur(10px); /* Blur efekti */
        z-index: 0; /* Arka planda kalması için */
    }
    .customizedNavbar{
        background-color: transparent;
    }
    .centered-container{
        z-index: 1;
        background: rgba(255, 255, 255, 0.8); /* Yarı saydam bir arka plan */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Hafif gölge */
    }
</style>

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
        <h2>Kayıt Türünü Seçiniz</h2>
        <div class="button-group">
            <button class="primary-button">Danışan Kaydı</button>
            <button class="primary-button">Terapist Kaydı</button>
        </div>
    </div>
    <button class="modal-btn" style="z-index: 1;">Devam Et</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>