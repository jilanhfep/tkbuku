<link rel="stylesheet" href="<?php echo asset('css/materialize.css')?>" type="text/css"> 

  <nav class="teal">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">List DISTRIBUTOR</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="/distributor">Distributor</a></li>
        <li><a href="/pasok">Pasokan</a></li>
        <li><a href="/buku">Buku</a></li>
        <li><a href="/penjualan">Penjualan</a></li>
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
              <th>NAMA DISTIRBUTOR</th>
              <th>Telepon</th>
              <th>ALAMAT</th>
              <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
        @foreach($var as $vars)
          <tr>
            <td>{{ $vars->nama_distributor}}</td>
            <td>{{ $vars->telepon}}</td>
            <td>{{ $vars->alamat}}</td>
            <td>

            	<a href="/distributor/{{$vars->id_distributor}}/edit" class="waves-effect waves-light btn blue " style="padding: 0px 42px;"> edit </a><br><br>
            	<form action="/distributor/{{$vars->id_distributor}}" method="post">
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
      <a href="distributor/create" class="waves-effect waves-light btn right"> CREATE </a>
</div>
</body>
<script src="<?php echo asset('js/materialize.js')?>"></script>