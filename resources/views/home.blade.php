@extends('layout.layout')
@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" height="520px" src="{{ asset('web/images/GW-1.png') }}" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="520px" src="{{ asset('web/images/GW-2.png') }}" alt="...">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" height="520px" src="{{ asset('web/images/GW-3.png') }}" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="d-block mx-auto text-center my-5 w-75">
            <h2>WELCOME TO <br> <span class="danger">GEORGE WASHINGTON ACADEMY</span></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus doloremta.</p>
            <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit maxime veniam iure voluptatum accusamus perspiciatis molestiae repudiandae magnam aliquid, aperiam recusandae dicta quo nulla adipisci sint nesciunt necessitatibus, quas amet.
            Dicta dolores reprehenderit ipsum commodi ducimus necessitatibus quo repellat vero autem magnam! Voluptates illo ipsa labore non cumque error facere dolorem, quis recusandae quas quaerat aut nam praesentium?</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="m-2 image">
                    <img class="w-100" src="{{ asset('web/images/GWA-ST.png') }}" alt="">
                    <div class="image-text1 d-none d-md-block">
                        <h4>PARENT INFO</h4>
                    </div>
                    <div class="d-block d-sm-block d-md-none">
                        <h3>PARENT INFO</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="m-2 image">
                    <img class="w-100" src="{{ asset('web/images/GWA-ST.png') }}" alt="">
                    <div class="image-text1 d-none d-md-block">
                        <h4>STUDENT INFO</h4>
                    </div>
                    <div class="d-block d-sm-block d-md-none">
                        <h3>STUDENT INFO</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="event my-5 text-center">
        <h2>UPCOMING <span class="danger">EVENTS</span></h2>
        <p>No Result</p>
        <button class="btn btn-danger">SEE ALL EVENTS</button>
    </div>

    <div class="container">
        <div class="text-center">
            <h2>ONLINE <span class="danger">PAYMENTS</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="m-2">
                    <img class="w-100" src="{{ asset('web/images/GW-1.png') }}" alt="">
                    <h3>GWA LUNCH PAYMENTS</h3>
                    <button class="btn btn-danger">PAY NOW</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="m-2">
                    <img class="w-100" src="{{ asset('web/images/GW-1.png') }}" alt="">
                    <h3>GWA LUNCH PAYMENTS</h3>
                    <button class="btn btn-danger">PAY NOW</button>
                </div>
            </div>
        </div>
    </div>

    <div class="image">
        <img class="w-100" src="{{ asset('web/images/GWA.png') }}" alt="">
        <div class="image-text d-none d-sm-none d-md-block">
            <h2>ENROLL TODAY</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quam sunt repudiandae atque laboriosam, optio, ipsum quasi assumenda officia eveniet quisquam labore ab! Dignissimos sint maxime repellendus libero quaerat molestias!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quam sunt repudiandae atque laboriosam, optio, ipsum quasi assumenda officia eveniet quisquam labore ab! Dignissimos sint maxime repellendus libero quaerat molestias!</p>
            <button class="btn btn-danger my-5">APPLY NOW</button>
        </div>
        <div class="d-block d-sm-block d-md-none text-center">
            <h2>ENROLL TODAY</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quam sunt repudiandae atque laboriosam, optio, ipsum quasi assumenda officia eveniet quisquam labore ab! Dignissimos sint maxime repellendus libero quaerat molestias!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quam sunt repudiandae atque laboriosam, optio, ipsum quasi assumenda officia eveniet quisquam labore ab! Dignissimos sint maxime repellendus libero quaerat molestias!</p>
            <button class="btn btn-danger my-1">APPLY NOW</button>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h2>CONNECT <span class="danger">WITH US</span></h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="connect">
                    <div class="text-center">
                        <img src="{{ asset('web/images/GW-ENQUIRE.png') }}" alt="">
                        <h4>GENERAL INQUIRIES</h4>
                    </div>
                    <div>
                        <input class="w-100 my-3 p-2" type="text" placeholder="Name">
                        <input class="w-100 my-3 p-2" type="email" placeholder="Email">
                        <textarea placeholder="Comments/Questions" class="w-100 p-2" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-danger my-2">SEND</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="connect">
                    <div class="text-center">
                        <img src="{{ asset('web/images/GW-ENQUIRE.png') }}" alt="">
                        <h4>GENERAL INQUIRIES</h4>
                    </div>
                    <div>
                        <input class="w-100 my-3 p-2" type="text" placeholder="Name">
                        <input class="w-100 my-3 p-2" type="email" placeholder="Email">
                        <textarea placeholder="Comments/Questions" class="w-100 p-2" cols="30" rows="5"></textarea>
                    </div>
                    <button class="btn btn-danger my-2">SEND</button>
                </div>
            </div>
        </div>
    </div>
@endsection
