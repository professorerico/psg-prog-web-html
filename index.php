<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $diretorio = new  DirectoryIterator(dirname(__FILE__));
        $path = "./";
        echo "<dl>";
        echo "<dt>Arquivos Disponíveis</dt>";
        foreach($diretorio as $arquivo)
        {
            if(!($arquivo->getBasename('.html') == $arquivo->getFilename()) && $arquivo->isFile())
            {
                echo "<dd><a href=".$path.$arquivo->getFilename().">".$arquivo->getBasename('.html')."</a></dd>";
            }
        }
        echo "</dl>";
    ?>
</body>
</html>
