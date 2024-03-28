<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>QrCode</title>
    <style>
        header h1{
            text-align: center;
        }

        header a{
            margin-left: 20%;
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
        <a href=""><button class="btn btn-info">Gerar novo QrCode</button></a>
    </header>
    <main>
        <div class="content"><?php echo $qrCode ?></div>
    </main>
</body>
</html>