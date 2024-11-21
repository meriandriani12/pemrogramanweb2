<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- As a link -->
     <nav class="navbar navbar-light bg-light mb-3">
     <div class="container">
     <a class="navbar-brand" href="#">Toko Buku Online</a>
     <button class = "btn btn-secondary position-relative">
        Chart
     <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    99+
    <span class="visually-hidden">unread messages</span>
  </span>
  </button>
  </div>
</nav>

<div class = "container">
    <h1>Ringkasan Order</h1>
    <div class = "row">
    <div class = "col-9">
        <table class = "table table-stripe">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Detail Buku</th>
                    <th scope="col">Qty</th>
                    <th scope="col">harga</th>
                    <th scope="col">total</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">#0001</th>
                    <td>
                        <img src="<?=base_url()+'images/1.jpg'?>" alt="" style="width: 150px; height: auto;">
                        <h5>Pulang - Karima Ifha</h5>
                    </td>
                    <td>1</td>
                    <td>Rp100,000</td>
                    <td>Rp100,000</td>
                    <td>
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
</div>
<div class="col-3">
    <div calss="">
        <h2 class ="text-secondary">Total Bayar</h2>
        <h2>Rp100,000</h2>
    </div>

</div>
</div>
</div>

<footer class="p-5 bg-danger-subtle mt-5 text-center">
    &copy; 2024. Kelas A Pemrograman Web2. All Rights Reserved
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
