<link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css"> 
  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PASOK</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/distributor">Distributor</a></li>
        <li class="active"><a href="/pasok">Pasokan</a></li>
        <li><a href="/buku">Buku</a></li>
        <li><a href="/penjualan">Penjualan</a></li>
      </ul>
    </div>
  </nav>
<div class="container" style="margin-top: 2%;">
<form action="/pasok/{{$var->id_pasok}}" method="post">
    <h4>EDIT PASOK</h2>
    <input type="text" name="id_distributor" value="{{ $var->id_distributor}}" placeholder="id_distributor"><br>
     <input type="text" name="id_buku" value="{{ $var->id_buku}}" placeholder="id_buku"><br>
    <input type="text" name="jumlah" value="{{ $var->jumlah}}" placeholder="jumlah"><br>
    <input type="date" name="tanggal" value="{{ $var->tanggal}}" placeholder="tanggal"><br>
    <input type="submit" class="waves-effect waves-light btn right" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>