<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="text-center mt-3">
                    <h1>Hello World! Primo Esercizio Laravel!</h1>
                    <h2 class="my-3 text-success">Pagina BONUS</h2>
                    <h3 class="my-3 text-danger">Se visualizzi questa pagina vuol dire che il collegamento <br> fra la home e questa pagina è avvenuto con successo!</h3>
                    <a class="mt-4" href="/">Ritorna alla Pagina HOME</a>
                </div>
            </div>
        </div>
    </body>
</html>
