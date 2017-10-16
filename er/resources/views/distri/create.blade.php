@if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif
<h1>CREATE</h1>

<form action="/mulai" method="post">
    <input type="text" name="nama_distributor" value="" placeholder="nama_distributor"><br>
    <input type="text" name="alamat" value="" placeholder="alamat"><br>
    <input type="text" name="telepon" value="" placeholder="telepon"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>