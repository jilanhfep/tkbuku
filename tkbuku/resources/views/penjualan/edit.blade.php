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
<form action="/penjualan/{{$var->id_penjualan}}" method="post">
    <h4>EDIT penjualan</h2>
    <input type="text" name="id_kasir" value="{{ $var->id_kasir}}" placeholder="id_kasir"><br>
     <input type="text" name="id_buku" value="{{ $var->id_buku}}" placeholder="id_buku"><br>
    <input type="text" name="jumlah" value="{{ $var->jumlah}}" placeholder="jumlah"><br>
    <input type="text" name="total" value="{{ $var->total}}" placeholder="total"><br>
    <input type="date" name="tanggal" value="{{ $var->tanggal}}" placeholder="tanggal"><br>
    <input type="submit" class="waves-effect waves-light btn right" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>