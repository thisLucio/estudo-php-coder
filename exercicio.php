<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <link rel="stylesheet" href="assets\css\exercicio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exerício</title>
</head>
<body class="exercicio">
      <header class="cabecalho">
          <h1>Curso PHP</h1>
          <h2>Visualização do Exercício</h2>
      </header>
      <nav class="navegacao">
          <a href="#" class="verde">Sem formatação</a>
          <a href="index.php" class="vermelho">Voltar</a>
        </nav>
      <main class="principal">
          <div class="conteudo">
                <?php 
                    //include($_GET['dir'] . "/". $_GET['file'] . ".php");
                    include("{$_GET['dir']}/{$_GET['file']}.php");
                ?>
          </div>
      </main>
      <footer class="rodape">
          COD3R & Lúcio Bergamasco &copy <?=date('Y');?>
      </footer>
</body>
</html>