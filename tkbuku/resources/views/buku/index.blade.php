<link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css"> 

  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">LIST BUKU</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/distributor">Distributor</a></li>
        <li><a href="/pasok">Pasokan</a></li>
        <li class="active"><a href="/buku">Buku</a></li>
        <li><a href="/penjualan">Penjualan</a></li>
      </ul>
    </div>
  </nav>
        

<div class="container" style="margin-top: 2%; ">

<table class="highlight">
        <thead>
	        <form>
	        		<div class="row">
	        		<div class="input-field col s8 right"  >
	        		<input id="search" type="submit" value="cari" class="waves-effect waves-light btn teal right" style="margin-top:20px;"">
	        		<div class="input-field col s4 right " >
	          		<input id="search" type="search"  placeholder="search">
	        		</div>
	        		</div>
	        		</div>
	        </form>
	          <tr>
              <th>JUDUL</th>
              <th>NO ISBN</th>
              <th>PENULIS</th>
              <th>PENERBIT</th>
              <th>TAHUN</th>
              <th>STOK</th>
              <th>HARGA POKOK</th>
              <th>HARGA JUAL</th>
              <th>PPN</th>
              <th>DISKON</th>
              <th>AKSI</th>
          </tr>
        </thead>

        <tbody>
        @foreach($var as $vars)
          <tr>
            <td>{{ $vars->judul}}</td>
            <td>{{ $vars->noisbn}}</td>
            <td>{{ $vars->penulis}}</td>
            <td>{{ $vars->penerbit}}</td>
            <td>{{ $vars->tahun}}</td>
            <td>{{ $vars->stok}}</td>
            <td>{{ $vars->harga_pokok}}</td>
            <td>{{ $vars->harga_jual}}</td>
            <td>{{ $vars->ppn}}</td>
            <td>{{ $vars->diskon}}</td>
          
            <td>

            	<a href="/buku/{{$vars->id_buku}}/edit" class="waves-effect waves-light btn blue " style="padding: 0px 42px;"> edit </a><br><br>
            	<form action="/buku/{{$vars->id_buku}}" method="post">
        				<input type="hidden" value="{{ csrf_token() }}" name="_token">
        				<input type="hidden" value="delete" name="_method">
        				<input type="submit" value="delete" class="waves-effect waves-light btn red">
    			</form>

            </td>
          </tr>

        @endforeach
        </tbody>

      </table>
      <div style="position: top:20px;">{{ $var->links() }}</div>
      <a href="buku/create" class="waves-effect waves-light btn right"> CREATE </a>
</div>
</body>
<script src="<?php echo asset('js/materialize.js')?>"></script>