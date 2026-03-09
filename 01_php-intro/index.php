<!-- 01_php-intro/index.php -->
 <!--
    Disciplina : Desenvolvimento Web II (DWII)
    Aula : 03 - Arquitetura Web e introdução ao PHP
    Autor : Sofia Roloff
    Data : 02.03.2026
    Repositório : https://github.com/@sofiaRolofIFPR/2026-DWII
-->
<?php
//Variaveis
$nome = "Sofia Roloff";
$curso = "Técnico em informatica - IFPR";
$Profission = "Futura formanda em Técnico em Informatica pelo Instituto Federal do Paraná - CRPG.";
$pagina_atual = "inicio";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio - <?php echo $nome; ?></title>
    <style>
        body {font-family: Arial, sans-serif; margin: 0;background: #ffffff;}
        nav {background: #7132a4; padding: 15px 30px;}
        nav a {color: white ; text-decoration: none; margin-ringht:20px; font-weight: bold;}
        nav a:hover { text-decoration: underline;}
        .hero {backgroud: linear-gradient(135deg, #8f4ac4, #9138c4); color: #4b1679; text-align: center; padding: 60px 20px;}        
        .hero h1{font-size: 2.5em; margin-bottom:10px;}
        .hero p {font-size: 1.2em; opacity:0.9;}
        .container {max-width: 800px; margin: 40px auto; padding: 20px;}
        footer { background: #010000; color: #6b7280; text-align: center; padding: 20px; margin-top: 60px; font-size: 14px;}
        </style>
</head>
<body>
   <?php include 'includes/cabecalho.php'; ?>

<div class="hero">
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $profission; ?> | <?php echo $curso; ?></P>
</div>
<div class="container">
    <h2>Bem-vind@ ao meu portifólio</h2>
    <p>Esta página foi gerada pelo PHP em: <strong><?php echo date("d/m/y \à\s H:i:s"); ?></strong></p>
</div>

<?php include 'includes/rodape.php'; ?>
</body>
</html>
