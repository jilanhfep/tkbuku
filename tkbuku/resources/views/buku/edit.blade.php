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
<form action="/buku/{{$var->id_buku}}" method="post">
    <h4>EDIT BUKU</h2>
    <input type="text" name="judul" value="{{ $var->judul}}" placeholder="judul"><br>
    <input type="text" name="noisbn" value="{{ $var->noisbn}}" placeholder="noisbn"><br>
    <input type="text" name="penulis" value="{{ $var->penulis}}" placeholder="penulis"><br>
    <input type="text" name="penerbit" value="{{ $var->penerbit}}" placeholder="penerbit"><br>
    <input type="text" name="tahun" value="{{ $var->tahun}}" placeholder="tahun"><br>
    <input type="text" name="stok" value="{{ $var->stok}}" placeholder="stok"><br>
    <input type="text" name="harga_pokok" value="{{ $var->harga_pokok}}" placeholder="Harga pokok"><br>
    <input type="text" name="harga_jual" value="{{ $var->harga_jual}}" placeholder="harga_jual"><br>
    <input type="text" name="ppn" value="{{ $var->ppn}}" placeholder="ppn"><br>
    <input type="text" name="diskon" value="{{ $var->diskon}}" placeholder="diskon"><br>
    <input type="submit" class="waves-effect waves-light btn right" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
</div>
<script src="<?php echo asset('js/materialize.js')?>"></script>