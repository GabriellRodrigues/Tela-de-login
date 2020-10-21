<?php
    require_once './classe/Usuario.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <link rel="stylesheet" type="text/css" href="./style.css"/>
        <meta charset="UTF-8">
        <title>Controle de acesso</title>
    </head>

    <body>

        <form class="form" method="POST" action="" >
            <div id="card">
                <div id="card-topo">
                    <img src="./img/avatar-login.png" alt="" id="img-login">
                    <h2>LOGIN</h2>
                    <p>Digite os dados de usuário</p>
                </div>

                <div id="card-inputs">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Digite seu email" maxlength="40" required>

                    <label>Senha:</label>
                    <input type="password" name="senha" placeholder="Digite sua senha" maxlength="15" required>

                    <label><input type="checkbox"> Lembre-me</label>

                    <button type="submit" id="botao-acessar">ACESSAR</button>
                    <p>Ainda não possui cadastro? <a href="./Arquivos/cadastrar.php" id="link-cad">Cadastrar</a></p>
                </div>
            </div>
        </form>
        
        <?php
            if(isset($_POST['email']))
                {
                    $email = addslashes($_POST['email']);
                    $senha = addslashes($_POST['senha']);

                    $u->conectar("projeto_login", "localhost", "root", "gah20010630");
                    if ($u->msgErro == "")
                    {
                        if ($u->logar($email, $senha))
                        {
                            header('location: AreaPrivada.php');
                        }else
                        {
                            ?>
                            <div>
                                Email e/ou senha estão incorretos!
                            </div>
                            <?php
                        }
                    }else 
                    {
                        ?>
                        <div>
                            <?php echo "Erro: ".$u->msgErro; ?>
                        </div>
                        <?php
                        
                    }
                }
        ?>


    </body>


</html>
