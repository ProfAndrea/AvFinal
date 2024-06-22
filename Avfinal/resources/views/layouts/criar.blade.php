<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('cadastrar_produto')}}"method='POST'>
 @csrf
<label for="">nome</label>
<input type="text" name="nome" id="nome">
<label for="">fornecedor</label>
<input type="text" name="fornecedor" id="fornecedor">
<button>Cadastrar</button>

</form>    



</body>
</html>