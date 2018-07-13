
<?php
    $row = 1;
    if (($handle = fopen("arquivo.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        // echo "<p> $num colunas na linha $row: <br /></p>\n";
        
        // $data[0] Guarda todos os registros de cada linha
        
        // usando o explode para separar os registros de cada linha
        $explodir = $data[0];
        $dado = explode(';', $explodir);
        
        // agora $dado[0] é um registro, $dado[1] é outro..
        
        // Tratando o valor com ponto
        $valor_com_ponto = $dado[5];
        $valor_sem_ponto = str_replace("." , "" , $valor_com_ponto ); // Tirando os pontos
       
        // var_dump($dado);
        
        // Gerando as consultas de INSERT
        echo "INSERT INTO `****_teste` (`****`, `****`, `****`, `****`, `****`, `****`, `****`, `****`) VALUES (Null,'$dado[0]','$dado[1]','$dado[2]','$dado[3]','$dado[4]','$valor_sem_ponto','$dado[6]');";
        echo '<br><br>';
        
        
        $row++;
    }
    fclose($handle);
}


