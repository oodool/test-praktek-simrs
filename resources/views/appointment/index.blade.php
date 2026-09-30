<!DOCTYPE html>
<html lang="en">
    <title>Janji temu Main</title>
    <body id="page-top">
    <h1>Tabel Janji Temu</h1>
    <a href="/appointment/tambah">Tambah</a>
    <table border="1" cellpadding="8" style="margin: 20px;">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Dokter</th>
                <th>Pasien</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->date }}</td>
                    <td>{{ $appointment->time }}</td>
                    <td>{{ $appointment->doctor }}</td>
                    <td>{{ $appointment->patient }}</td>
                    <td>{{ $appointment->status }}</td>
                    <td>
                        @if(session('role') === 'admin')
                            <a href="{{ route('appointment.edit', $appointment) }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('appointment.destroy', $appointment) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/doctor">Dokter</a>
    <a href="/patient">Pasien</a>
    <a href="/appointment">Janji temu</a>
    <a href="/medicine">Obat</a>
    <a href="/medical_record">Riwayat temu</a>

    </body>
</html>
