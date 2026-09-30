<!DOCTYPE html>
<html>
<head>
    <title>Edit Dokter</title>
</head>
<body>

    <h1>Edit data dokter</h1>

    <form action="/doctor/{{ $doctor->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nama</label>
            <input
                type="text"
                name="name"
                value="{{ $doctor->name }}"
            >
        </div>

        <div>
            <label>Spesialis</label>
            <input
                type="text"
                name="specialization"
                value="{{ $doctor->specialization }}"
            >
        </div>

        <div>
            <label>Nomor telepon</label>
            <input
                type="number"
                name="phone_number"
                value= "{{ $doctor->phone_number }}"
            >
        </div>

        <div>
            <label>Alamat</label>
            <input
                type="text"
                name="address"
                value= "{{ $doctor->address }}"
            >
        </div>

        <div>
            <label>Tanggal bergabung</label>
            <input
                type="date"
                name="joined_date"
                value= "{{ $doctor->joined_date }}"
            >
        </div>

        <button type="submit">Update data</button>
    </form>

    <a href="/doctors">Kembali</a>

</body>
</html>