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
       <legend>Jadwal Tayang Stasiun Televisi</legend>
       @foreach ($tv as $data)

           Nama Stasiun TV : {{$data['stasiun']}} <br>
           Jam Tayang Program Acara : {{$data['Jam_tayang']}} <br>
           Program Acara :  {{$data['Siaran']}} <br>
           Tanggal : {{$data['tanggal']}} <br>

           <hr>
           @endforeach
    </fieldset>
</body>
</html>