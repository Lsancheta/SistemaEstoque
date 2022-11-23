<!DOCTYPE html>
<html>
    <?php include_once('util/head.php'); ?>
    <title>Login</title>

    <style>
        .tamanho-largura{
            max-width: 500px;
            height:auto;
            left:50%;
            margin: -200px 0 0 -210px;
            padding: 40px;
            position: absolute;
            top:50%;
            border:2px solid #f3f3f3;
            border-radius: 15px;
            -webkit-box-shadow: 10px 10px 47px -3px rgba(161. 161, 161, 1);
            -moz-box-shadow: 10px 10px 47px -3px rgba(161, 161, 161, 1);
            box-shadow: 10px 10px 47px -3px rgba(161, 161, 161, 1);
        }
    </style>

    <body>
        <div class="container tamanho-largura">
            <div class="d-flex justify-content-center">
                <img src="img/cadeado.png" width="125px" height="125px" alt="">
            </div>
            <form action="logar.php" method="POST">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="usuario" placeholder="Digite o email do usuario" autocomplete="off"/>
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    input.brnbrn
                </div>

            </form>
        </div>
    </body>
</html>