<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    @foreach ($produtos as $p )
        Nome {{ $p->nome }} 
        Categoria {{ $p->categoria }} 
        Preço{{ $p->preco }} 
    @endforeach
    
    </pre>
</body>
</html>