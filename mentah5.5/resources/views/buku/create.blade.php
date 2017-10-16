<h1>CREATE</h1>
<form action="/buku" method="post">
    <input type="text" name="judul" value="" placeholder="judul"><br>
    <input type="text" name="noisbn" value="" placeholder="noisbn"><br>
    <input type="text" name="penulis" value="" placeholder="penulis"><br>
    <input type="text" name="tahun" value="" placeholder="tahun"><br>
    <input type="text" name="stok" value="" placeholder="stok"><br>
    <input type="text" name="harga_pokok" value="" placeholder="harga_pokok"><br>
    <input type="text" name="harga_jual" value="" placeholder="harga_jual"><br>
    <input type="text" name="diskon" value="" placeholder="diskon"><br>
    <input type="text" name="ppn" value="" placeholder="ppn"><br>
    <input type="submit" value="post">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>