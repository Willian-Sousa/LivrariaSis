<?php
    include_once("conexao.php");


    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $nome_autor = $_POST['nome_autor'];
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['qnt'];
    $tipo = $_POST['tipo'];
    $editora = $_POST['editora'];
    

    if($titulo != ""){
        $alterar_titulo = "update acervo set titulo = '$titulo' where id = $id";
        $slq = mysqli_query($conexao, $alterar_titulo) or die(mysqli_error($conexao));
    }

    if($nome_autor != ""){
        $alterar_autor = "update acervo set autor = '$nome_autor' where id = $id";
        $sql = mysqli_query($conexao, $alterar_autor) or die(mysqli_error($conexao));
    }

    if($ano != ""){
        $alterar_ano = "update acervo set ano = $ano where id = $id";
        $sql = mysqli_query($conexao, $alterar_ano) or die(mysqli_error($conexao));
    }

    if($preco != ""){
        $alterar_preco = "update acervo set preco = $preco where id = $id";
        $sql = mysqli_query($conexao, $alterar_preco) or die(mysqli_error($conexao));
    }
    if($quantidade != ""){
        $alterar_quantidade = "update acervo set quantidade = $quantidae where id = $id";
        $sql = mysqli_query($conexao, $alterar_ano) or die(mysqli_error($conexao));
    }
    if($editora != ""){
        $alterar_editora = "update editora join acervo on editora.id = acervo.idEditora set editora.nome = '$editora' where acervo.idEditora = $id";
        $sql = mysqli_query($conexao, $alterar_editora) or die(mysqli_error($conexao));
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>AOKI-LIVRARIA: Lista do Acervo</title>
</head>
<body>
    <header>
        <a href="index.html">
            <h1>AOKI-LIVRARIA</h1>
        </a>
        <h2>Sistema de Controle de Acervo</h2>
        <div class="menu">
            <nav>
                <ul>
                <a href="index.html"><li>Cadastro</li></a>
                <a href="lista.php"><li>Lista do Acervo</li></a>
                </ul>
            </nav>
        </div>
    </header>  

    <div class="box">
        <h3>Altera????o realizada com sucesso!</h3>
        <div class="alterar">
            <?php
                echo "<h4>Verifique as novas altera????es</h4>";
                if($titulo!=""){
                    echo "T??tulo: $titulo<br>";
                }else{
                    echo "T??tulo: Sem altera????o.<br>";
                }
                if($nome_autor!=""){
                echo "Autor: $nome_autor<br>";
                }else{
                    echo "Autor: Sem altera????o.<br>";
                }
                if($ano!=""){
                echo "Ano: $ano<br>";
                }else{
                    echo "Ano: Sem altera????o.<br>";
                }
                if($preco!=""){
                printf("Pre??o: R$%.2f", $preco);
                echo "<br>";
                }else{
                    echo "Pre??o: Sem altera????o.<br>";
                }
                if($quantidade!=""){
                echo "<br>Quantidade: $quantidade<br>";
                }else{
                    echo "Quantidade: Sem altera????o.<br>";
                }
                if($tipo!=""){
                echo "Tipo: $tipo<br>";
                }else{
                    echo "Tipo: Sem altera????o.<br>";
                }
                if($editora!=""){
                echo "Editora: $editora";
                }else{
                    echo"Editora: Sem altera????o.";
                }
            
            ?>
        </div>
        <br>
        <hr>
        <button id='btn' class="btn"><a id='btn' href="lista.php">Voltar ?? lista</a></button>
    </div>

    <footer>
        <p>&copy; Aoki-Livraria: Todos os direitos reservados</p>
    </footer>   
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>