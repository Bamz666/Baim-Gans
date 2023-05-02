@extends('template.admin')
@section('konten')
<div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Tambah Data</h5>
          <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{ route('store')}}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Customer</label>
              <input type="text" name="customer" class="form-control p-input {{ $errors->first('customer') ? "is-invalid":""}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama customer">
              @error('customer')
              <small class="text-danger">
                  {{ $message }}
              </small>
              @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" name="alamat" class="form-control p-input {{ $errors->first('alamat') ? "is-invalid":""}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan alamat">
                @error('alamat')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kota</label>
                <input type="text" name="kota" class="form-control p-input {{ $errors->first('kota') ? "is-invalid":""}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan asal kota">
                @error('kota')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control p-input {{ $errors->first('email') ? "is-invalid":""}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email">
                @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Hp</label>
                <input type="text" name="hp" class="form-control p-input {{ $errors->first('hp') ? "is-invalid":""}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomor hp">
                @error('hp')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Perusahaan</label>
                <input type="text" name="perusahaan" class="form-control p-input {{ $errors->first('perusahaan') ? "is-invalid":""}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama perusahaan">
                @error('perusahaan')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>
            
            
              <center>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </center>
            </div>
        
        </form>
      </div>
    </div>
  </div>
</div>
@endsection