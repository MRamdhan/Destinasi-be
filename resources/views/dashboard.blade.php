<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .img{
            width: 100px;
        }
    </style>
</head>
<body>
    <nav class="nav" style="background-color: black" >
        <a class ="nav-link text-white "href="#"> Home </a>
        <a class ="nav-link text-white "href="/"> Logout </a>
    </nav>
    <div class="container mt-5">
        <a href="tambah" class="btn btn-success"> Tambah </a>
    </div>
    
    <div class="container mt-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Link</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td> <img src="img/ipul.jpg" class="img"> </td>
            <td>Anfield</td>
            <td>Anfield Rd, Anfield, Liverpool L4 0TH, Inggris Raya </td>
            <td><a href="https://www.google.com/maps/place/Anfield/@53.4308365,-2.9633863,17z/data=!3m1!4b1!4m6!3m5!1s0x487b21654b02538b:0x84576a57e21973ff!8m2!3d53.4308333!4d-2.9608114!16zL20vMDE4N3py?hl=id"> Lokasi </a></td>
            <td>Anfield adalah nama stadion yang terletak di kota Liverpool Inggris, yang memiliki kapasitas tempat duduk sebanyak 54,074, membuat stadion ini menjadi stadion terbesar ketujuh di Inggris</td>
            <td>
                <a href="#" class="btn btn-primary"> Detail </a>
                <a href="#" class="btn btn-danger"> Delete </a>
            </td>
        </tr>
        <tr>
            <td> 2 </td>
            <td> <img src="img/mu.jpg" class="img"> </td>
            <td>Old trafford</td>
            <td>Sir Matt Busby Way, Old Trafford, Stretford, Manchester M16 0RA, Britania Raya</td>
            <td><a href="https://www.google.com/maps/search/old+trafford/@53.4597699,-2.2952338,14z/data=!3m1!4b1?hl=id"> Lokasi </a></td>
            <td> Old Trafford adalah sebuah stadion sepak bola yang berlokasi di Old Trafford, Greater Manchester, Inggris, dan merupakan markas klub Manchester United. </td>
            <td>
                <a href="#" class="btn btn-primary"> Detail </a>
                <a href="#" class="btn btn-danger"> Delete </a>
            </td>
        </tr>
          </tbody>
        </table>
      </div>
</body>
</html>