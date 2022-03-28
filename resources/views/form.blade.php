<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <pre>
        <form action="{{ route('produtos_novo') }}" method="post">
                    @csrf
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" ><br>

                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" ><br>

                    <label for="preco">Preço (R$)</label>
                    <input type="text" name="preco" id="preco" ><br>

                    <input type="submit" value="Enviar" >
                </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     </pre>
    </body>
</html>