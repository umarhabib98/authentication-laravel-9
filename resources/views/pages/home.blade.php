@extends('layouts.main')

@section('content')
    <section class="sec-hero">
        <div class="banner-background"></div>
        <div class="container linear-graident d-flex align-items-center text-white">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Explore Australian Wine</h1>
                    <p>
                        The Australian wine industry is one of the world's largest exporters of wine, with approximately 800 million out of the 1.2 to 1.3 billion litres produced annually exported to overseas markets
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-wines">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="wine-card">
                        <img src=" {{ asset('assets/red_wine.jpg') }}" alt="red-wine" srcset="" />
                        <div class="wine-card-body text-center">
                            <h1>Red Wine</h1>
                            <p>
                                Red wine is a type of wine made fom drak-colored grape varieties
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wine-card">
                        <img src=" {{ asset('assets/white_wine.jpg') }}" alt="white_wine" srcset="" />
                        <div class="wine-card-body text-center">
                            <h1>White Wine</h1>
                            <p>
                                White wine is a wine that is fermented without skin contact.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="wine-card">
                        <img src=" {{ asset('assets/sparkling_wine.jpg') }}" alt="sparkling_wine" srcset="" />
                        <div class="wine-card-body text-center">
                            <h1>Sparkling Wine</h1>
                            <p>
                                Sparkling is a wine with significant levels of carbon dioxide in it, making it fizzy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-secondary">
              View details >>
            </button>
                </div>
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-secondary">
              View details >>
            </button>
                </div>
                <div class="col-lg-4 text-center">
                    <button type="button" class="btn btn-secondary">
              View details >>
            </button>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1>Explore <span class="text-black-50">wine vineyard</span></h1>
                    <p>
                        Some great placeholder content for the first featurette here. Imagine some exciting prose here
                    </p>
                </div>
                <div class="col-lg-5">
                    <img src=" {{ asset('assets/vineyard.jpg ') }}" alt="" srcset="" />
                </div>
            </div>
            <hr />
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src=" {{ asset('assets/wine_glass.jpg') }}" alt="" srcset="" />
                </div>
                <div class="col-lg-7">
                    <h1>We have <span class="text-black-50">varieties</span></h1>
                    <p>
                        Do you want to explore different types of wine? You can try a bit different taste of wine.
                    </p>
                </div>
            </div>
            <hr />
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1>
                        Do you need <span class="text-black-50">wine for an event?</span>
                    </h1>
                    <p>
                        You can order a bulk of wine for an event with a huge discount
                    </p>
                </div>
                <div class="col-lg-5">
                    <img src=" {{ asset('assets/wine_bottle.jpg') }}" alt="" srcset="" />
                </div>
            </div>
            <hr />
        </div>

    </section>
@endsection