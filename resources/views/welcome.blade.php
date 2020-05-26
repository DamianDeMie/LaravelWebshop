@extends('layouts.app')

@section('content')
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('images/microphones.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Microfoons</h2>
                        <p class="lead">Bekijk ons aanbod van microfoons.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('images/guitars.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Gitaren</h2>
                        <p class="lead">Bekijk ons breede aanbod van gitaren.</p>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url('images/drums.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Drums</h2>
                        <p class="lead">Bekijk ons breede aanbod van drums.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <div class='container mt-3'>
        <h2 class="display-4 text-center">Bekijk ons assortiment</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/guitar.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Gitaren</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/bass.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Basgitaren</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/mic.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Microfoons</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/drumkit.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Drums</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/ta.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Toetsinstrumenten</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/sw.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Software</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3 pb-3">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/st.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Studio-toebehoren</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/zu.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Geluid</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/ca.jpg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 my-auto">
                        <p>Accessories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" role="contentinfo">
        <div class="wrap">
            <p>© 2019 Damian de Mie</p>
        </div>
    </footer>
@endsection
