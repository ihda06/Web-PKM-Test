@extends('layout.main')

@section('css')
<link rel="stylesheet" href="css/comblangin.css">
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
        <div class="col-6 d-flex justify-content-end">
            <a href="" class="btn btn-outline-success">Daftarkan Tim</a>
        </div>
    </div>
    <div class="row mt-5 ">
        @foreach($tims as $tim)
        <div class="col-sm-6 col-lg-3 d-flex mt-3 mt-lg-2 justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$tim["Judul"]}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$tim["Ketua"]}}</h6>
                    <p class="card-text">{{$tim["Keterangan"]}}</p>
                    <p class="card-text"><span class="badge rounded-pill bg-warning text-dark">-3 Orang</span></p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-kontak="{{$tim['Kontak']}}" data-bs-judul="{{$tim['Judul']}}" data-bs-ketua="{{$tim['Ketua']}}">
                        Kontak
                    </button>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    @endsection

    @section('tambahan')
   
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="bilget.jpg" style="width: 100%;" alt="">
                        </div>
                        <div class="col-lg-9">
                            <h5 class="ketua"></h5>
                            <h3 class="kontak"></h3>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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

            modalJudul.textContent = judul
            modalKetua.textContent = ketua
            modalKontak.textContent = kontak
        })
    </script>

@endsection