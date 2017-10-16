<link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css"> 
  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">DISTRIBUTOR</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="/distributor">Distributor</a></li>
        <li><a href="/pasok">Pasokan</a></li>
        <li><a href="/buku">Buku</a></li>
        <li><a href="/penjualan">Penjualan</a></li>
      </ul>
    </div>
  </nav>

<div class="container" style="margin-top: 2%;">
<form action="/distributor" method="post">
    <h4>Buat Distributor</h2>
    <input type="text" name="nama_distributor" value="" placeholder="nama_distributor"><br>
    <input type="text" name="telepon" value="" placeholder="telepon"><br>
    <input type="text" name="alamat" value="" placeholder="alamat"><br>
    <input type="submit" value="post" class="waves-effect waves-light btn right">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>