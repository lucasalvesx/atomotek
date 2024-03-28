<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $duvida = $_POST["duvida"];

    // Construct email message
    $to = "atomotek@gmail.com";
    $subject = "Novo contato através do formulário!";
    $message = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nDúvida: $duvida";
    $headers = "De: $email";

    // Send email
    email($to, $subject, $message, $headers);

    // Redirect user to a confirm page
    header("Location: confirm.html");
    exit();
}
?>
