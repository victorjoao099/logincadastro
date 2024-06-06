<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<div class="msgUser">
    <h1>Seja bem vindo ao nosso site, por favor, entre.</h1>
</div>


<div class="loginForm">
    <form action="<?=route_to('entrar')?>" method="POST" id="formEntrar">
        <div class="email">
            <label for="email">Digite seu email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="senha">
            <label for="senha">Digite sua senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <button type="submit">Entrar</button>
    </form>
</div>
    
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<script>

$("#formEntrar").submit(function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url:$(this).attr("action"),
        data: $(this).serialize(),
        success: function(response){
            if(response.status === 'success'){
                // $('#result').html('<p> $ {response.message} </p>'),
                // console.log(data),
                window.location.href = response.route
            };
        },
        error: function(){
            console.log('erro');
        }
    })
})


</script>
</html>