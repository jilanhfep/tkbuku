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

<form action="/mula" method="post">
    <input type="text" name="distributor_id" value="" placeholder="distributor_id"><br>
    <input type="text" name="buku_id" value="" placeholder="buku_id"><br>
    <input type="text" name="jumlah" value="" placeholder="jumlah"><br>
    <input type="date" name="tanggal" value="" placeholder="tanggal"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>