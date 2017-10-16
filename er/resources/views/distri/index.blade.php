<a href="http://127.0.0.1:8000/">  << back </a> 
<h1> List Distributor </h1>
<a href="mulai/create"> CREATE </a>
@foreach($var as $var)
    <p> ID-Distributor {{ $var->id}} </p>
    <p> Nama : {{ $var->nama_distributor}} </p>
    <p> Alamat : {{ $var->alamat}} </p>
    <p> telepon : {{ $var->telepon}} </p>
    <br>
    <a href="/mulai/{{$var->id}}/edit"> EDIT</a>
    <br>
    <form action="/mulai/{{$var->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach