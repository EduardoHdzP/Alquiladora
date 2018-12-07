<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <title>Titulo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/estilosMenu.css')}}">
    <link rel="stylesheet" href="{{ asset('libs/SweetAlert2/css/sweetalert2.css')}}">
    <script rel="stylesheet" href="{{ asset('libs/chartist/chartist.min.css')}}"></script>


    {{-- <script type="text/javascript" charset="utf-8" async defer>
         function mostrarModalRegistro(){
          $("#modalRegistro").modal("show");
         }
    </script> --}}

    <style type="text/css">
      body{
          background: #FFFFFF;
      }
      .login{
        background: #78969F;
      }
      label{
        /*font-size: 25px;*/
        /*font-family: sans-serif;*/
      }
      h2{
        color: #000;
      }

      .capaTitulo{
        background: black;
        width: 100%;
        max-width: 1380px;
        color: #fff;
        font-weight: bold;
      }
      .imgCards{
        width: 100%;
        height: 150px;
        align-self: center;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">