<a href="http://127.0.0.1:8000/">  << back </a> 
<h1> List Buku </h1>
<a href="mai/create"> CREATE </a>
@foreach($var as $var)
    <p> ID-Buku {{ $var->id}} </p>
    <p> Judul : {{ $var->judul}} | No.ISBN : {{ $var->no_isbn}} </p>
    <p> Penulis : {{ $var->penulis}} | Penerbit : {{ $var->penerbit}}  </p> 
    <p> Tahun-Rilis : {{ $var->tahun}} </p>
    <p> Stok-Buku : {{ $var->stok}} </p>
    <p> Harga_Pokok : {{ $var->harga_pokok}} | Harga_Jual : {{ $var->harga_jual}} | PPn : {{ $var->ppn}} | Diskon : {{ $var->diskon}} </p>
    <br>
    <a href="/mai/{{$var->id}}/edit"> EDIT</a>
    <br>
    <form action="/mai/{{$var->id}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach