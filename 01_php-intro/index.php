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
$ano = "2026";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio - <?php echo $nome; ?></title>
    <style>
        body {font-family: Arial, sans-serif; margin: 0;background: #f3f4f6;}
        nav {background: #3b579d; padding: 15px 30px;}
        nav a {color: white; text-decoration: none; margin-ringht:20px; font-weight: bold;}
        nav a:hover { text-decoration: underline;}
        .hero {backgroud: linear-gradient(135deg, #3b579d, #2a4080); color: white; text-align: center; padding: 60px 20px;}        
        .hero h1{font-size: 2.5em; margin-bottom:10px;}
        .hero p {font-size: 1.2em; opacity:0.9;}
        .container {max-width: 800px; margin: 40px auto; padding: 20px}
</head>
<body>
    <h1> Olá, olá! Meu nome é <?php echo $nome; ?></h1>
    <p>Curso: <?php echo $curso; ?></p>
    <p>Ano: <?php echo $ano; ?></p>
    <p>Página gerada em: <?php echo date("d/m/y \à\s H:i"); ?></p>
</body>
</html>
