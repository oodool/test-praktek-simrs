<!DOCTYPE html>
<html>
<head>
    <title>Edit Janji temu</title>
</head>
<body>

    <h1>Edit janji temu</h1>

    <form action="/appointment/{{ $appointment->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Tanggal</label>
            <input
                type="date"
                name="date"
                value="{{ $appointment->date }}"
            >
        </div>

        <div>
            <label>Waktu</label>
            <input
                type="time"
                name="time"
                value="{{ $appointment->time }}"
            >
        </div>

        <div>
            <label>Dokter</label>
            <input
                type="text"
                name="doctor"
                value= "{{ $appointment->doctor }}"
            >
        </div>

        <div>
            <label>Pasien</label>
            <input
                type="text"
                name="patient"
                value= "{{ $appointment->patient }}"
            >
        </div>

        <div>
            <label>Status</label>
            <select name="status">
                <option value="Sedang berjalan" {{ $appointment->status == 'Sedang berjalan' ? 'selected' : '' }}>
                    Sedang berjalan
                </option>

                <option value="Selesai" {{ $appointment->status == 'Selesai' ? 'selected' : '' }}>
                    Selesai
                </option>

                <option value="Dibatalkan" {{ $appointment->status == 'Dibatalkan' ? 'selected' : '' }}>
                    Dibatalkan
                </option>
            </select>
        </div>

        <button type="submit">Update data</button>
    </form>

    <a href="/appointment">Kembali</a>

</body>
</html>