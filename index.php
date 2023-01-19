<?php

require "connection.php";

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="adicionar.php">Adicionar usuario</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÃO</th>
    </tr>

    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $usuario['id']; ?>">[ editar ]</a>
                <a href="excluir.php?id=<?php echo $usuario['id']; ?>" onclick="alert('Tem certeza que deseja excluir?')">[ editar ]</a>
            </td>
        <tr>

    <?php endforeach; ?>