
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
</head>
<body>
<div id="app">
    <!-- <vue></vue> -->
    <axios></axios>
    <!-- <router-link to="/">home</router-link>
    <router-link to="/Users">users</router-link>
    <router-link to="/Btn">Btn</router-link> -->
</div>
<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>