<?php
    if(isset($_POST['submit'])) {
        
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend><br/>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputuser" placeholder="Nome Completo" required>
                    <label for="nome" class="labelinput"></label>
                </div>
                    <br><br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputuser" placeholder="Email" required>
                    <label for="email" class="labelinput"></label>
                    <br><br>
                </div>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputuser" placeholder="Telefone" required>
                    <label for="telefone" class="labelinput"></label>
                </div>
                <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputuser" placeholder="Cidade" required>
                    <label for="cidade" class="labelinput"></label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputuser" placeholder="Estado" required>
                    <label for="estado" class="labelinput"></label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputuser" placeholder="Endereço" required>
                    <label for="endereco" class="labelinput"></label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>