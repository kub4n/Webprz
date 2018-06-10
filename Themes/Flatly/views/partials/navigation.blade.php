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
            @if (Auth::check())

                <a class="button-primary hvr-icon-wobble-horizontal ejno" href="{{ route('logout') }}">
                    <span>Witaj: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                    WYLOGUJ SIĘ <i class="icon-play-button hvr-icon"></i>
                </a>
            @else
                <a class="button-primary hvr-icon-wobble-horizontal" data-toggle="modal" data-target="#loginModal">
                    ZALOGUJ SIĘ <i class="icon-play-button hvr-icon"></i>
                </a>
            @endif

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
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="modal-body">
                        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" autofocus
                                   name="email" placeholder="{{ trans('user::auth.email') }}" value="{{ old('email')}}">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control"
                                   name="password" placeholder="{{ trans('user::auth.password') }}" value="{{ old('password')}}">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                        <a href="{{ route('reset')}}">Zapomniałem hasła</a><br>
                        @if (config('asgard.user.config.allow_user_registration'))
                            <a href="{{ route('register')}}" class="text-center">Zarejestruj się</a>
                        @endif
                </div>
                <div class="modal-footer">
                    <button class="button-primary hvr-icon-wobble-horizontal" type="submit">Zaloguj się<i class="icon-play-button hvr-icon"></i>
                </div>
            </form>

        </div>
    </div>
</div>
@push('js-stack')
    <script>
        $('.open-menu').on('click', function () {
            $('.burger').toggleClass('burger-open');
        });

        <?php if ($errors->has('email') || $errors->has('password')) { ?>
                      console.log('errors');

        <?php } ?>
    </script>
@endpush