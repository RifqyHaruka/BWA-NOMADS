<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.style-user')
   <title>@yield('Title')</title>
</head>

<body>
    @include('includes.navbar-user')

@yield('content')

@include('includes.footer')
@stack('prepends')
@include('includes.script-user')
@stack('addons')
