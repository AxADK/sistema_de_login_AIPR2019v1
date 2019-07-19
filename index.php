<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
        <title>Sistema de Login AXAD Systems</title>

        <style>
            #caixaCadastro,
            #caixaRecuperarSenha,
            #alerta{
                display: none;
            }
        
        
        
        </style>

    </head>
<body class="bg-dark">
    <main class="container mt-4">
     <!-- Conteúdo Principal --> 
        <section class="row">
            <div class="col-lg-4 offset-lg-4" id="alerta">
                <div class="alert alert-success text-center">
                    <strong id="resultado">
                        Maravilhoso mundo sem o Sublime!
                    </strong>
                </div>
            </div>
        </section>
        <!-- Formulário de Login -->
        <section class="row mb-5"> 
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
                <h2 class="text-center mt-2">Entrada no sistema</h2>
                <form action="#" id="formLogin" class="p-2">
                
                    <div class="form-group">
                        <input type="text" name="nomeUsuario" 
                        id="nomeUsuario" class="form-control"
                        placeholder="Nome do usuário" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="senhaUsuario" 
                        id="senhaUsuario" class="form-control"
                        placeholder="Senha" required>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">                        
                            <input type="checkbox" name="lembrar" 
                            id="lembrar" class="custom-control-input">
                            <label for="lembrar" class="custom-control-label">
                                Lembrar de mim.
                            </label>
                            <a href="#" id="btnEsqueci" class="float-right">
                                Esqueci a senha!
                            </a>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value=":: Entrar ::"
                        name="btnEntrar" id="btnEntrar"
                        class="btn btn-primary btn-block">
                    </div>

                    <div class="form-group">
                        <p class="center">Novo usuário?
                        <a href="#" id="btnCadastrar">Cadastre-se aqui.</a>
                        </p>
                    </div>
                    
                </form>
            </div>
        </section>

       <!-- Formulário de cadastro -->
        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaCadastro">
                <h2 class="text-center">Cadastro de Usuário</h2>
                <form action="#" class="p-2" id="frmCadastro">
                   <div class="form-group">
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" 
                        placeholder="Nome Completo" required>
                   </div>

                   <div class="form-group">
                        <input type="text" name="nomeUsuário" id="nomeUsuário" class="form-control"
                        placeholder="Nome de Usuário" required>
                   </div>

                   <div class="form-group">
                        <input type="email" name="emailUsuário" id="emialUsuário" class="form-control"
                        placeholder="E-mail do Usuário" required>
                   </div>

                   <div class="form-group">
                        <input type="password" name="senhaUsuário" id="senhaUsuário" class="form-control"
                        placeholder="Digite sua senha" required>
                   </div>

                   <div class="form-group">
                   <input type="password" name="senhaConfirma" id="senhaConfirma" class="form-control"
                        placeholder="Confirme sua senha" required>
                   </div>

                   <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="concordar" id="concordar" class="custom-control-input">
                            <label for="concordar" class="custom-control-label">Eu concordo com os 
                            <a href="#">termos e condições.</a> 
                            </label>
                        </div>
                   </div>

                   <div class="form-group">
                        <input type="submit" value=":: Registrar ::" class="btn btn-primary btn-block"
                        id="btnRgistrar">
                   </div>

                   <div class="form-group">
                        <p class="text-center">Já cadastrado?
                        <a href="#" id="btnCadastrado">Entar aqui
                        </p>
                   </div>
                </form>
            </div>
        </section>

            <!-- Formulário de recuperação de senha -->
        <section class="row mb-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaRecuperarSenha">
                <h2 class="text-center">Gerar nova senha</h2>
                <form action="#" id="formSenha">
                    <div class="form-group">
                        <small class="text-muted">
                            Para gerar uma nova senha, digite seu e-mail
                            e receba as intruções.
                        </small>
                    </div>

                    <div class="form-group">
                        <input type="email" name="emailSenha" id="emailSenha" class="form-control"
                        placeholder="E-mail" required>
                    </div>   

                    <div class="form-group">
                        <input type="submit" value=":: Enviar e-mail ::" id="btnInstruções" class="btn btn-primary btn-block">
                    </div>

                    <div class="form-group float-right">
                        <a href="#" id="btnVoltar">Voltar</a>
                    </div>                
                </form>
            </div>
        </section>


    </main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    /* jQuery */
    $(function(){
        // Trocar a tela de login para recuperar senha
        $("#btnEsqueci").click(function(){
            $("#caixaLogin").hide();
            $("#caixaRecuperarSenha").show();
        });
    });

    // Voltar da tela de recuperar senha para a tela de login
    $(function(){
        // Trocar a tela de login para recuperar senha
        $("#btnVoltar").click(function(){
            $("#caixaRecuperarSenha").hide();
            $("#caixaLogin").show();
        });
    });

    // Trocar da tela login para tela de cadastro
    $(function(){
        $("#btnCadastrar").click(function(){
            $("#caixaLogin").hide();
            $("#caixaCadastro").show();
        });
    });

    // Trocar da tela cadastro para tela de login 
    $(function(){
        $("#btnCadastrado").click(function(){
            $("#caixaCadastro").hide();
            $("#caixaLogin").show();
        });
    });
</script>

</body>
</html>
