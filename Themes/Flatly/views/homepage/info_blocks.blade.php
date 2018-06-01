<section class="info-blocks" style="background-image:url({{Theme::url('img/background.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-6 media-1199">
                <div class="block sr-left">
                    {!! Block::get('block-1') !!}
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 media-1199">
                <div class="block sr-left">
                    {!! Block::get('block-2') !!}
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 media-575-margin">
                <div class="block sr-right">
                    {!! Block::get('block-3') !!}
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="block sr-right">
                    {!! Block::get('block-4') !!}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xl-4 col-md-6 media-1199">
                <div class="block sr-bottom-1">
                    {!! Block::get('block-5') !!}
                </div>
            </div>
            <div class="col-xl-4 col-md-6 media-1199">
                <div class="block sr-bottom-2">
                    {!! Block::get('block-6') !!}
                </div>
            </div>
            <div class="col-xl-4">
                <div class="block sr-bottom-3">
                    {!! Block::get('block-7') !!}
                </div>
            </div>
        </div>
    </div>
</section>