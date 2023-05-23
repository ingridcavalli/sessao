<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exmplo de Sessão em PHP</title>
</head>

<body>
  <?php 
   echo  "<h3>Exemplo de sessão em php</h3>";
   echo "<form name='sessao' method='post' action=''>";
      echo "<p>";
       echo "<label for='nome'>Nome:</label>";
       echo "<input type='text' name='nome' maxlength='40' required>";
     echo "</p>";
     echo "<p>";
       echo "<label for='e-mail'>Email:</label>";
       echo "<input type='e-mail' name='email' maxlength='30' required>";
     echo "</p>";
     echo "<p>";
       echo "<input type='submit' name='enviar' value='Enviar'>";
     echo "</p>";
     if(isset($_POST["enviar"]))
     {
         $nome = $_POST["nome"];
         $email = $_POST["email"];

         // Salvando os dados nas variáveis da sessão
         session_start();
         $_SESSION["nome"] = $nome;
         $_SESSION["email"] = $email;
        echo "<p> Dados salvos com sucesso</p>";
     }
?>

<p><a href="exibir.php">Exibir</a>
    <a href="logout.php">Sair</a>
</body>

</html>