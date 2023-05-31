<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    @php
        $nama = 'Bima';
        $nilai = 69.95;
    @endphp
    
    {{-- struktur kendali if --}}
    @if ($nilai >= 60)
        @php $ket = "Lulus"; @endphp
    @else
        @php $ket = "Gagal"; @endphp
    @endif
    <h1>Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}</h1>
</body>
</html>