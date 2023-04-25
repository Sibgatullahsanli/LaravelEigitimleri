<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Örnek Form Sayfası</title>
</head>
<body>
    <form action="{{route('sonuc')}}" method="post">
        <!-- Laravelde saldırılara karşı önlem amaçlı bir tokın oluşturmak gerekiyor tüm form işlemlerinde token zorunludur ve laravel bunu yazılan @csrf ile kendisi oluşturuyor. -->
        @csrf

        <textarea name="metin" style="width: 300px; height: 200px;"></textarea><br>
        <input type="submit" name="ilet" value="Gönder">

    </form>
</body>
</html>