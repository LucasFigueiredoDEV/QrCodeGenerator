<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Gerador de QrCode</title>
    <style>
        header{
            margin-top: 10px;
        }
        header h1{
            text-align: center;
        }

        main{
            display: flex;
            margin-top: 20px;
        }

        .content-home{
            margin: auto;
        }

        .qrCode{
            text-align: center;
            padding: 20px 0px 20px 0px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Gerador de QrCode</h1>
    </header>
    <main>
        <div class="content-home">
            <div class="qrCode"><?php echo $qrCode ?></div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-right: 10px; margin-top: 20px;">
            Como funciona o Gerador de QrCode?
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Gerador QrCode</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>O que é QrCode?</h2>
                    <p style="text-align: justify;">Código QR é um código de barras, ou barrametrico, bidimensional, que pode ser facilmente escaneado usando a maioria dos telefones celulares equipados com câmera.</p>
                    <hr>
                    <h4>Como funciona?</h2>
                    <p style="text-align: justify;"> O gerador QrCode funciona de uma forma simples. Basicamente O usuário terá que inserir um link ou texto, e após isso, deverá clicar em Gerar QrCode. Será gerado um QrCode com um link ou texto inserido.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
            </div>
            <a href="{{ route('geradorQrCode') }}"><button class="btn btn-success" style="margin-left: 10px; margin-top: 20px;">Desejo criar meu QrCode</button></a>
        </div>
    </main>
</body>
</html>