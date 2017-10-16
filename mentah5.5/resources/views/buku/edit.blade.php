@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1> EDIT BUKU</h1>
<form action="/buku/{{$var->id_buku}}" method="post">
    <input type="text" name="judul" value="{{ $var->judul}}" placeholder="judul"><br>
    <input type="text" name="noisbn" value="{{ $var->noisbn}}" placeholder="noisbn"><br>
    <input type="text" name="penulis" value="{{ $var->penulis}}" placeholder="penulis"><br>
    <input type="text" name="tahun" value="{{ $var->tahun}}" placeholder="tahun"><br>
    <input type="text" name="stok" value="{{ $var->stok}}" placeholder="stok"><br>
    <input type="text" name="harga_pokok" value="{{ $var->harga_pokok}}" placeholder="harga_pokok"><br>
    <input type="text" name="harga_jual" value="{{ $var->hargajual}}" placeholder="harga_jual"><br>
    <input type="text" name="diskon" value="{{ $var->diskon}}" placeholder="diskon"><br>
    <input type="text" name="ppn" value="{{ $var->ppn}}" placeholder="ppn"><br>
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>
