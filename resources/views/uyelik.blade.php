<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Kayıt Formu</title>
</head>
<body>
    @if($errors->any())
        <ul>
        @foreach($errors->all() as $hatalar)
        <li>{{$hatalar}}</li>
        @endforeach
        </ul>
    @endif()
    <form action="{{route('uyekayit')}}" method="post">
        <!-- Laravelde saldırılara karşı önlem amaçlı bir tokın oluşturmak gerekiyor tüm form işlemlerinde token zorunludur ve laravel bunu yazılan @csrf ile kendisi oluşturuyor. -->
        @csrf

        <label>Ad Soyad</label><br>
        <input type="text" name="adsoyad"><br>
        <label>Telefon</label><br>
        <input type="text" name="telefon"><br>
        <label>E-Mail</label><br>
        <input type="text" name="mail"><br>
        <br>
        <input type="submit" name="ilet" value="Gönder">

    </form>
</body>
</html>