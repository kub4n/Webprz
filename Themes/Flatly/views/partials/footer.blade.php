<footer>
    <div class="left">
        <div class="content ml-auto">
            <img src="{{Theme::url('img/logo_footer.png')}}" alt="politechnika rzeszowska">

            <div class="row">
                <div class="col-sm-8 media-575-margin">
                    Strona Rzeszowa <br>
                    Politechnika Rzeszowska <br>
                    Wydział elektrotechniki i Informatyki
                    <hr>
                    Projekt graficzny: <b>Katarzyna Urban</b> <br>
                    Realizacja: <b>Jakub Solecki, Dominik Rżany</b> <br>
                    Copyright © 2018, All rights reserved
                </div>
                <div class="col-sm-4">
                    <b>MENU</b> <br><br>
                    @menu('footer')
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <google-map v-bind:options="mapStyle" :center="mapCenter" :zoom="15" style="width: 100%;">
            <google-marker :icon="{url:'{{Theme::url('img/pin.png')}}'}" v-for="m in markers" :position="m.position"
                           :draggable="true"></google-marker>
        </google-map>
        <div class="info-box">
            <span class="text-uppercase d-table"><b>@setting('core::name')</b></span>
            @setting('core::school')<br>
            @setting('core::faculty')<br><br><br>
            @setting('core::address-street') @setting('core::address-house-number') <br>
            @setting('core::address-zip') @setting('core::address-city') <br><br><br>
            <span class="spacing">
            <b>Telefon:</b> <a href="tel:@setting('core::phone-number')"> @setting('core::phone-number')</a><br>
            <b>Fax:</b><a href="tel:@setting('core::fax')">  @setting('core::fax')</a> <br><br>
            <b>email:</b> <a href="mailto:@setting('core::email')">@setting('core::email')</a>
            </span>
        </div>
    </div>
</footer>

