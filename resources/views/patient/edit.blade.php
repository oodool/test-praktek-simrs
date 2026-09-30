<!DOCTYPE html>
<html>
<head>
    <title>Edit pasien</title>
</head>
<body>

    <h1>Edit data pasien</h1>

    <form action="/patient/{{ $patient->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama</label>
            <input
                type="text"
                name="name"
                value="{{ $patient->name }}"
            >
        </div>

        <div>
            <label>Tanggal lahir</label>
            <input
                type="date"
                name="date_of_birth"
                value="{{ $patient->date_of_birth }}"
            >
        </div>

        <div>
            <label>Nomor telepon</label>
            <input
                type="number"
                name="phone_number"
                value= "{{ $patient->phone_number }}"
            >
        </div>

        <div>
            <label>Alamat</label>
            <input
                type="text"
                name="address"
                value= "{{ $patient->address }}"
            >
        </div>

        <div>
            <label>Jenis kelamin</label>
            <select name="gender">
                <option value="Laki-laki" {{ $patient->gender == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>

                <option value="Perempuan" {{ $patient->gender == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>
        </div>

        <button type="submit">Update data</button>
    </form>

    <a href="/patient">Kembali</a>

</body>
</html>