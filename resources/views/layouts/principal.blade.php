<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>
<body>
    <div class="row">
        <div class="col1">
            <ul>
                <li><a class="active" href="{{route ('clientes.index')}}"></a>Clientes</li>
                <li><a href=""></a>Produtos</li>
                <li><a href=""></a>Departamentos</li>
            </ul>
        </div>
        <div class="col2">
                  

        </div>
    </div>
    @yield('conteudo')
    
</body>
</html>