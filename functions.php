<?php 
    function identifica_destino($codigos){//resposta da questão 1

        $pacote=0;
    
        $contaCentroOeste=0;
        $pacotesCentroOeste="";
    
        $contaNordeste=0; 
        $pacotesNordeste="";
    
        $contaNorte=0; 
        $pacotesNorte="";
    
        $contaSudeste=0;
        $pacotesSudeste="";
    
        $contaSul=0;
        $pacotesSul="";
    
        foreach (explode(';', $codigos) as $valor) {
            $pacote++;
            $string_destino = substr($valor,3,3);
            $int_destino = intval($string_destino);
    
            if($int_destino> 200 and $int_destino<300){
                $pacotesCentroOeste=$pacotesCentroOeste.$pacote.",";
                $contaCentroOeste++;
            }
            if($int_destino> 299 and $int_destino<400){
                $pacotesNordeste=$pacotesNordeste.$pacote.",";
                $contaNordeste++;
            }
            if($int_destino>= 399 and $int_destino<500){
                $pacotesNorte=$pacotesNorte.$pacote.",";
                $contaNorte++;
            }
            if($int_destino> 0 and $int_destino<100){
                $pacotesSudeste=$pacotesSudeste.$pacote.",";
                $contaSudeste++;
            }
            if($int_destino> 99 and $int_destino<200){
                $pacotesSul=$pacotesSul.$pacote.",";
                $contaSul++;
            }
        }
        
        echo "os pacotes: ".$pacotesCentroOeste."  pertencem a região centro-oeste";
        echo "<br> total:".$contaCentroOeste." pacotes<br>------<br> ";
        echo "os pacotes: ".$pacotesNordeste."  pertencem a região Nordeste";
        echo "<br> total:".$contaNordeste." pacotes<br>------<br> ";
        echo "os pacotes: ".$pacotesNorte."  pertencem a região Norte";
        echo "<br> total:".$contaNorte." pacotes<br>------<br> ";
        echo "os pacotes: ".$pacotesSudeste."  pertencem a região Sudeste";
        echo "<br> total:".$contaSudeste." pacotes<br>------<br> ";
        echo "os pacotes: ".$pacotesSul."  pertencem a região Sul";
        echo "<br> total:".$contaSul." pacotes<br>------<br> ";
    }

    function pacotes_validos($codigos)
    {
        $codigosValidos="";
        $pacote=0;
        $pacotes="";
        foreach (explode(';', $codigos) as $valor) {
            $string_origem = substr($valor,0,3); //ok
            $int_origem = intval($string_origem);
            $vendedor =  substr($valor,9,3);
            $tipo =  substr($valor,12,3);

            $pacote++;
            
            $validaRegiao=true;
            $validaTipo=true;
            $validaVendedor=true;
        

            if($tipo=='001' and ($int_origem>= 201 or $int_origem<=299)){
                $validaRegiao=false;
            }

            if(($tipo != '001') and ($tipo != '111') and ($tipo != '333') and ($tipo != '555') and ($tipo != '888')){
                $validaTipo=false;
            }

            if($vendedor=='367'){
                $validaVendedor=false;
            }

            if($validaRegiao and $validaTipo and $validaVendedor){
                $pacotes=$pacotes.$pacote.",";
                $codigosValidos=$codigosValidos.$valor.";";  
            }
        }
        echo "pacotes validos : ".$pacotes;
    }

    function pacotes_invalidos($codigos)
    {
        $codigosInvalidos="";
        $pacote=0;
        $pacotes="";
        foreach (explode(';', $codigos) as $valor) {
            $string_origem = substr($valor,0,3); //ok
            $int_origem = intval($string_origem);
            $vendedor =  substr($valor,9,3);
            $tipo =  substr($valor,12,3);

            $pacote++;
            
            $validaRegiao=true;
            $validaTipo=true;
            $validaVendedor=true;
        

            if($tipo=='001' and ($int_origem>= 201 or $int_origem<=299)){
                $validaRegiao=false;
            }

            if(($tipo != '001') and ($tipo != '111') and ($tipo != '333') and ($tipo != '555') and ($tipo != '888')){
                $validaTipo=false;
            }

            if($vendedor=='367'){
                $validaVendedor=false;
            }

            if($validaRegiao and $validaTipo and $validaVendedor){
                
            }else{
                $pacotes=$pacotes.$pacote.",";
                $codigosInvalidos=$codigosInvalidos.$valor.";";  
            }
        }
        echo "pacotes Invalidos : ".$pacotes;
    }
    function brinquedos_regiao_sul($codigos){
        $pacote=0;
        $pacotes="";
        
        foreach (explode(';', $codigos) as $valor) {
            $string_origem = substr($valor,0,3);
            $int_origem = intval($string_origem);
            $tipo =  substr($valor,12,3);
            
            $pacote++;
            if($tipo=='888' and ($int_origem>= 100 or $int_origem<=199)){
                $pacotes=$pacotes.$pacote.",";
            }
        }
        echo "Brinquedos da região sul: pacotes ". $pacotes;
    }
    function codigos_validos($codigos)
{
    $codigosValidos="";
    foreach (explode(';', $codigos) as $valor) {
        $string_origem = substr($valor,0,3); //ok
        $int_origem = intval($string_origem);
        $destino= substr($valor,3,3);
        $codigo_loggi = substr($valor,6,3);
        $vendedor =  substr($valor,9,3);
        $tipo =  substr($valor,12,3);

        $validaRegiao=true;
        $validaTipo=true;
        $validaVendedor=true;
       

        if($tipo=='001' and ($int_origem>= 201 or $int_origem<=299)){
            $validaRegiao=false;
        }

        if(($tipo != '001') and ($tipo != '111') and ($tipo != '333') and ($tipo != '555') and ($tipo != '888')){
            $validaTipo=false;
        }

        if($vendedor=='367'){
            $validaVendedor=false;
        }

        if($validaRegiao and $validaTipo and $validaVendedor){
            $codigosValidos=$codigosValidos.$valor.";";  
        }
    }
    return  $codigosValidos;
}

