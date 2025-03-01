<?php

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria =str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $valores = [$_SESSION['id'], $titulo, $categoria, $descricao . PHP_EOL];
    $texto = implode('#', $valores);

    $arquivo = fopen('../../help_desk/arquivo.txt', 'a');

    fwrite($arquivo, $texto);
    fclose($arquivo);
    header('Location: abrir_chamado.php')

?>