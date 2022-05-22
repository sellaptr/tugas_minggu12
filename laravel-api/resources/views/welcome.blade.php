<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tugas Sella Minggu 12</title>
  </head>
  <body>

    <div class="container">
        <div class="card">
          <h1>Data Mahasiswa</h1>
            <div class="card-header">
                <a href="create" class="btn btn-primary">Tambah data</a>
            </div>
            <div class="card-body">
              
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tingkatan</th>
                        <th scope="col">Tahun masuk</th>
                        <th scope="col">Tahun keluar</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($studies as $study)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$study->nama}}</td>
                            <td>{{$study->tingkatan}}</td>
                            <td>{{$study->tahun_masuk}}</td>
                            <td>{{$study->tahun_keluar}}</td>
                            <td>
                                <a href="{{ route('study.edit', $study->id)}}" class="btn btn-warning">edit</a>
                                <a href="/study/{{$study->id}}/destroy" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>

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