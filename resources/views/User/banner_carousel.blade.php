<div id="carouselExampleCrossfade" class="px-1 py-5 carousel slide carousel-fade col-md-6 mt-md-5 px-md-2"
    data-mdb-ride="carousel">

    {{-- <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2"
            aria-label="Slide 3"></button>
    </div> --}}

    <div class="carousel-inner rounded-5">
        <div class="carousel-item active" data-mdb-interval="4000">
            <img class="img-fluid banner-picture" src="{{ asset('images/asset_img/macbook_js.png') }}" alt="">
        </div>
        <div class="carousel-item" data-mdb-interval="5000">
            <img class="img-fluid banner-picture" src="{{ asset('images/asset_img/macbook_php.png') }}" alt="">
        </div>
        <div class="carousel-item" data-mdb-interval="4000">
            <img class="img-fluid banner-picture" src="{{ asset('images/asset_img/macbook_dart.png') }}" alt="">
        </div>
    </div>

    {{-- <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> --}}
</div>
