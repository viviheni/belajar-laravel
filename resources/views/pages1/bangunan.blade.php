<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Toko Bangunan</h4>
    Hallo pesanan anda : <b>{{$b_bangunan}}</b> 
    @if($b_bangunan == 'pasir urug')
    <br> harga {{$b_bangunan}} Rp.50000
    @elseif ($b_bangunan == 'batako besar')
    <br> harga {{$b_bangunan}} Rp.30000 
    @elseif($b_bangunan == 'bata merah')
    <br> harga {{$b_bangunan}} Rp.40000 
    @elseif($b_bangunan == 'batu apung')
    <br> harga {{$b_bangunan}} Rp.65000
    
    @else
    <br>
        list harga tidak ada
    @endif
    <br>
    <br>
    <hr>
    Masukan Pesanan : <strong>{{$material1}}</strong>

    @if($material1 == 'pasir urug')
    <br>Harga {{$material1}} Rp.50000
    @elseif($material1 == 'batako besar')
    <br>Harga {{$material1}} Rp.30000
    @elseif($material1 == 'bata merah')
    <br>Harga {{$material1}} Rp.40000
    @elseif($material1 == 'batu apung')
    <br>Harga {{$material1}} Rp.65000
    @else($material1)
    <br>Harga : List harga tidak ada
    @endif
</body>
</html>