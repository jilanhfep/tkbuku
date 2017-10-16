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
<form action="/main/{{$var->id}}" method="post">
    <input type="text" name="buku_id" value="{{$var->buku_id}}" placeholder="buku_id"><br>
    <input type="text" name="kasir_id" value="{{$var->kasir_id}}" placeholder="kasir_id"><br>
    <input type="text" name="jumlah" value="{{$var->jumlah}}" placeholder="jumlah"><br>
    <input type="text" name="total" value="{{$var->total}}" placeholder="total"><br>
    <input type="date" name="tanggal" value="{{$var->tanggal}}" placeholder="tanggal"><br>
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>