@extends('template.admin')
@section('konten')
<h3 class="page-heading mb-4">Dashboard</h3>
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <h4 class="text-danger">
              <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
            </h4>
          </div>
          <div class="float-right">
            <p class="card-text text-dark">Belum di verifikasi</p>
            <h4 class="bold-text">
             
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <h4 class="text-warning">
              <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
            </h4>
          </div>
          <div class="float-right">
            <p class="card-text text-dark">Total Pesanan</p>
            <h4 class="bold-text"></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12 mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Data Customer</h5>
            <a href="{{ route('create')}}">
                <button class="btn btn-md btn-primary btn-round float-right mb-2">Tambah</button>
            </a>
        <table class="table table-striped">
          <thead>
            <tr class="">
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Kota</th>
              <th>Email</th>
              <th>Hp</th>
              <th>Perusahaan</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @php
                $no = 1;
            @endphp
@foreach ($data as $item)
    
            <tr>
              <th>{{ $no }}</th>
              <td>{{ $item->nama }}</td>
              <td>{{ $item->alamat }}</td>
              <td>{{ $item->kota }}</td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->hp }}</td>
              <td>{{ $item->perusahaan }}</td>
              <td>
                <a href="{{ route('edit',$item->id)}}" style="text-decoration: none">
                    <button class="btn btn-warning">Edit</button>
                </a>
                <a href="{{ route('destroy',$item->id)}}" style="text-decoration: none">
                    <button class="btn btn-danger">Hapus</button>
                </a>
              </td>
            </tr>
@php
    $no++;
@endphp
@endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection