<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>PortFólio</title>
</head>
<body>
    <header class="header">
        <div class="nameTitle">
            <div class="circle"></div>
            <div class="title">Anderson da Silva</div>
            <div class="work">Desenvolvedor Web</div>
        </div>
        <div class="navBar">
            <a href="curriculo.php" class="navBarItem">Currículo</a>
            <a href="projetos.php" class="navBarItem">Projetos</a>
            <a href="contato.php" class="navBarItem">Contato</a>
        </div>
    </header>
    <div class="sections">
            <section>
                <div class="curriculo "  >
                <div class="column ">
                    <h1 class="h1_curriculo">Contato</h1>
                    <p class="p_paragraph1 bold">Vamos conversar sobre suas ideias?</p>
                    <p class="bold contato_class">Telefone</p>
                    <p>(54) 997134604</p>
                    <p class="bold ">Email</p>
                    <p>andersoncxszn@gmail.com</p>
                </div>
            </div>
        </section>
        <section class="section_form">
            <form onsubmit="return validarForm()" class="form_style" method="POST" action="insereBanco.php">
                <label class="label" for="meuInput">Nome:</label>
                <input class="input" type="text" id="nome" name="nome" value="nome">
                
                <label class="label" for="meuInput">Sobrenome:</label>
                <input type="text" class="input" id="sobrenome" name="sobrenome" value="sobrenome">

                <label class="label" for="meuInput" require>Email:</label>
                <input type="text" class="input" id="email" name="email">

                <label class="label" for="meuInput">Assunto</label>
                <input type="text" class="input" id="assunto" name="assunto">
                
                <label  class="label"  for="meuInput">Mensagem:</label>
                <textarea   type="text" class="input" row="6" type="area-text" id="mensagem" name="mensagem"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </div>
    <?php 
        require 'insereBanco.php';
        ?>
    <footer class="footer">
        <div>
            <p class="textWeight">Numero</p>
            <p>(54) 997134604</p>
        </div>
        <div>
            <p class="textWeight">Email</p>
            <p>andersoncxszn@gmail.com</p>
        </div>
        <div>
            <p class="textWeight">Me siga</p>
            <!-- icone ig -->
            <a href="https://www.linkedin.com/in/anderson-storqui-da-silva/">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>
        <div class="cookies">
            <p>Politica de Cookies</p>
            <p>Politica de privacidade</p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
</html>