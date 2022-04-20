<?php include 'functions.php';
      include 'constantes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questoes desafio</title>
</head>
<body>
  <h1>Questões</h1>
  <h3>Victoria da Silva Caetano | IFSUL-Instituto Federal de Educação Ciência e Tecnologia Sul-Rio_Grandense | Analise e Desenvolvimento de Sistemas | previsão de termino em 2023 | cursando 2° Semestre | </h3>
  
    <h2>1. Identificar a região de destino de cada pacote, com totalização de
        acotes (soma região)
    </h2>
    <p>
    <?php identifica_destino($codigos)?>
    </p>

    <h2>2. Saber quais pacotes possuem códigos de barras válidos e/ou
        inválidos
    </h2>
    <p>
        <?php echo pacotes_validos($codigos);?>
        <br>
        <?php echo pacotes_invalidos($codigos);?>
    </p>

    <h2>3. Identificar os pacotes que têm como origem a região Sul e
      brinquedos em seu conteúdo
    </h2>
    <p>
        <?php brinquedos_regiao_sul($codigos)?>
    </p>

    <h2>4. Listar os pacotes agrupados por região de destino (Considere apenas
        pacotes válidos);
    </h2>
    <p>
    <?php $validos =codigos_validos($codigos);
        echo identifica_destino($validos);
    ?>
    </p>

    <h2>5. Listar o número de pacotes enviados por cada vendedor (Considere
    apenas pacotes válidos)
    </h2>
    <p>não processado</p>

    <h2>6. Gerar o relatório/lista de pacotes por destino e por tipo (Considere
apenas pacotes válidos)
    </h2>
    <p><?php  
    $validos =codigos_validos($codigos);
    echo identifica_destino_tipo($validos)?></p>

    <h2> 7. Se o transporte dos pacotes para o Norte passa pela Região
Centro-Oeste, quais são os pacotes que devem ser despachados no
mesmo caminhão?
    </h2>
    <p>não pocessado</p>

    <h2>8. Se todos os pacotes fossem uma fila qual seria a ordem de carga
para o Norte no caminhão para descarregar os pacotes da Região
Centro Oeste primeiro;
    </h2>
    <p>não processado</p>

    <h2>9. No item acima considerar que as jóias fossem sempre as primeiras a
serem descarregadas;
    </h2>
    <p>não pocessado</p>

    <h2>10. Listar os pacotes inválidos.
    </h2>
    <p><?php echo pacotes_invalidos($codigos);?></p>
    <br><br>
</body>
</html>