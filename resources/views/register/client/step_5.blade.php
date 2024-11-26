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
    <link rel="stylesheet" href="/assets/css/client/step_5.css">
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
    <style>
        /* Checkboxları gizlemek ve sadece arka planını kırmızı yapmak */
        .checkbox-group {
            justify-self: start;
            display: flex;
            flex-direction: column;
            gap: 10px;
            text-align: left;
            /* Sorunları sola hizalar */
        }

        .checkbox-group label {
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Metni sola hizala */
            border-bottom: 1px solid #ccc;
            /* Alt çizgi */
            padding-bottom: 10px;
            /* Alt boşluk */
            margin-bottom: 10px;
        }

        .checkbox-group input[type="checkbox"] {
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
        .checkbox-group input[type="checkbox"]:checked {
            border: 2px solid white;

            /* Kırmızı sınır */
            background-color: #00D6A3;
            /* Kırmızı arka plan */
        }



        /* Checkbox ve metin arasına boşluk ekler */
        .checkbox-group input[type="checkbox"]:checked+.problem {
            margin-top: 10px;
            /* Daire ile sorun arasında boşluk */
        }

        .container h2 {

            /* Gri çizgi */
            padding-bottom: 10px;
            /* Çizgi ile başlık arasında boşluk */
            margin-bottom: 20px;
            /* Çizgi ile altındaki içeriği ayırmak için boşluk */
        }

        .problem16-container {
            margin-top: 20px;
            /* Container ile arasında boşluk */
            margin-bottom: 20px;
            /* Butonlarla arasında boşluk */
            text-align: center;
            /* Ortada konumlandır */
        }

        /* Sorun 16 checkbox stilleri */
        .problem16-container input[type="checkbox"] {
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
        .problem16-container input[type="checkbox"]:checked {
            border: 2px solid white;

            /* Kırmızı sınır */
            background-color: #00D6A3;
            /* Kırmızı arka plan */
        }

        .problem16-container label {
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Etiketleri sola hizalar */
        } .button-group{
        z-index:1;
    }
    </style>
</head>

<body><div class="blurred-background"></div>

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
        <h2 class="text-center mb-4 mt-2">Terapistinizde Aradığınız Özellikler</h2>
        <div class="checkbox-group">
            @foreach($features as $feature)
            <label>
                <input type="checkbox" name="feature" value="{{$feature->id}}">
                <span></span>
                {{$feature->feature}}
            </label>
            @endforeach
        </div>
    </div>
    <div class="problem16-container">
        <label>
            <input type="checkbox" id="belirtme" name="feature" value="-1">
            <span></span>
            Özel bir tercihim yok.
        </label>
    </div>
    <!-- Butonlar -->
    <div class="button-group">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button" id="next_step">Devam Et</button>
    </div>
    <!-- Bootstrap JS ve Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
    <script src="//cdn.arabul.us/jquery/jquery-3.7.1.min.js"></script>

    <script>
        $(document).ready(() => {
              // when #belirtme is checked, uncheck all other checkboxes
              $('#belirtme').change(() => {
                if ($('#belirtme').is(':checked')) {
                    $('input[name="feature"]').not('#belirtme').prop('checked', false);
                }
            });

            // when any other checkbox is checked, uncheck #belirtme
            $('input[name="feature"]').not('#belirtme').change(() => {
                if ($('input[name="feature"]').not('#belirtme').is(':checked')) {
                    $('#belirtme').prop('checked', false);
                }
            });
            $('#next_step').click(() => {
                let features = [];
                $('input[name="feature"]:checked').each((index, element) => {
                    features.push($(element).val());
                });

                $.ajax({
                    url: '/api/kayit/danisan/4',
                    method: 'POST',
                    data: {
                        features: features,
                        _token: '{{ csrf_token() }}'
                    },
                    success: (response) => {
                        window.location.href = response.link
                    }
                });
            });
        });
    </script>
</body>

</html>
