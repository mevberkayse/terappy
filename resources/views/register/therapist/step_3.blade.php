<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="http://cdn.arabul.us/bootstrap/css/bootstrap.min.css?123">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/therapist/step_3.css">


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
    <!-- Ortalanan container -->
    <div class="container centered-container">
        <h2 class="text-center mb-4">Eğitim Bilgileri</h2>
        <form>
            <!-- İsim -->
            <h3 class="mb-4 mt-3">Lisans Bilginiz</h3>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="lisans" class="form-label">Lisansınız</label>
                    <input type="text" class="form-control" id="lisans" placeholder="Lisans bölümünüzü giriniz"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="okul" class="form-label">Mezun olduğunuz okul</label>
                    <input type="text" class="form-control" id="okul" placeholder="Okulunuzu giriniz" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="baslangic" class="form-label">Başlangıç Tarihi</label>
                    <input type="number" class="form-control" id="baslangic" placeholder="Başlangıç" required>
                </div>
                <div class="col-md-6">
                    <label for="bitis" class="form-label">Bitiş Tarihi</label>
                    <input type="text" class="form-control" id="bitis" placeholder="Bitiş" required>
                </div>
            </div>

        </form>
        <form>
            <!-- İsim -->
            <div class="kisisel-container">
                <label>
                    <input type="checkbox" name="kisisel" id="yuksekLisansCheckbox" value="kisisel">
                    <span></span>
                    Yüksek lisans mezunuyum.
                </label>
            </div>
            <h3 class="mb-4 mt-3">Yüksek Lisans Bilginiz</h3>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="lisans-yuksek" class="form-label">Yüksek Lisansınız</label>
                    <input type="text" class="form-control" id="lisans2" placeholder="Y. lisans alanınızı giriniz"
                        required>
                </div>
                <div class="col-md-6">
                    <label for="okul-yuksek" class="form-label">Mezun olduğunuz okul</label>
                    <input type="text" class="form-control" id="okul2" placeholder="Okulunuzu giriniz" required>
                </div>
            </div>
            <!-- İsim -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="baslangic" class="form-label">Başlangıç Tarihi</label>
                    <input type="number" class="form-control" id="baslangic2" placeholder="Başlangıç" required>
                </div>
                <div class="col-md-6">
                    <label for="bitis" class="form-label">Bitiş Tarihi</label>
                    <input type="text" class="form-control" id="bitis2" placeholder="Bitiş" required>
                </div>
            </div>

        </form>
    </div>
    </div>

    <!-- Butonlar -->
    <div class="button-group">
        <button type="button" class="modal-btn">Geri</button>
        <button type="button" class="primary-button" id="next_step">Devam Et</button>
    </div>

    <script>
        const checkbox = document.getElementById("yuksekLisansCheckbox");
        const lisansInput = document.getElementById("lisans2");
        const okulInput = document.getElementById("okul2");
        const baslangicyInput = document.getElementById("baslangic2");
        const bitisyInput = document.getElementById("bitis2");

        checkbox.addEventListener("change", function () {
            const isChecked = checkbox.checked;
            lisansInput.disabled = !isChecked;
            okulInput.disabled = !isChecked;
            baslangicyInput.disabled = !isChecked;
            bitisyInput.disabled = !isChecked;
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
    $('#next_step').click(() => {
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let checkbox = $('#yuksekLisansCheckbox')[0];
        let lisans = $('#lisans').val();
        let okul = $('#okul').val();
        let baslangic = $('#baslangic').val();
        let bitis = $('#bitis').val();
        let lisans2 = checkbox.checked ? $('#lisans2').val() : null;
        let okul2 = checkbox.checked ? $('#okul2').val() : null;
        let baslangic2 = checkbox.checked ? $('#baslangic2').val() : null;
        let bitis2 = checkbox.checked ? $('#bitis2').val() : null;

        $.ajax({
            url: '/api/kayit/terapist/2',
            method: 'POST',
            data: {
                lisans: lisans,
                okul: okul,
                baslangic: baslangic,
                bitis: bitis,
                lisans2: lisans2,
                okul2: okul2,
                baslangic2: baslangic2,
                bitis2: bitis2,
                yuksekLisansCheckbox: checkbox.checked ? 1 : 0,
                _token: token
            },
            success: (res) => {
                if (res.status) {
                   window.location.href = res.link;
                }
            },
            error: (err) => {
                alert('Bir hata oluştu');
                console.log(err);
            }
        });
    });
});
</script>
</body>

</html>