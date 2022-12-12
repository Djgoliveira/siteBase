<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    

    <title>FutReal | Novo Cadastro</title>
</head>
    <header>
        <div class="menu-topo">
            <a href="./index.html"> <img src="./img//img-logos/logofutreal.png" alt="digitalHouse"></a>          
                <img src="./img/img/botaoTopo.png" alt="Icone menu" class="botao">        
            <ul class="lista-menu">
                <li class="home"><a href="./index.php">Home</a></li>
                <li><a href="./index.php#rodape">Sobre nós</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
        </div>
    </header>
<body>
    <div class="fundo-login">
        <div class="login-box">
            <div class="caixa-login">
                <section class="area-login">
                    <img src="./img//img-logos/logofutreal.png" alt="Logo Digital House">              
                    
                    <form class="formulario-login" method="POST" action="./adicionarUsuarios.php">                   
                        
                            <label for="email">Novo Nome</label>
                            <input type="text" id="email" name="adicionarUsuario" value="">
                                        
                            <label for="senha">Nova senha</label>
                            <input type="password"  id="senha" required name="passwordUsuario" value="">
                                        
                            <button type="submit" class="botao-entrar">Cadastrar</button>
                            <a href="./login.php">Voltar</a>
                           
                    </form>
                </section>
            </div>
        </div>
    </div>
    
</body>

<footer>
    <div id="rodape">
        <div class="item-rodape">
            <p class="nomes">Douglas Henrique F de Oliveira</p>
            <p class="dev">Responsável pelo desenvolvimento do site</p>
            <div class="links">
                <a href="https://www.linkedin.com/in/douglas-oliveira-86420372/">
                    <img src="./img/img-logos/linked.png" class="linked" title="Linkedin Douglas Henrique">
                </a>
                <a href="https://github.com/Djgoliveira">
                    <img src="./img/img-logos/gitHub.png" title="GitHub Douglas Henrique" alt="GitHub">
                </a>
                <div class="foto">
                    <img src="./img/img-desenvolvedores/dh.jpg" alt="Douglas Henrique">
                </div>
            </div>
        </div>
        <div class="item-rodape">
            <p class="nomes">Nathan</p>
            <p class="dev">Responsável pelo desenvolvimento do site</p>
            <div class="links">
                <a href="https://www.linkedin.com/in/yago-2091b3172/">
                    <img src="./img/img-logos/linked.png" class="linked" title="Linkedin Yago Aparecido">
                </a>
                <a href="">
                    <img src="" title="">
                </a>
                <div class="foto">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="item-rodape">
            <p class="nomes">Nathan</p>
            <p class="dev">Responsável pelo desenvolvimento do site</p>
            <div class="links">
                <a href="https://www.linkedin.com/in/yago-2091b3172/">
                    <img src="./img/img-logos/linked.png" class="linked" title="Linkedin Yago Aparecido">
                </a>
                <a href="">
                    <img src="" title="">
                </a>
                <div class="foto">
                    <img src="" alt="">
                </div>
            </div>
        </div>

    </div>

    <p class="rodape-fim">Checkpoint 3 desenvolvido em 2022</p>
    </div>

</footer>
</html> 