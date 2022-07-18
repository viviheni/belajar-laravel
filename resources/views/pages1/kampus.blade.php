<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>
            Data dosen
        </legend>
        @foreach ($kampus as $data)
        @php
            $total = 0;
        @endphp
            <br>Nama Dosen: {{ $data['nama'] }} </br>
            <br>Mata Kuliah : {{ $data['mata_kuliah'] }} </br>
            <br> Daftar Mahasiswa  : </br>
        @foreach ($data['mahasiswa'] as $siswa)
        @if($siswa['nilai'] >= 90 && $siswa['nilai'] <= 100)
            <br>Grade A 
            @elseif($siswa['nilai'] >= 80 && $siswa['nilai'] <= 89)
            <br>Grade B
            @elseif($siswa['nilai'] >= 70 && $siswa['nilai'] <= 79)
            <br>Grade C
            @elseif($siswa['nilai'] >= 50 && $siswa['nilai'] <= 69)
            <br>Grade D
            @elseif($siswa['nilai'] >= 0 && $siswa['nilai'] <= 49)
            <br>Grade E
            @endif
            <li> {{ $siswa['nama'] }}
                Nilai Skripsi : {{ $siswa['nilai'] }}</li> 
            <hr> 
        @php $total += $siswa['nilai'] @endphp
        @endforeach
        @php $rata_rata = $total / count($data['mahasiswa']) 
        @endphp
            </br>
            <br>
            Rata Rata Nilai Skripsi Mahasiswa Bimbingan <b>{{ $data['nama'] }}</b> :
            {{ $rata_rata }}
            </br>
            <b>
            <hr style="border: 1px dashed black"></b>
        @endforeach
            

    </fieldset>
</body>
</html>