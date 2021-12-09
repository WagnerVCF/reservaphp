<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $sql = "UPDATE pessoa SET nome=?, cidade=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização: ".$conn->errno." - ".$conn->error;
    }
    $stmt->bind_param('ssi', $nome, $cidade, $id);
    $stmt->execute();
    $conn->close();
    header("Location: index.php");
?>