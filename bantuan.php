<?php
require 'koneksi.php';
if( isset($_POST["submit"])){
    
    if(tambah($_POST) > 0){
        echo "
            <script>
                alert('Success');
                document.location.href = 'index.php';
            </script>
            ";
    }else{
        echo "
            <script>
                alert('Failure');
                document.location.href = 'index.php';
            </script>
            ";
    }
};
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Post - Upload</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    a{
        text-decoration: none;
    } 
    body{
        background-color: #0E2954;
    }
</style>
</head>
<body>
<div class="container">
    <div class="body">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 50rem; border-radius: 30px;">
                    <div class="card-body" style="box-shadow: 0 0 10px rgb(197, 197, 197); border-radius: 30px">
                        <form action="" method="post" enctype="multipart/form-data">
                            <legend>BANTUAN SHODAQOH</legend>
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" id="nama" class="form-control" name="nama">
                                </div>
                                <label class="form-label" for="kategori">Paket : </label>
                                <select class="form-control" name="kategori" id="kategori"  required="" autocomplete="off">
                                    <option value="">Pilih kategori</option>
                                    <option value="uang">Uang</option>
                                </select>
                                <br>
                                <label class="form-label" for="kategori">Kategori : </label>
                                <select class="form-control" name="kategori" id="kategori"  required="" autocomplete="off">
                                    <option value="">Pilih kategori</option>
                                    <option value="uang">Uang</option>
                                </select>
                                <br>
                                <label class="form-label">Nominal : </label>
                                <input type="text" id="nominal" class="form-control" name="nominal">
                                <br>
                                <div class="mb-3">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button class="btn btn-primary"><a class="link-light" href="index.php">Go back</a></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <?php var_dump($data)?> -->
</body>
</html>