<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<h1>Seja bem vindo ao nosso site, por favor, cadastre-se abaixo.</h1>

<div class="cadastro">
<form action="<?=route_to('cadastrar')?>" method="post" id='formCadastro'>
    <div id="mensagens">OI</div>
        <div class="email">
            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="senha">Digite sua senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button type='submit'>Cadastrar</button>
        </form>
</div>
    
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script>

$("#formCadastro").submit(function(e){
    e.preventDefault();
    $.ajax({
            type:'POST',
            url:$(this).attr("action"),
            data: $(this).serialize(),
            success: function(response){
                if(response.status === 'success'){
                    $('#result').html(' <p>${response.message}</p>');
                    console.log(response);

                    window.location.href = response.route
                };
            },
            error: function(){
                console.log("erro");
            }
        })
})

</script>

</html>