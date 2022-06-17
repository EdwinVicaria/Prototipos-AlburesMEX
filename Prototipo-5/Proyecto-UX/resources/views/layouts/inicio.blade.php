<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon"
        href="img/icono.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@700&display=swap" rel="stylesheet">


    <!-- TITULO PRINCIPAL -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet">


    <!-- TEXTOALL -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@500&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <!-- SCRIPT DEL IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Alpine v2 -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @livewireStyles
</head>
<body>
@yield ('contenido')

  @livewireScripts

@yield ('js')

</body>
</html>