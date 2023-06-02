@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="connect">
                <div class="text-center">
                    <h4>REPORT AN ABSENCE</h4>
                </div>
                <form action="#" method="post" class="px-5">
                    <input class="w-100 my-3 p-2" type="text" placeholder="Student Name">
                    <input class="w-100 my-3 p-2" type="text" placeholder="Name of Parent Reporting">
                    <input class="w-100 my-3 p-2" type="email" placeholder="Parent or Guardian Email">
                    <textarea placeholder="Reason/Comments" class="w-100 p-2" cols="30" rows="5"></textarea>
                    <button class="submit" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>

        <div>
            <div class="text-center">
                <h3>SCHOOL HOURS</h3>
            </div>
            <div class="container-fluid">
                <div class="row py-5">
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
    </div>
@endsection
