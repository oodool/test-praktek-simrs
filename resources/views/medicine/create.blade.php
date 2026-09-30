<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan Obat</title>
</head>
<body>

    <h1>Tambahkan Obat</h1>

    <form action="/medicine" method="POST">
        @csrf

        <div>
            <label>Nama</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Kategori</label>
            <select name="category">
                <option value="Obat bebas">Obat bebas</option>
                <option value="Obat bebas terbatas">Obat bebas terbatas</option>
                <option value="Obat keras">Obat keras</option>
            </select>
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stock">
        </div>

        <div>
            <label>Harga</label>
            <input type="number" name="price">
        </div>

        <button type="submit">Tambah obat</button>
    </form>

    <a href="/medicine">Kembali</a>

</body>
</html>