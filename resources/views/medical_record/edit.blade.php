<!DOCTYPE html>
<html>
<head>
    <title>Edit Riwayat temu</title>
</head>
<body>

    <h1>Edit data riwayat temu</h1>

    <form action="/medical_record/{{ $medical_record->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Tanggal</label>
            <input
                type="date"
                name="date"
                value="{{ $medical_record->date }}"
            >
        </div>

        <div>
            <label>Dokter</label>
            <input
                type="text"
                name="doctor"
                value="{{ $medical_record->doctor }}"
            >
        </div>

        <div>
            <label>Pasien</label>
            <input
                type="text"
                name="patient"
                value="{{ $medical_record->patient }}"
            >
        </div>

        <div>
            <label>Diagnosis</label>
            <input
                type="text"
                name="diagnosis"
                value="{{ $medical_record->diagnosis }}"
            >
        </div>

        <div>
            <label>Pengobatan</label>
            <select name="treatment">
                <option value="Rawat inap" {{ $medical_record->treatment == 'Rawat inap' ? 'selected' : '' }}>
                    Rawat inap
                </option>

                <option value="Rawat jalan" {{ $medical_record->treatment == 'Rawat jalan' ? 'selected' : '' }}>
                    Rawat jalan
                </option>
            </select>
        </div>

        <div>
            <label>Catatan</label>
            <input
                type="text"
                name="notes"
                value= "{{ $medical_record->notes }}"
            >
        </div>

        <button type="submit">Update data</button>
    </form>

    <a href="/medical_record">Kembali</a>

</body>
</html>