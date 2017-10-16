<link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css"> 
  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">DISTRIBUTOR</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/distributor">Distributor</a></li>
        <li><a href="/pasok">Pasokan</a></li>
        <li class="active"><a href="/buku">Buku</a></li>
        <li><a href="/penjualan">Penjualan</a></li>
      </ul>
    </div>
  </nav>

<div class="container" style="margin-top: 2%;">
<form action="/buku" method="post">
    <h4>Buat BUKU</h2>
    <input type="text" name="judul" value="" placeholder="judul"><br>
    <input type="text" name="noisbn" value="" placeholder="noisbn"><br>
    <input type="text" name="penulis" value="" placeholder="penulis"><br>
    <input type="text" name="penerbit" value="" placeholder="penerbit"><br>
    <input type="text" name="tahun" value="" placeholder="tahun"><br>
    <input type="text" name="stok" value="" placeholder="stok"><br>
    <input type="text" name="harga_pokok" value="" placeholder="Harga pokok"><br>
    <input type="text" name="harga_jual" value="" placeholder="harga_jual"><br>
    <input type="text" name="ppn" value="" placeholder="ppn"><br>
    <input type="text" name="diskon" value="" placeholder="diskon"><br>
    <input type="submit" value="post" class="waves-effect waves-light btn right">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>