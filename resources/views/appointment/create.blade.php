<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan Janji temu</title>
</head>
<body>

    <h1>Tambahkan Janji temu</h1>

    <form action="/appointment" method="POST">
        @csrf

        <div>
            <label>Tanggal</label>
            <input type="date" name="date">
        </div>

        <div>
            <label>Waktu</label>
            <input type="time" name="time">
        </div>

        <div>
            <label>Dokter</label>
            <input type="text" name="doctor">
        </div>

        <div>
            <label>Pasien</label>
            <input type="text" name="patient">
        </div>

        <div>
            <label>Status</label>
            <select name="status">
                <option value="Sedang berjalan">Sedang berjalan</option>
                <option value="Selesai">Selesai</option>
                <option value="Dibatalkan">Dibatalkan</option>
            </select>
        </div>

        <button type="submit">Tambah janji temu</button>
    </form>

    <a href="/appointment">Kembali</a>

</body>
</html>