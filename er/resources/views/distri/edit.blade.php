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
<form action="/mulai/{{$var->id}}" method="post">
    <input type="text" name="nama_distributor" value="{{$var->nama_distributor}}" placeholder="nama_distributor"><br>
    <input type="text" name="alamat" value="{{$var->alamat}}" placeholder="alamat"><br>
    <input type="text" name="telepon" value="{{$var->telepon}}" placeholder="telepon"><br>
    <input type="submit" value="edit">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
    <input type="hidden" value="put" name="_method">
</form>