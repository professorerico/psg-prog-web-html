<?php
    $diretorio = new  DirectoryIterator(dirname(__FILE__));
    $path = "./";
    echo "<dl>";
    echo "<dt>Arquivos Disponíveis</dt>";
        foreach($diretorio as $arquivo)
        {
           if(!($arquivo->getBasename('.html') == $arquivo->getFilename()) && $arquivo->isFile())
           {
               echo "<dd><a href=".$path.$arquivo->getFilename().">".$arquivo->getBasename('.html')."</a></li>";
           }
        }
    echo "</dl>";
?>
