<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <PRE>
        <?php
        // put your code here
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
        $arrVideo[0] = new Video("POO PHP");
        $arrVideo[1] = new Video("PHP AULA 15");
        $arrVideo[2] = new Video("JAVA AULA 2");
        
        //print_r($arrVideo);
        
        $gafanhoto = new Gafanhoto("Carlos", 37, "M", "cadu172@gmail.com");
        
        $_views[0] = new Visualizacao($gafanhoto, $arrVideo[1]);
        $_views[0]->avaliarNota(3);
        $_views[0]->curtir();
        $_views[0]->curtir();
        $_views[0]->curtir();
        
        $_views[1] = new Visualizacao($gafanhoto, $arrVideo[0]);
        $_views[1]->avaliarNota(5);
        $_views[1]->curtir();
        
        print_r($_views);
        
        
        ?>
        </pre>
    </body>
</html>
