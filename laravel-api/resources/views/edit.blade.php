<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit data</h2>
            </div>
            <div class="card-body">
              
                <form action="{{route('study.update', $studyId->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="text" value="{{ $studyId->nama}}" class="form-control" id="" name="nama" aria-describedby="">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Tingkatan</label>
                      <input type="number" name="tingkatan" value="{{ $studyId->tingkatan }}" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tahun Masuk</label>
                        <input type="number" name="tahun_masuk" minlength="4" value="{{ $studyId->tahun_masuk}}" class="form-control" id="">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Tahun Keluar</label>
                        <input type="number" name="tahun_keluar"class="form-control" minlength="4" id="" value="{{ $studyId->tahun_keluar }}">
                      </div>
                      <button type="submit" class="btn btn-primary">Perbaharui</button>
                      <a href="{{ route('study.index')}}" class="btn btn-light">Kembali</a>
                  </form>

            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>