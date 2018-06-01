<section class="top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('homepage')}}">
                <img src="{{Theme::url('img/logo.png')}}" class="img-fluid" alt="@setting('core::site-name')">
            </a>
            <div class="contact-address d-lg-flex align-items-center d-none">
                <i class="icon-maps-and-flags"></i>
                <div>
                    @setting('core::address-street')
                    @setting('core::address-house-number') <br>
                    @setting('core::address-zip') @setting('core::address-city')
                </div>
            </div>
            <div class="contact-phone d-none d-lg-flex align-items-center">
                <i class="icon-phone-icon"></i>@setting('core::phone-number')
            </div>
            <a class="button-primary hvr-icon-wobble-horizontal" data-toggle="modal" data-target="#loginModal">
                ZALOGUJ SIĘ <i class="icon-play-button hvr-icon"></i>
            </a>
            <button class="d-lg-none burger open-menu navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
        </div>
    </div>
</section>
<nav class="navigation navbar navbar-expand-lg navbar-light">

    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            @menu('main')
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">WEB.PRZ.EDU.PL - LOGOWANIE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Użytkownik</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wpisz nazwę użytkownika">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Hasło</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło">
                    </div>
                    <div class="pull-right">
                        <a href="#"><b>Zapomniałem hasła</b></a><br>
                        <a href="#"><b>Zarejestruj się</b></a>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="button-primary hvr-icon-wobble-horizontal" type="submit">Zaloguj się<i class="icon-play-button hvr-icon"></i>

            </div>
        </div>
    </div>
</div>
@push('js-stack')
    <script>
        $('.open-menu').on('click', function () {
            $('.burger').toggleClass('burger-open');
        });

    </script>
@endpush