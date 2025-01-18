<?php
include 'config.php';

// CRIAR
if (isset($_POST['save'])) {
    $nome = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['phone']);

    // Verificar se o e-mail já existe
    $verificarEmail = $conn->query("SELECT * FROM records WHERE email='$email'") or die($conn->error);
    if ($verificarEmail->num_rows > 0) {
        echo "<script>alert('Este e-mail já está cadastrado!'); window.location.href='index.php';</script>";
    } else {
        $conn->query("INSERT INTO records (name, email, phone) VALUES ('$nome', '$email', '$telefone')") or die($conn->error);
        header('Location: index.php');
    }
}

// EXCLUIR
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM records WHERE id=$id") or die($conn->error);
    header('Location: index.php');
}

// ATUALIZAR
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefone = $conn->real_escape_string($_POST['phone']);

    // Verificar se o e-mail já existe para outro registro
    $verificarEmail = $conn->query("SELECT * FROM records WHERE email='$email' AND id != $id") or die($conn->error);
    if ($verificarEmail->num_rows > 0) {
        echo "<script>alert('Este e-mail já está cadastrado para outro registro!'); window.location.href='index.php';</script>";
    } else {
        $conn->query("UPDATE records SET name='$nome', email='$email', phone='$telefone' WHERE id=$id") or die($conn->error);
        header('Location: index.php');
    }
}
?>
