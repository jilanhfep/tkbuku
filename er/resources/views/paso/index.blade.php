<a href="http://127.0.0.1:8000/">  << back </a> 
<h1> List Pemasok </h1>
<a href="mula/create"> CREATE </a>
@foreach($var as $var)
    <p> ID-Pemasok {{ $var->id}} </p>
    <p> ID-Distributor : {{ $var->distributor_id}} | <p> ID-Buku : {{ $var->buku_id}} </p>
    <p> jumlah : {{ $var->jumlah}} </p>
    <p> tanggal : {{ $var->tanggal}} </p>
    <br>
    <a href="/mula/{{$var->id}}/edit"> EDIT</a>
    <br>
    <form action="/mula/{{$var->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach