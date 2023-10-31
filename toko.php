<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
  <h1>Toko wayang mimi</h1>
  <p>toko cuanki mimi menjual barang barang antik </p>
  <form action="" method="POST" name="penjualan">
  <div class="mb-3">
    <label form="namabarang">Nama barang</label>
    <input type="Text" class="form-control" name="nama_brg">
  </div>
  <div class="mb-3">
    <label form="hargabarang">harga barang</label>
    <input type="text" class="form-control" name="hrg_brg">
  </div>
  <div class="mb-3">
    <label form="Jumlahbarang">Jumlah barang</label>
    <input type="Text" class="form-control" name="jml_brg">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Hitung</button>
  </div>
</form>
</div>
<?php 
 if (isset($_POST['submit'])){
    $brg = $_POST['nama_brg'];
    $harga = $_POST['hrg_brg'];
    $jumlah = $_POST['jml_brg'];

    echo "<div class='container'>";
    echo "<hr><h3 class= 'text-md-start'>Jumlah yang harus di bayarkan</h3>";

    $barang = $jumlah * $harga;
    $diskon = $barang * 0.50;
     $total = $barang - $diskon;

     echo "nama barang: $brg <br>";
     echo "Harga barang: $harga <br>";
     echo "jumlah barang: $jumlah <br>";
     echo "Diskon : 50% <br>";
     echo "<h3 class= 'text-md-start'>Rp.$total</h3>";
     echo "</div>";

 }
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>