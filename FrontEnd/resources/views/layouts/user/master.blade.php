<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>{{ config('app.name') . ' : ' }}@yield('title')</title>  
  @include('layouts.user.head')
 </head>
<body class="bg-soft-primary">
       <div class="content-wrapper">
              @include('layouts.user.header')
              @yield('content')
       </div>
       <div class="progress-wrap">
              <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -2 102 102" >
                <path d="M50,2 a49,49 0 0,1 0,98 a49,49 0 0"/>
              </svg>
            </div>
            <img src="../../assets/img/icons/lineal/scroll.svg" class="svg-inject icon-svg icon-svg-sm text-primary" alt="sadasdas" />
       @include('layouts.user.js')
</body>
</html>
