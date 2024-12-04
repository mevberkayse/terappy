<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link rel="stylesheet" href="/assets/css/therapist-match.css">
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
            filter: blur(10px);
            /* Blur efekti */
            z-index: 0;
            /* Arka planda kalması için */
        }

        .customizedNavbar {
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

        .button-group,
        .modal-btn {
            z-index: 1;
        }

        .button-group {
            margin-top: 20px;
            bottom: 30px;
            position: absolute;
        }

        .eslesme-yazi {
            z-index: 1;
            margin-bottom: 30px;
            font-family: Barlow;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="blurred-background"></div>
    <nav class="navbar navbar-expand-lg navbar-light customizedNavbar">
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
    <h2 class="eslesme-yazi">Eşleştiğiniz Danışanlar</h2>
    <div class="container eslesme-container">

        <div class="row">
            @foreach($matches as $match)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile">
                            <img src="https://cdn.arabul.us/images/default.png"
                                alt="Danışan Fotoğrafı" class="profile-img">
                            <div class="profile-info">
                                <h5 class="name">{{$match->user->name}} </h5>
                                <p class="title">Olası Sorunlar:
                                    @php
                                    $user = $match->user;
                                    // $user->problems explode with "," remove duplicate values
                                    $problems = explode(',', $user->problems);
                                    $problems = \App\Models\Symptom_Matching::whereIn('symptom_id', $problems)->get();
                                    // remove duplicate values
                                    $problems = $problems->unique('disease_id');

                                    @endphp
                                    @foreach($problems as $problem)
                                    {{$problem->disease->name_disease}}
                                    @if(!$loop->last)
                                    ,
                                    @endif
                                    @endforeach
                                </p>
                                <p class="about"></p>
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn primary-button">Profili Görüntüle</button>
                            <button class="btn modal-btn">Hemen Eşleş</button>
                        </div>
                        <div class="match-percentage">{{$match->percantage}}%</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <button class="modal-btn">Geriye Dön</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>
