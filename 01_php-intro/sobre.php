<!-- 01_php-ntro/sobre.php -->
 <?php 
 $nome= "Sofia Roloff";
 $pagina_atual = "sobre";
 ?>
 <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
 </head>
 <body style="font-family: Arial, sans-serif; margin: 0; beackground: #f3f4f6;">
    <?php include 'includes/cabecalho.php'; ?>

    <div style="max-width|: 800px; margin:40px auto; padding: 0 20px;">
        <h1 style="color: #6c3b9d;">👩🏻‍💻Sobre mim</h1>
        <p> Olá olá! Sou <strong><?php echo $nome; ?></strong>, estudante de Técnico de Informática no IFPR de Ponta Grossa.</p>
        <p> Gosto muito da área, mas vou optar por fazer Educação Física ou Psicologia na faculdade. Sou atleta, jogo vôlei e estou iniciando nas modalidades de corrida no atletismo.
            Além disso eu gosto de fazer trilhas e estar em contato com a natureza.
            No ensino básico minha matéria favorita sempre foi Geografia e Educação Física, e para mim as mais impostantes da vida sempre serão Filosofia e Sociologia... </p>
            <a href="index.php"
            style="color: #613b9d; font-weight: bold;"> Voltar ao Inicio</a>
</div>

<?php include 'includes/rodape.php'; ?>
   
 </body>
 </html>