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
              <th>Judul</th>
              <th>ISBN</th>
              <th>Bahasa</th>
              <th>Halaman</th>
              <th>Tanggal Publikasi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($book as $books)
            <tr>
              <td>{{ $books->id }}</td>
              <td>{{ $books->title }}</td>
              <td>{{ $books->isbn13 }}</td>
              <td>{{ $books->language_name }}</td>
              <td>{{ $books->pages }}</td>
              <td>{{ Carbon::createFromFormat('Y-m-d', $books->publication_date)->format('d F Y') }}</td>
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