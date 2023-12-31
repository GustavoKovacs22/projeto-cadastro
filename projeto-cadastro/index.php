<?php
include('conexao.php');

if  (isset($_POST['submit'])){
    if(strlen($_POST['Email']) == 0){
        echo "Email inválido";
    } elseif(strlen($_POST[''] == 0)){
        echo "Senha inválida";
    } else {
        $Nome = $mysqli -> real_escape_string($_POST['Nome']);
        $Sobrenome = $mysqli -> real_escape_string($_POST['Sobrenome']);
        $Email = $mysqli -> real_escape_string($_POST['Email']);
        $Celular = $mysqli -> real_escape_string($_POST['Celular']);
        $Senha = $mysqli -> real_escape_string($_POST['Senha']);
        $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome, sobrenome, email, celular, senha) VALUES ('$Nome', '$Sobrenome', '$Email', '$Celular', '$Senha')");
    }
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main>
        <section id="cadastro">
            <div id="imagem">
                <img id="maior" src="imagens/undraw_mobile_analytics_72sr.svg" alt="#">
                <img id="menor" src="imagens/undraw_hooked_re_vl59.svg" alt="#">
            </div>

            <div id="formulario">
                <h1>Cadastre-se</h1>
                <form action="index.php" method="post">
                    <div class="inputs">
                        <div class="mb-3">
                            <label for="exampleInputText1" class="form-label">Primeiro Nome</label>
                            <input name="Nome" type="text" class="form-control" id="exampleInputText1" aria-describedby="Primeiro-nome"
                                required placeholder="Digite seu primeiro nome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputText2" class="form-label">Sobrenome</label>
                            <input name="Sobrenome" type="text" class="form-control" id="exampleInputText2" aria-describedby="Sobrenome"
                                required placeholder="Digite seu sobrenome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input name="Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="E-mail"
                                required placeholder="Digite seu e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputTel" class="form-label">Celular</label>
                            <input name="Celular" type="tel" class="form-control" id="exampleInputTel" required
                                placeholder="(xx) xxxx-xxxx">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input name="Senha" type="password" class="form-control" id="exampleInputPassword1" required
                                placeholder="Digite sua senha">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Confirme sua senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" required
                                placeholder="Digite sua senha novamente">
                        </div>
                    </div>

                    <p>Gênero</p>
                    <div id="sexo">

                        <div>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Feminino</label>

                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">Masculino</label>

                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">Outros</label>
                            <span>
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">Prefiro não informar</label>
                            </span>
                        </div>
                    </div>



                    <div class="botao">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        <button type="reset" class="btn btn-primary">Apagar</button>
                    </div>
            </div>

            </form>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>