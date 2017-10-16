<h1> VIEW BUKU</h1>
<a href="buku/create"> CREATE </a>
@foreach($var as $var)
    <p> JUDUL : {{ $var->buku->judul}} </p></a>
    <p> PENULIS : {{ $var->jumlah}} </p>
    <p> TAHUN : {{ $var->total}} </p>
    <p> STOK : {{ $var->tangggal}} </p>
    <p> PPN : {{ $var->ppn}} </p>
    <p> DISKON : {{ $var->diskon}} % </p>
    <a href="/buku/{{$var->id_buku}}/edit"> EDIT</a>
    <form action="/buku/{{$var->id_buku}}" method="post">
        <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <input type="hidden" value="delete" name="_method">
        <input type="submit" value="delete">
    </form>
    <hr>
@endforeach