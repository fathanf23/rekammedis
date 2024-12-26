<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Pasien</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Laporan Data Pasien</h2>
    <table>
        <thead>
            <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pasien as $p)
                <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->nm_pasien}}</td>
                    <td>{{$p->no_tlp}}</td>
                    <td>{{$p->alamat}}</td>
                    <td>{{$p->tgl_lahir}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>