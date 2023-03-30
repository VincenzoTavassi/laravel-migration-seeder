<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="my-5 text-center">Lista treni</h1>
        <div class="row row-cols-4">
            @include('partials._train-table')
        </div>
    </div>
</body>
</html>