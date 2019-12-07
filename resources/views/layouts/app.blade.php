<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion Ressources Humaines</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Font titre -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}"><link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  <!-- Header page -->
    <div class="container header">
        <div class="logo"><img class="img" src="{{asset('images/logogestion.png')}}"><b>Tyramide_Tech</b></div>
        <div class="headerTitre"></div>
        <div class="logo"><img class="img" src="{{asset('images/avatar2.png')}}"><b>Connexion</b></div>
    </div>
<!-- La parie include des pages -->
<div class="container">
    @yield("content")
</div>

<!-- Footer Page -->
<footer class="container text-center">
  <p>Footer Text</p>
</footer>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
