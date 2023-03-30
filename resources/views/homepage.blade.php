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
    <main>
    <div class="container my-3">
        <h2 class="my-5 text-center">Lista treni di oggi {{$today}}</h2>
            @include('partials._train-table', ['trains' => $today_trains])
        </div>
    </div>
    <div class="container my-3">
        <h2 class="my-5 text-center">Lista altri treni</h2>
            @include('partials._train-table', ['trains' => $other_trains])
        </div>
    </div>
    </main>
</body>
</html>