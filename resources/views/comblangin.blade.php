@extends('layout.main')

@section('css')
<link rel="stylesheet" href="/css/comblangin.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('comblangin')
{{ 'active' }}
@endsection


@section('konten')
<div class="container">
    <div class="row mt-5 d-flex align-items-center ">
        <div class="col-6">
            <h1>Cari Tim</h1>
        </div>
        @guest
        <div class="col-6 d-flex justify-content-end">
            <a href="/daftar" class="btn btn-outline-success">Daftarkan Tim</a>
        </div>
        @else
        <div class="col-6 d-flex justify-content-end">
            <a href="/tim" class="btn btn-outline-success">Tim Saya</a>
        </div>
        @endguest
    </div>
    <div class="row mt-5 ">
        @foreach($tims as $tim)
        <div class="col-sm-6 col-lg-4 d-flex mt-3 mt-lg-2 justify-content-center ">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{$tim["Judul"]}}</h5>
                    <div class="card-subtitle mb-4 text-muted">
                        <p>
                            <i class="bi bi-person-square px-1"></i>
                            {{$tim["Ketua"]}}
                        </p>
                        <span class="badge rounded-pill bg-info text-white">PKM-GT</span>
                    </div>

                    <h6 class="card-text">Deskripsi</h6>
                    <p class="card-text">{{$tim["Keterangan"]}}</p>
                    <p class="card-text">
                        <span class="badge rounded-pill bg-warning text-dark">-3 Orang</span>

                    </p>
                    <div class="card-footer mt-4">
                        <div class="row">
                            <div class="col text-end">

                                <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-kontak="{{$tim['Kontak']}}" data-bs-judul="{{$tim['Judul']}}" data-bs-ketua="{{$tim['Ketua']}}">
                                    Kontak
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    @endsection

    @section('tambahan')

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container px-5 py-3">
                        <h1>Deskripsi</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem odio nobis autem laboriosam accusamus fuga in accusantium, recusandae facilis magnam suscipit cum quisquam reprehenderit, doloribus quaerat illum nam. Quaerat ullam pariatur hic atque id! Eum quia voluptate nulla iste laudantium exercitationem quasi est soluta corrupti nisi facilis libero cupiditate, assumenda obcaecati quos, molestias sequi dolores, dignissimos temporibus ratione iure sit labore minima commodi! Quis natus illum ad, voluptatibus quidem ea cupiditate molestiae veritatis officia cum labore? Aperiam voluptatem saepe laboriosam eius porro, nisi laudantium? Laudantium voluptatum dignissimos corrupti alias laborum consequuntur nulla blanditiis, vero aliquid, nostrum soluta accusantium odio illo!</p>
                        <h3 class="pt-4">Kontak</h3>
                        <div class="row pt-3">
                            <div class="col text1">
                                <h3 class="ketua"></h3>
                                <h5 class="kontak"></h5>
                            </div>
                            <div class="col-auto d-flex justifiy-content-center align-items-center">
                                <i class="bi bi-telephone-plus-fill"></i>
                            </div>
                        </div>
                        <div class="row px-2 pt-3">
                            <a class="btn btn-outline-success">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var kontak = button.getAttribute('data-bs-kontak')
        var ketua = button.getAttribute('data-bs-ketua')
        var judul = button.getAttribute('data-bs-judul')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalJudul = exampleModal.querySelector('.modal-title')
        var modalKetua = exampleModal.querySelector('.modal-body .ketua')
        var modalKontak = exampleModal.querySelector('.modal-body .kontak')

        modalJudul.textContent = "Kontak"
        modalKetua.textContent = ketua
        modalKontak.textContent = kontak
    })
</script>

@endsection