function identifica_destino_tipo($codigos){//resposta da questão 1

    $pacote=0;

    $centroOesteTipo001="";
    $centroOesteTipo111="";
    $centroOesteTipo333="";
    $centroOesteTipo555="";
    $centroOesteTipo888="";

    $nordesteTipo001="";
    $nordesteTipo111="";
    $nordesteTipo333="";
    $nordesteTipo555="";
    $nordesteTipo888="";

    $norteTipo001="";
    $norteTipo111="";
    $norteTipo333="";
    $norteTipo555="";
    $norteTipo888="";

    $sudesteTipo001="";
    $sudesteTipo111="";
    $sudesteTipo333="";
    $sudesteTipo555="";
    $sudesteTipo888="";

    $sulTipo001="";
    $sulTipo111="";
    $sulTipo333="";
    $sulTipo555="";
    $sulTipo888="";

    foreach (explode(';', $codigos) as $valor) {
        $pacote++;
        $string_destino = substr($valor,3,3);
        $int_destino = intval($string_destino);
        $tipo =  substr($valor,12,3);

        if($int_destino> 200 and $int_destino<300){
            if($tipo=='001'){
                $centroOesteTipo001=$centroOesteTipo001.$pacote.",";
            }else if($tipo=='111'){
                $centroOesteTipo111=$centroOesteTipo111.$pacote.",";
            }else if($tipo=='333'){
                $centroOesteTipo333=$centroOesteTipo333.$pacote.",";
            }elseif($tipo=='555'){
                $centroOesteTipo555=$centroOesteTipo555.$pacote.",";
            }else if($tipo=='888'){
                $centroOesteTipo888=$centroOesteTipo888.$pacote.",";
            }
        }
        if($int_destino> 299 and $int_destino<400){
            if($tipo=='001'){
                $nordesteTipo001=$nordesteTipo001.$pacote.",";
            }else if($tipo=='111'){
                $nordesteTipo111=$nordesteTipo111.$pacote.",";
            }else if($tipo=='333'){
                $nordesteTipo333=$nordesteTipo333.$pacote.",";
            }elseif($tipo=='555'){
                $nordesteTipo555=$nordesteTipo555.$pacote.",";
            }else if($tipo=='888'){
                $nordesteTipo888=$nordesteTipo888.$pacote.",";
            }
        }
        if($int_destino>= 399 and $int_destino<500){
            if($tipo=='001'){
                $norteTipo001=$norteTipo001.$pacote.",";
            }else if($tipo=='111'){
                $norteTipo111=$norteTipo111.$pacote.",";
            }else if($tipo=='333'){
                $norteTipo333=$norteTipo333.$pacote.",";
            }elseif($tipo=='555'){
                $norteTipo555=$norteTipo555.$pacote.",";
            }else if($tipo=='888'){
                $norteTipo888=$norteTipo888.$pacote.",";
            }
        }
        if($int_destino> 0 and $int_destino<100){
            if($tipo=='001'){
                $sudesteTipo001=$sudesteTipo001.$pacote.",";
            }else if($tipo=='111'){
                $sudesteTipo111=$sudesteTipo111.$pacote.",";
            }else if($tipo=='333'){
                $sudesteTipo333=$sudesteTipo333.$pacote.",";
            }elseif($tipo=='555'){
                $sudesteTipo555=$sudesteTipo555.$pacote.",";
            }else if($tipo=='888'){
                $sudesteTipo888=$sudesteTipo888.$pacote.",";
            }
        }
        if($int_destino> 99 and $int_destino<200){
            if($tipo=='001'){
                $sulTipo001=$sulTipo001.$pacote.",";
            }else if($tipo=='111'){
                $sulTipo111=$sulTipo111.$pacote.",";
            }else if($tipo=='333'){
                $sulTipo333=$sulTipo333.$pacote.",";
            }elseif($tipo=='555'){
                $sulTipo555=$sulTipo555.$pacote.",";
            }else if($tipo=='888'){
                $sulTipo888=$sulTipo888.$pacote.",";
            }
        }
    }
    
    echo "os pacotes pertencem a região centro-oeste <br>";
    echo "joias :" . $centroOesteTipo001."<br>";
    echo "livros :" . $centroOesteTipo111."<br>";
    echo "eletronicos :" . $centroOesteTipo333."<br>";
    echo "bebidas :" . $centroOesteTipo555."<br>";
    echo "brinquedos :" . $centroOesteTipo888."<br>";
    echo "<br> -------- <br>";

    echo "os pacotes pertencem a região Nordeste <br>";
    echo "joias :" . $nordesteTipo001."<br>";
    echo "livros :" . $nordesteTipo111."<br>";
    echo "eletronicos :" . $nordesteTipo333."<br>";
    echo "bebidas :" . $nordesteTipo555."<br>";
    echo "brinquedos :" . $nordesteTipo888."<br>";
    echo "<br> -------- <br>";

    echo "os pacotes pertencem a região Nordeste <br>";
    echo "joias :" . $norteTipo001."<br>";
    echo "livros :" . $norteTipo111."<br>";
    echo "eletronicos :" . $norteTipo333."<br>";
    echo "bebidas :" . $norteTipo555."<br>";
    echo "brinquedos :" . $norteTipo888."<br>";
    echo "<br> -------- <br>";

    echo "os pacotes pertencem a região Sudeste <br>";
    echo "joias :" . $sudesteTipo001."<br>";
    echo "livros :" . $sudesteTipo111."<br>";
    echo "eletronicos :" . $sudesteTipo333."<br>";
    echo "bebidas :" . $sudesteTipo555."<br>";
    echo "brinquedos :" . $sudesteTipo888."<br>";
    echo "<br> -------- <br>";

    echo "os pacotes pertencem a região sul <br>";
    echo "joias :" . $sulTipo001."<br>";
    echo "livros :" . $sulTipo111."<br>";
    echo "eletronicos :" . $sulTipo333."<br>";
    echo "bebidas :" . $sulTipo555."<br>";
    echo "brinquedos :" . $sulTipo888."<br>";
    echo "<br> -------- <br>";
}
?>