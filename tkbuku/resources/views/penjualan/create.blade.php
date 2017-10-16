<link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css"> 
  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PENJUALAN</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/distributor">Distributor</a></li>
        <li><a href="/pasok">Pasokan</a></li>
        <li><a href="/buku">Buku</a></li>
        <li class="active"><a href="/penjualan">Penjualan</a></li>
      </ul>
    </div>
  </nav>

<div class="container" style="margin-top: 2%;">
<form action="/penjualan" method="post">
    <h4>Buat Penjualan</h2>
    <input type="text" name="id_kasir" value="" placeholder="id_kasir"><br>
    <input type="text" name="id_buku" value="" placeholder="id_buku"><br>
    <input type="text" name="jumlah" value="" placeholder="jumlah"><br>
    <input type="text" name="total" value="" placeholder="total"><br>
    <input type="date" name="tanggal" value="" placeholder="tanggal"><br>
    <input type="submit" value="post" class="waves-effect waves-light btn right">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>