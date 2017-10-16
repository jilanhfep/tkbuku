@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1> EDIT </h1>
<form action="/mai/{{$var->id}}" method="post">
    <input type="text" name="judul" value="{{$var->judul}}" placeholder="judul"><br>
    <input type="text" name="no_isbn" value="{{$var->no_isbn}}" placeholder="no_isbn"><br>
    <input type="text" name="penulis" value="{{$var->penulis}}" placeholder="penulis"><br>
    <input type="text" name="penerbit" value="{{$var->penerbit}}" placeholder="penerbit"><br>
    <input type="text" name="tahun" value="{{$var->tahun}}" placeholder="tahun"><br>
    <input type="text" name="stok" value="{{$var->stok}}" placeholder="stok"><br>
    <input type="text" name="harga_pokok" value="{{$var->harga_pokok}}" placeholder="harga_pokok"><br>
    <input type="text" name="harga_jual" value="{{$var->harga_jual}}" placeholder="harga_jual"><br>
    <input type="text" name="ppn" value="{{$var->ppn}}" placeholder="ppn"><br>
    <input type="text" name="diskon" value="{{$var->diskon}}" placeholder="diskon"><br>
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>