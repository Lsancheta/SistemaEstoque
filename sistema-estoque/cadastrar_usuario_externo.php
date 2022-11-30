<html>
    <?php include_once("util/head.php"); ?>
    <title>Cadastrar Usuario</title>

    <body>
        <div class="container" style="padding:20px; max-width:800px;">
            <form action="inserir_usuario_externo.php" method="POST">
                <h4 style="padding:0 0 20px 0; margin-bottom:35px;" class="border-bottom">Cadastro de Usuário</h4>
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o Seu nome" autocomplete="off"/>
                </div>
                <div class="form-group">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" placeholder="Digite o seu sobrenome" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="DIgite o seu email para acessar o sistema" />
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite uma senha"/>
                </div>

                <div class="form-group">
                    <label for="">Repetir senha</label>
                    <input type="password" class="form-control" id="senha2" name="senha2"
                    placeholder="Digite sua senha novamente" oninput="validaSenha(this)" />
                    <small style="display:none"id="msg-erro">A senha precisa ser igual a senha digita acima</small>
                </div>
                <button class="btn btn-sucess btn-sm btn-block">Cadastrar</button>
            </form>
        </div>

        <?php include_once("util/footer.php");?>

        <script>
            function validaSenha(input){
                inf (input.value != document.getElementById('senha').value){
                    input.setCustomValidity('Repita a senha corretamente!');
                    document.getElementById('msg-erro').style.display="block";
                }else{
                    input.setCustomValidity('');
                    document.getElementById('msg-erro').style.display="none";
                }
                
            }
        </script>
    </body>
</html>
