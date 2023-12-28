@extends('frontend.theme.main')
@section('main')
    <!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>আমাদের লোকেশন</h4>
                            <p class="m-0">{{ $info_data->address }}</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-phone-alt text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>ফোন নম্বর</h4>
                            <p class="m-0">{{ $info_data->phone }}</p> 
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-envelope text-white"></i>
                        </div>
                        <div class="mt-n1"> 
                            <h4>ইমেইল</h4>
                            <p class="m-0">{{ $info_data->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">যোগাযোগ করতে?</h6>
                    <h1 class="display-4">আমাদের মেসেজ পাঠান </h1>
                </div>
                <div class="contact-form">
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6 form-group">
                                <input name="name" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="আপনার নাম"">
                                <small><span class="text-danger"> @error('name') {{$message}} @enderror </span></small>
                            </div>
                                <div class="col-6 form-group">
                                <input name="email" type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="আপনার ইমেইল" required="required">
                                <small><span class="text-danger"> @error('email') {{$message}} @enderror </span></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <input name="subject" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="সাব্জেক্ট">
                            <small><span class="text-danger"> @error('subject') {{$message}} @enderror </span></small>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="মেসেজ"></textarea>
                            <small><span class="text-danger"> @error('message') {{$message}} @enderror </span></small>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" type="submit">মেসেজ পাঠান </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection