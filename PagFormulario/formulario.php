<?php
    if (isset($_POST['submit'])) {
        include_once('config.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sugestoes = $_POST['sugestoese'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];

        print_r("Nome: " . $nome);
        print_r("Email: " . $email);
        print_r("Telefone: " . $telefone);
        print_r("Sugestões: " . $sugestoes);
        print_r("Gênero: " . $genero);
        print_r("Data de Nascimento: " . $data_nascimento);

        // Executar a consulta apenas se todos os campos estiverem definidos
        if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($sugestoes) && !empty($genero) && !empty($data_nascimento)) {
            $result = mysqli_query($con, "INSERT INTO formulario(nome, email, telefone, sugestoes, genero, data_nascimento) VALUES ('$nome', '$email', '$telefone', '$sugestoes', '$genero', '$data_nascimento')");
            
            if ($result) {
                // Limpar os valores dos campos do formulário
                $nome = '';
                $email = '';
                $telefone = '';
                $sugestoes = '';
                $genero = '';
                $data_nascimento = '';
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagStyle/style-formulario.css">
    <title>Formulário</title>
</head>
<body>
    <section>

        <header>
            <img src="../IMG/Logo_color_recortado.png" alt="logo" class="logo">
            <h1>CodeCyclopedia</h1>
        
            <input type="checkbox" id="checkbox" class="checkbox">
            <label for="checkbox" class="checkbox-img">
                <img src="../IMG/pngegg.png" alt="bnt-img">
            </label>
        
            <nav class="navegation">
                <ul>
                    <li><a href="../index.html">HOME</a></li>
                    <li><a href="">Indioma</a></li>
                    <li><a href="">Conheça-nos</a></li>
                    <li><a href="">FeedBack</a></li>
                </ul>
            </nav>
        </header>  

        <div class="box">
            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend><b>Fórmulário</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required autocomplete="off">
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="email" id="email" class="inputUser" required autocomplete="off">
                        <label for="email" class="labelInput">Email</label>
                    </div>

                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="telefone" id="telefone" class="inputUser" required autocomplete="off">
                        <label for="telefone" class="labelInput">Principais desafios</label>
                    </div>

                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="sugestoese" id="sugestoese" class="inputUser" required autocomplete="off">
                        <label for="sugestoese" class="labelInput">Sugestões adicionais</label>
                    </div>
                    <br>

                    <p>Nivel de experiência:</p>
                    <input type="radio" id="iniciante" name="genero" value="iniciante" required autocomplete="off">
                    <label for="iniciante">Iniciante</label>
                    <br>
                    <input type="radio" id="intermeidario" name="genero" value="Intermediário" required autocomplete="off">
                    <label for="intermediário">Intermediário</label>
                    <br>
                    <input type="radio" id="avançado" name="genero" value="avançado" required autocomplete="off">
                    <label for="avançado">Avançado</label>
                    <br>                    
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required autocomplete="off">

                    <br><br>
                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>