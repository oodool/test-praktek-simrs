<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan Pasien</title>
</head>
<body>

    <h1>Tambahkan Pasien</h1>

    <form action="/patient" method="POST">
        @csrf

        <div>
            <label>Nama</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Tanggal lahir</label>
            <input type="date" name="date_of_birth">
        </div>

        <div>
            <label>Nomor telepon</label>
            <input type="number" name="phone_number">
        </div>

        <div>
            <label>Alamat</label>
            <input type="text" name="address">
        </div>

        <div>
            <label>Jenis kelamin</label>
            <select name="gender">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <button type="submit">Tambah pasien</button>
    </form>

    <a href="/patient">Kembali</a>

</body>
</html>