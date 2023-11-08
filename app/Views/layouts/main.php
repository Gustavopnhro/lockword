<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lockword - Gerador de Senha</title>
    <link rel="stylesheet" href="<?= base_url('/public/css/style.css')?>">
    <link rel="shortcut icon" href="<?= base_url('/public/favicon.png')?>" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100;300;400&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <?= $this->renderSection('header')?>
        
    </header>

    <?= $this->renderSection('content')?>

    <footer>
        <h3>Created by Gustavopnhro</h3>
    </footer>
</body>
</html>