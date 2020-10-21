<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <link rel="stylesheet" type="text/css" href="./style.css"/>
        <meta charset="UTF-8">
        <title>Controle de acesso</title>
    </head>

    <body>
        <?php 

        ?>


        <form class="form" action="" >
            <div id="card">
                <div id="card-topo">
                    <img src="./img/avatar-login.png" alt="" id="img-login">
                    <h2>LOGIN</h2>
                    <p>Digite os dados de usuário</p>
                </div>

                <div id="card-inputs">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Digite seu email" required>

                    <label>Senha:</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>

                    <label><input type="checkbox"> Lembre-me</label>

                    <button type="submit" id="botao-acessar">ACESSAR</button>
                    <p>Ainda não possui cadastro? <a href="./Arquivos/cadastrar.php" id="link-cad">Cadastrar</a></p>
                </div>
            </div>
        </form>
        

    </body>


</html>
