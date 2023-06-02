@extends('layout.layout')
@section('content')
    <div class="mb-4">
        <img class="refer" src="{{ asset('web/images/GWA_MARKETING_PHOTO.png') }}" alt="...">
        <div class="image-text2 text-white d-none d-md-block">
            <h1>CONTACT US</h1>
        </div>
        <div class="text-center d-block d-sm-block d-md-none">
            <h1><em>CONTACT US</em></h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="connect">
                    <div class="text-center">
                        <img src="{{ asset('web/images/GW-ENQUIRE.png') }}" alt="">
                        <h4>GET <span class="text-danger">IN TOUCH</span></h4>
                    </div>
                    <div>
                        <input class="w-100 my-3 p-2" type="text" placeholder="Name">
                        <input class="w-100 my-3 p-2" type="email" placeholder="Email">
                        <textarea placeholder="Comments/Questions" class="w-100 p-2" cols="30" rows="5"></textarea>
                    </div>
                    <button class="submit" type="submit">SEND</button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="py-5 px-2">
                    <h3>GEORGE WASHINGTON ACADEMY</h3>
                    <div class="text-muted">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quisquam nostrum ab amet
                            alias rem fugiat quia incidunt quidem magni. Placeat beatae excepturi hic reiciendis quisquam,
                            esse officiis facilis iure.</p>
                        <h6><b>Address: </b> 2277 South 3000 East <br>
                            St George, Utah 84790</h6>
                        <h6><b>Address: </b> 2277 South 3000 East <br>
                            St George, Utah 84790</h6>
                    </div>
                    <div class="text-muted">
                        <div class="bg-secondary text-white p-5 text-center mt-5">
                            <i class="fas fa-exclamation-circle fa-3x mt-5"></i>
                            <h2>OPPS!!!</h2>
                            <p>This page didn't load Google Maps correctly. See the JavaScript console for technical
                                details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="text-center">
                <h3>SCHOOL HOURS</h3>
            </div>
            <div class="container-fluid">
                <div class="row py-4">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="text-muted">
                            <h6><b>Student School Hours</b></h6>
                            <h6>Monday – Thursday: 8:15 am – 2:50 pm</h6>
                            <h6>Friday: 8:15 am – 1:00 pm</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="text-muted">
                            <h6><b>Student School Hours</b></h6>
                            <h6>Monday – Thursday: 8:15 am – 2:50 pm</h6>
                            <h6>Friday: 8:15 am – 1:00 pm</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="text-muted">
                            <h6><b>Student School Hours</b></h6>
                            <h6>Monday – Thursday: 8:15 am – 2:50 pm</h6>
                            <h6>Friday: 8:15 am – 1:00 pm</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5 text-center">
            <button class="fraud" type="submit">FRAUD & ABUSE COMPLAINT FORM</button>
        </div>
    </div>
@endsection
