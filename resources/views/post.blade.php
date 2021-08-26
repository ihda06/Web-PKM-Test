@extends('layout.main')

@section('css')
<link rel="stylesheet" href="/blog-post.css">
@endsection

@section('blog')
{{'active'}}
@endsection


@section('konten')
<div class="container artikel">
    <div class="row">
        <div class="col-lg-8 p-5 p-sm-0 pe-sm-4 mb-5">
            <h3 class="">
                {{$post->title}}
            </h3>
            <h6 class="">{{$post["author"]}}</h6>
            <p class="">{{$post['body']}}</p>
            <a href="/blog" class="mt-2 btn btn-primary">Back</a>
        </div>
        <div class="col-lg-4">
            <!-- <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Featured
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
            </div> -->
            <!-- <div class="row">
                <div class="col">
                    <h3>Rekomendasi artikel</h3>
                </div>
            </div> -->
            <div class="row py-3">
                <div class="col d-flex justify-content-lg-center">
                    <div class="card" style="width: 20rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($posts as $pos)
                            <li class="list-group-item">{{$pos['title']}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- <div class="card" style="width: 20rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">An item</li>
                            
                        </ul>
                        <div class="card-footer">
                            Card footer
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </div>


</div>
@endsection