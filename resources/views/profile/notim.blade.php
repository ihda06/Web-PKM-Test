@extends('layout.main')


@section('css')
<link rel="stylesheet" href="/css/profile.css">
@endsection

@section('konten')
<section class="mt-5">
    <div class="container">
        <div class="row g-5 px-3 px-md-0">
            <div class="col-md-4 col-12">
                <div class="row row-cols-1 gy-3">
                    <div class="col bg-white shadow-sm rounded-3">
                        <div class="row my-4">
                            <div class="col-4 img-profile d-flex justify-content-end">
                                <img src="/img/profile.png" alt="">
                            </div>
                            <div class="col-8 ">
                                <h5>{{Auth::user()->name}}</h5>
                                <p>profil</p>
                            </div>
                        </div>
                    </div>
                    <div class="col bg-white shadow-sm rounded-3">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Profile</a>
                            <a href="#" class="list-group-item list-group-item-action">Tim</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 bg-white shadow-sm rounded-3">
                <h2 class="py-4 border-bottom">Belum memiliki tim</h2>
                
            </div>
        </div>
    </div>
</section>
@endsection