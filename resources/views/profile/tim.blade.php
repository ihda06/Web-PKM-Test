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
                <h2 class="py-4 border-bottom">Info Tim</h2>
                @if(Auth::user()->role == 0)
                <div class="container pb-5 pt-3">
                    <h1>Belum memiliki tim</h1>
                    <a href="" class="btn btn-outline-primary">Buat Tim</a>
                </div>
                @else
                <div class="container pb-5 pt-3">
                    <form>
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-auto">
                                <input type="email" class="form-control" id="inputEmail3" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Program Studi</label>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->npm}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">NPM</label>
                            <div class="col-auto">
                                <input type="text" class="form-control" id="inputEmail3" value="{{Auth::user()->program_studi}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection