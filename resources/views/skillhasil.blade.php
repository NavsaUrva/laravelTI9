<!DOCTYPE html>
<html>

<head>
    <title>Hasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Hasil Formulir</h1>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Lokasi</th>
                    <th>Jenis Kelamin</th>
                    <th>Skill</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['nama'] }}</td>
                    <td>{{ $data['email'] }}</td>
                    <td>{{ $data['lokasi'] }}</td>
                    <td>{{ $data['jenis_kelamin'] }}</td>
                    <td>
                        <ul>
                            @foreach ($data["skill"] as $sk)
                                <li>{{ $sk }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>