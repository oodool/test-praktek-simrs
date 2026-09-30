<!DOCTYPE html>
<html>
<head>
    <title>Tambahkan Riwayat Temu</title>
</head>
<body>

    <h1>Tambahkan Riwayat temu</h1>

    <form action="/medical_record" method="POST">
        @csrf

        <div>
            <label>Tanggal</label>
            <input type="date" name="date">
        </div>

        <div>
            <label>Doctor</label>
            <input type="text" name="doctor">
        </div>

        <div>
            <label>Patient</label>
            <input type="text" name="patient">
        </div>

        <div>
            <label>Diagnosis</label>
            <input type="text" name="diagnosis">
        </div>

        <div>
            <label>Pengobatan</label>
            <select name="treatment">
                <option value="Rawat inap">Rawat inap</option>
                <option value="Rawat jalan">Rawat jalan</option>
            </select>
        </div>

        <div>
            <label>Catatan</label>
            <input type="text" name="notes">
        </div>

        <button type="submit">Tambah riwayat temu</button>
    </form>

    <a href="/medical_record">Kembali</a>

</body>
</html>