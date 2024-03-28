<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Gerar QrCode</title>
    <style>
        * {
            padding:0;
            margin:0;
            vertical-align:baseline;
            list-style:none;
            border:0;
        }
        
        body{
            background-color: #fcf6e0;
        }
        header{
            margin-bottom: 10px;
        }
        
        header h1{
            text-align: center;
        }

        header h2{
            text-align: center;
            font-size: 20px;
        }

        nav{
            display: flex;
        }

        nav a{
            margin: auto;
        }

        main{
            display: flex;
            padding-top: 50px;
        }

        form{
            margin: auto;
            border: 1px solid gray;
            background-color: #c1ac94;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        form label{
            display: block;
        }

        form input{
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>GERAR QRCODE</h1>
        <h2>Gerador de QrCode para redirecionamento de links ou mostrar mensagens</h2>
    </header>
    <nav>
        <a href="{{ route('home') }}"><button class="btn btn-warning" style="margin: auto;">Página Principal</button></a>
    </nav>
    <main>
        <form action="{{ route('gerarQrCode') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <label for="link">Link ou mensagem:
                <input type="text" name="link" id="link">
            </label>
            <br>
            <input type="submit" class="btn btn-success btn-sm" style="text-align: center;" onclick="validar()" value="GERAR QRCODE" id="Salvar" name="Salvar" /> 
        </form>
    </main>
</body>
</html>