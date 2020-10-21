<?php
    require_once '../classe/Usuario.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="./style_cad.css">
        <meta charset="UTF-8">
        <title>Cadastro</title>
    </head>

    <body>
        
        <form class="dados-cad" method="POST" action="">
            <div class="conjunto">
                <div id="titulo-cad">
                    <h2>BEM VINDO AO SISTEMA DE CADASTRO</h2>
                    <h3>Preencha os dados a seguir</h3>
                </div>
    
                <div class="inputs">
                    <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
                    <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
                    <input type="email" name="email" placeholder="Usuário(email)", maxlength="40">
                    <input type="password" name="senha" placeholder="Senha" maxlength="15">
                    <input type="password" name="confirma" placeholder="Confirmação de senha" maxlength="15">
                    <button type="submit" id="button">CADASTRAR</button>
                </div>
            </div>
        </form>

        <?php
            //verificar se a pessoa clicou no botao
            if(isset($_POST['nome']))
            {
                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                $confirmarSenha = addslashes($_POST['confirma']);
                //verificar se nao esta vazio
                if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha))
                {
                    $u->conectar("projeto_login", "localhost", "root", "gah20010630");
                    if ($u->msgErro == "")//se esta tudo ok
                    {
                        if ($senha == $confirmarSenha)
                        {
                            if($u->cadastrar($nome,$telefone,$email,$senha))
                            {
                                echo "Cadastrado com sucesso!";
                            }else
                            {
                                echo "Email ja cadastrado!";
                            }
                        }else
                        {
                            echo "Senha e confirmar senha não correspondem";
                        }

                    }else
                    {
                        echo "Erro: ".$u->msgErro;
                    }
                }else
                {
                    echo "Preencha todos os campos!";
                }
            }
        ?>
    </body>
</html>