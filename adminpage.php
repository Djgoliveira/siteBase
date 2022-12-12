<?php
require_once './php/pdoconfig.php';

$servername = "127.0.0.1";
$database = "futreal_db";
$username = "root";
$password = "root";

    // Connect to database
    $conn = mysqli_connect($servername, $username, $password, $database);
  
     
    // mysqli_connect("servername","username","password","database_name")
  
    // Get all the categories from category table
    $sql = "SELECT * FROM `tb_times`";
    $all_times = mysqli_query($conn,$sql);

     // The following code checks if the submit button is clicked
    // and inserts the data in the database accordingly
    if(isset($_POST['submit']))
    {
        // Store the Product name in a "name" variable
        $name = mysqli_real_escape_string($conn,$_POST['time_nome']);
        
        // Store the Category ID in a "id" variable
        $id = mysqli_real_escape_string($con,$_POST['id_time']);

        $genero = mysqli_real_escape_string($con,$_POST['time_genero']);
        
    }

   
    $sql = "SELECT * FROM `tb_jogadores`";
    $all_jogadores = mysqli_query($conn,$sql);

    if(isset($_POST['submit']))
    {
        // Store the Product name in a "name" variable
        $time_nome = mysqli_real_escape_string($conn,$_POST['time_nome']);
        $jogador_nome = mysqli_real_escape_string($conn,$_POST['jogador_nome']);
        $jogador_posicao = mysqli_real_escape_string($conn,$_POST['jogador_posicao']);
        $time_categoria = mysqli_real_escape_string($conn,$_POST['time_categoria']);
        $tecnico_nome = mysqli_real_escape_string($conn,$_POST['tecnico_nome']);
        
    }
  
   
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <title>FutReal | Bem vindo</title>
</head>
<header>
    <div class="menu-topo">
        <a href="./index.php"> <img src="./img//img-logos/logofutreal.png" alt="digitalHouse"></a>
        <img src="./img/img/botaoTopo.png" alt="Icone menu" class="botao">
        <ul class="lista-menu">
            <li class="home"><a href="./index.php">Home</a></li>
            <li><a href="#rodape">Sobre nós</a></li>
            <li><a href="./login.php">Login</a></li>
        </ul>
    </div>
</header>

<body>
    <div class="card-filme">
        <article>
            <section class="conteudo-banner">
                <div class="banner">
                    <h1 class="flix">Futebol Real</h1>
                    <p>O site onde você monta seu Campeonato</p>                    
                </div>
            </section>
        </article>  
    </div class="card-filme"> 
        <div class="view-times">
        <form class="formulario-time" method="POST">     
        <fieldset>
        <legend>Listagem de Times</legend>
        <br>
        <label>Selecione os times</label>
        <br>
        <br>
        <p>Times:
        <select name="times">
        <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($times = mysqli_fetch_array(
                        $all_times,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $times["id_time"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $times["time_nome"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
                </p>
               <br>
                <label>Jogadores por Time</label>
                <br><br>
        <p>Jogadores:
        <br>
        <br>
        <select name="jogadores">
        <?php
                // use a while loop to fetch data
                // from the $all_categories variable
                // and individually display as an option
                while ($jogadores = mysqli_fetch_array(
                        $all_jogadores,MYSQLI_ASSOC)):;
            ?>
             <option value="<?php echo $jogadores["id_jogador"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $jogadores["jogador_nome"];              // To show the category name to the user?>
                    
                    </option>
            <?php
                endwhile;
                // While loop must be terminated
            ?>
        </select>
                </p>
        </form>
        <br>
        <br>
        <input type="checkbox" name="genero" value="M" /> Masculino
        <input type="checkbox" name="genero" value="F" /> Feminino
        <input type ="reset" value="Reset" />      
       
</fieldset>
<fieldset>        
        
</fieldset>
        </div>
    <div class="jogos" >
        <img src="./img/img/tabelajogos.png" alt="partidas">
    </div>
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
</body>

</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>