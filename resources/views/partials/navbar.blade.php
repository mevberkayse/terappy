<nav class="navbar navbar-expand-lg navbar-light bg-light customizedNavbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img style="height:35px"
                src="/assets/img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-5">
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() == '/') active @endif" aria-current="page" href="/"
                        id="anasayfa">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() == '/nasil-calisir') active @endif" href="/nasil-calisir"
                        id="howItWorks">Nasıl Çalışır</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() == '/hakkimizda') active @endif"
                        href="/hakkimizda">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Request::url() == '/danismanlar') active @endif"
                        href="/danismanlar">Danışmanlarımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Testler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">İletişim</a>
                </li>
            </ul>
            <button class="btn-navbar">Kaydol/Giriş Yap</button>
            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="btn-circle mt-3">Terappy</div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="/login-custom" id="loginForm">
                                <!-- Terapist mi Danışan mı Radio-->
                                <div class="mb-3 text-center">
                                    <label for="role" class="form-label d-block">Ben
                                        bir</label><!--blok alta geççmesi için-->
                                    <div class="radio-group d-flex justify-content-center">
                                        <div class="text-center me-4">
                                            <input type="radio" id="terapist" name="role" value="therapist">
                                            <label for="terapist" style="font-weight: 600; ">Terapistim</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="radio" id="role" name="role" value="client">
                                            <label for="role" style="font-weight: 600;">Danışanım</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- E-posta -->
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-posta</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="E-postanızı girin">
                                </div>

                                <!-- Şifre -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Şifre</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Şifrenizi girin">
                                    <a href="#" class="d-block mt-3 text-decoration-none nav-link text-center">Şifremi
                                        Unuttum</a>
                                </div>
                                <!-- Beni Hatırla -->
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Beni Hatırla</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <!-- Giriş Yap Butonu -->
                            <button type="button" class="primary-button w-100"
                                onclick="document.getElementById('loginForm').submit()">Giriş Yap</button>
                            <!-- Kayıt Ol Butonu -->
                            <button type="button" class=" modal-btn w-100 mt-3" id="kayit">Hesabınız yoksa lütfen kayıt
                                olun</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
