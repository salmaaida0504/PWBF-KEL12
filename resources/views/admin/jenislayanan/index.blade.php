@extends('admin.layouts.template')
@extends('admin.layout')

@section('konten')
  @section('content')
    <!-- START DATA -->
    <div class="container">
      @include('admin.komponen.pesan')

      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
          <div class="pb-3">
            <a href='' class="btn btn-primary">+ Tambah Data</a>
          </div>

        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-md-1">No</th>
              <th class="col-md-1">ID</th>
              <th class="col-md-4">Jenis Layanan</th>
              <th class="col-md-2">Harga Layanan</th>
              <th class="col-md-2">Aksi</th>
            </tr>
          </thead>
          <tbody>

                  <a href='' class="btn btn-warning btn-sm">Edit</a>
                  <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="" method="post">
                    {{-- @csrf
                    @method('DELETE') --}}
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              <?php ?>
            
          </tbody>
        </table>
        {{-- {{ $data->withQueryString()->links() }} --}}
      </div>
    </div>
      <!-- AKHIR DATA -->
  @endsection
@endsection

