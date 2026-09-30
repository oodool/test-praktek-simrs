<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan Dokter</title>
</head>
<body>

    <h1>Tambahkan Dokter</h1>

    <form action="/doctor" method="POST">
        @csrf

        <div>
            <label>Nama</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Spesialis</label>
            <input type="text" name="specialization">
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
            <label>Tanggal bergabung</label>
            <input type="date" name="joined_date">
        </div>

        <button type="submit">Tambah dokter</button>
    </form>

    <a href="/doctor">Kembali</a>

</body>
</html>