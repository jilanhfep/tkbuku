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
<form action="/distributor/{{$var->id_distributor}}" method="post">
    <h4>Buat Distributor</h2>
    <input type="text" name="nama_distributor" value="{{ $var->nama_distributor}}" placeholder="nama_distributor"><br>
    <input type="text" name="telepon" value="{{ $var->telepon}}" placeholder="telepon"><br>
    <input type="text" name="alamat" value="{{ $var->alamat}}" placeholder="alamat"><br>
    <input type="submit" class="waves-effect waves-light btn right" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>