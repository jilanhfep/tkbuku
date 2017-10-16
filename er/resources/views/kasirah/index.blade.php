<a href="http://127.0.0.1:8000/">  << back </a> 
<h1> Admin Kasir </h1>
<a href="mane/create"> CREATE </a>
@foreach($var as $var)
    <p> ID-Kasir {{ $var->id}} </p>
    <p> Nama : {{ $var->nama}} | Alamat : {{ $var->Alamat0}} </p>
    <p> Telepon : {{ $var->telepon}} </p> 
    <p> Tahun-Rilis : {{ $var->tahun}} </p>
    <p> Username : {{ $var->user}} </p>
    <p> Status : {{ $var->status}} | Akses : {{ $var->akses}}</p>
    <br>
    <a href="/mane/{{$var->id}}/edit"> EDIT</a>
    <br>
    <form action="/mane/{{$var->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach