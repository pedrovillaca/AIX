<?php

include ('formulario.php');

if(!isset($_SESSION)) {
    session_start();
}
if(isset($_POST['Nome'])){
        $sql_code = "SELECT * FROM aluno WHERE Nome <> '' = '$nome'";
        $sql_query = $mysqli->query($sql_code) or die("Problema SQL: " . $mysqli->error);
}
 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>

<div>
    Bem vindo.
    <div>
    
    <?php echo $_POST[$nome]?>

    </div>
    <p>
</div>
        <a href="logout.php">Sair</a>
    </p>

</body>
</html>