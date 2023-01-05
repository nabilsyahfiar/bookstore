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
              <th>Nama</th>
              <th>Judul</th>
              <th>Jumlah</th>
              <th>Metode Pengiriman</th>
              <th>Tanggal Pesanan</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($invoice as $invoices)
            <tr>
                <td>{{ $invoices->id }}</td>
                <td>{{ $invoices->name }}</td>
                <td>{{ $invoices->title }}</td>
                <td>{{ $invoices->amount }}</td>
                <td>{{ $invoices->method_name }}</td>
                <td>{{ $invoices->order_date }}</td>
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