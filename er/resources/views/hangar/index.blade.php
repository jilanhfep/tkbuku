<a href="http://127.0.0.1:8000/">  << back </a> 
<h1> List Penjualan </h1>
<a href="main/create"> CREATE </a>
@foreach($var as $var)
    <p> ID-Penjualan {{ $var->id}} </p>
    <p> ID-Buku : {{ $var->buku_id}} | ID-Kasir : {{ $var->kasir_id}} </p>
    <p> Jumlah : {{ $var->jumlah}} </p>
    <p> Total : {{ $var->total}} </p>
    <p> Jatuh_Tempo : {{ $var->tanggal}} </p>
    <br>
    <a href="/main/{{$var->id}}/edit"> EDIT</a>
    <br>
    <form action="/main/{{$var->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach