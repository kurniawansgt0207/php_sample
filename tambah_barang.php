<html>
    <head></head>
    <body>
        <form name="frmbarang" method="post" action="insert_barang.php">            
            <p>
                Kode Barang:
                <input type="text" name="kodebrg">
            </p>
            <p>
                Nama Barang:
                <input type="text" name="namabrg">
            </p>
            <p>
                Harga Barang:
                <input type="text" name="hargabrg">
            </p>
            <p>
                Merk Barang:
                <input type="text" name="merkbrg">
            </p>
            <p>
                Status Barang:
                <select name="statusbrg">
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </p>
            <p>
                <button type="submit">Simpan</button>
                <input type="button" value="Kembali" onclick="window.location='list_barang.php'">
            </p>
        </form>
    </body>
</html>