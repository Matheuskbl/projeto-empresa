<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Grid Bootstrap</title>
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Teste do Sistema de Grids</h1>
        
        <div class="row">
            <div class="col-md-4">
                <div class="p-4 bg-primary text-white text-center rounded">
                    Coluna Esquerda
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-success text-white text-center rounded">
                    Coluna Meio
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-danger text-white text-center rounded">
                    Coluna Direita
                </div>
            </div>
        </div>
    </div>

</body>
</html>