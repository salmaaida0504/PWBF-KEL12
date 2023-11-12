@extends('admin.layouts.template')
@extends('admin.layout')

@section('konten')
    @section('content')


        <!-- START FORM -->
        <div class="container">
            @include('admin.komponen.pesan')
                <form action='' method='post'>

                    <div class="my-3 p-3 bg-body rounded shadow-sm">
                        <a href=''class="btn btn-secondary">Kembali</a>
                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">

                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">Jenis Layanan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name='jenis layanan' value="" id="jenis_layanan">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">Harga Layanan</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name='harga layanan' value="" id="harga_layanan">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Simpan</button></div>
                        </div>
                    </div>
                </form>
        </div>
        <!-- AKHIR FORM -->
    @endsection
@endsection
