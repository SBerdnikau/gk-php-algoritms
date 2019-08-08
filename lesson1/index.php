<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="blockDir">
            <?php
            // Создаем новый объект DirectoryIterator
            $dir = new DirectoryIterator($_SERVER["DOCUMENT_ROOT"]);
            // Цикл по содержанию директории
            foreach ($dir as $item) {
                echo $item . "<hr>";
            }
            ?>
        </div>
    </div>
</body>
</html>
