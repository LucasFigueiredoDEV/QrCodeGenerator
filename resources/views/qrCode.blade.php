<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>QrCode</title>
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
        header h1{
            text-align: center;
        }

        nav{
            display: flex;
            margin-bottom: 20px;
        }

        nav a{
            margin: auto;
        }

        main{
            display: flex;
        }

        .content{
            margin: auto;
        }
    </style>
</head>
<body>
    @if ($errors->any())
		 <div class="alert alert-success">
		  <ul>
		    @foreach ($errors->all() as $error)
		      <li>{{ $error }}</li>
			@endforeach
		  </ul>
		 </div>
		@endif
    <header>
        <h1>QrCode</h1>
    </header>
    <nav>
        <a href="{{ route('gerarQrCode') }}"><button class="btn btn-info">Gerar novo QrCode</button></a>
    </nav>
    <main>
        <div class="content"><?php echo $qrCodeGerado ?></div>
    </main>
</body>
</html>