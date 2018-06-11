<section class="contact" style="background-image:url({{Theme::url('img/background-contact.jpg')}})">
    <div class="container">
        <h2>
            FORMULARZ KONTAKTOWY
        </h2>
        {!! Form::open(['route' => 'contact.form.post']) !!}
        <div class="row">
                <div class="col-sm-6 media-575-margin">
                    <input type="text" name="name" required placeholder="Podaj imię i nazwisko">
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" required placeholder="Podaj adres e-mail">
                </div>
                <div class="col-sm-12">
                    <br>

                    <textarea rows="6" type="text" required name="content" placeholder="Treść wiadomości..."></textarea>
                </div>
                <br>
                <br>

                <button class="button-primary hvr-icon-wobble-horizontal" type="submit">Wyślij<i class="icon-play-button hvr-icon"></i>
            </div>
        </form>
    </div>
</section>