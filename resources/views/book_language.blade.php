<?php 
use Illuminate\Support\Carbon;
?>

@include('includes.head')
@include('includes.sidebar')

  <!-- DataTales Example -->
  <div class="card border-left-primary shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Bahasa</th>
              <th>Tanggal Dibuat</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($bookLanguage as $bookLanguages)
            <tr>
              <td>{{ $bookLanguages->id }}</td>
              <td>{{ $bookLanguages->language_name }}</td>
              <td>{{ $bookLanguages->created_at }}</td>
            </tr>
            @empty
            <div class="alert alert-danger">Tidak ada data tersedia!</div>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

@include('includes.foot') 