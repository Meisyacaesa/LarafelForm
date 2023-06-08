<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Laravel 8 - Add Blog Post Form Example
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="text" id="nim" name="nim" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="umur">UMUR</label>
          <input type="number" id="umur" name="umur" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="alamat">ALAMAT</label>
          <input type="text" id="alamat" name="alamat" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="kota">KOTA</label>
          <input name="kota" id="kota" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="kelas">KELAS</label>
          <input name="kelas" id="kelas" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="jurusan">JURUSAN</label>
          <input name="jurusan" id="jurusan" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>