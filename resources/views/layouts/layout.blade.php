<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="antialiased">
 <head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <link href="https://andreagiuseppe.com" rel="canonical" />

  <!-- Metadata -->
  @stack( 'metadata' )

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset( 'css/app.css' ) }}" />
  @stack( 'stylesheets' )

  <!-- Javascript -->
  <script src="{{ asset( 'js/app.js' ) }}" defer></script>
  @stack( 'scripts' )

 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136952063-1"></script>
 <script>
  window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-136952063-1');
 </script>

  <title>{{ config( 'app.name' ) }}{{ isset( $title ) ? " | {$title}" : '' }}</title>
 </head>
 <body class="leading-normal">
  <div id="agp">
   @yield( 'body' )

  </div>
 </body>
</html>
