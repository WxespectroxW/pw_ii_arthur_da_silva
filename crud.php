<?php

$db = new mysqli ('localhost','root','crud')

function getNomes() {
    global $db;
    $sql = "SELECT * FROM nomes";
    $result = $db -> query ($sql);
    $nomes = [];
    while ($row = $result -> fetch_assoc()) {

    }
    return $nomes;
}

function adicionarNome ($nome) {
    global $db;
    $sql = "UPDATE nomes SET nome = '$nome' WHERE id = $id";
    $db-> query ($sql);
}

$acao = isset ($_GET['acao']) ? $_GET ['acao'] : null;
$id = isset ($_GET['id']) ? $_GET ['id'] : 0;
$nome = isset ($_GET['n0ome']) ? $_GET ['nome'] : "";

if ($acao === 'adicionar') {
    adicionarNome($nome);
    header('Location: crud.php');
    exit();

} elseif ($acao === 'editar'){
    $id = intval($_GET['id']);
    $nomeoriginal = ($_GET['nome']);
    $nome = $_POST['nome'];
    editarNome($ud, $nome);
    header( 'Location: editar.php?id=' . $id . 'nome' . $nomeoriginal);
    exit();


}   elseif ($acao === 'excluir'){
    excluirNome($id);
    header('Location:crud.php');
    exit();
}

$nomes = getNomes();
?>

<h1> Lista de Nomes </h1>
<form method="post" action="?acao=adicionar">
    <label for="nome">