# AvFinal

1 - clone  -configura chrome como navegador padrão <br>
2 - git do VSCODE  clonar github <br>
3 - clonar do github<br>
4 - instalar o composer.phar comando em https://getcomposer.org/download/ <br>
php composer.phar install <br>
php artisan serv e<br>

# Vamos usar a tabela produto como exemplo

# Criar BD 

php artisan make:model -mrc Nome              - Cria o Model, Controller, Migration      <br>

# Configurar o Model

Na raiz do projeto encontre a pasta app/ model, e em seguida o arquivo Produto.php <br>
Informar no Model quais campos podem ser preenchidos/editados por nosso código <br>

protected $fillable = ['nome', 'fornecedor']; <br>
# Criar formulario Blade (resources/views ) <br>

 criar.blade.php.<br>

html 5.0

form action="{{route('cadastrar_produto')"<br>
@crfs	<br>
label	<br>
input	<br>
button	<br>

#  app\Http\Controllers - ProdutosController.php

* use model produto
  
*função create<br>
return view ('layouts.criar')

*função store<br>
dd($request->all());   	         testar dd  -debug,die

Produto::create([
'nome'-> $ request->nome,
...]);
return "Produto criado";


# Criar Rota
 Route:: get('layouts/criar', [ProdutoController::class, 'criar']);  <br>
Route:: post('layouts/criar', [ProdutoController::class, 'store'])-> name('cadastrar_produto); <br>




# LEITURA DE UM REGISTRO

# Criar Rota
 Route:: get('layouts/ver/{id}', [ProdutoController::class, 'show']);  <br>


 #  app\Http\Controllers - ProdutosController.php

 *funcao show ($id)

$produto= Produto::findOrFail($id); <br>
return view('layouts.show, ['produto =>$produto]);<br>


#BLADE

mostrar.blade.php
label <br>
input type text name value="{{$produto->nome}}"



# ATUALIZANDO os dados

#ROTA
Route:: get('layouts/editar/{id}', [ProdutoController::class, 'edit']);  <br>
Route:: post('layouts/editar/{id}', [ProdutoController::class, 'update']) ->name(alterar_produto);  <br>

# Controller
funcao edit ($id)
$produto= Produto::findOrFail($id); <br>

return view('layouts.editar',['produto'=>$produto]);


# BLADE
 editar.blade.php
 form  {{route ('alterar_produto, ['id'=>$produto->id])}}


# Controller
funcao update ($request, $id)

$produto= Produto::findOrFail($id); <br>

Produto::update([
'nome'-> $ request->nome,
...]);

return "Produto atualizado";<br>



# Deletar um registro
#ROTA
Route:: get('layouts/excluir/{id}', [ProdutoController::class, 'delete']);  <br>
Route:: post('layouts/excluir/{id}', [ProdutoController::class, 'destroy'])->name('excluir_produto');  <br>


# Controller

funcao delete($id)
$produto= Produto::findOrFail($id); <br>
return view('layouts.deletar',['produto'=>$produto]);


# BLADE
 deletar.blade.php
 
 form  {{route ('excluir_produto, ['id'=>$produto->id])}}
 @csrf
 label . tem certeza?
 input value="{{produto->nome}}"
 button  sim

