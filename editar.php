<?php

require "connection.php";

$info = [];

$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }
}
else{
    header("Location: index.php");
    exit;
}
?>

<h1>Editar usuario</h1>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>"/>
    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?php echo $info['nome']; ?>"/>
    </label><br/>

    <label>
        Email:<br/>
        <input type="email" name="email" value="<?php echo $info['email']; ?>"/>
    </label><br/>
    <input type="submit" value="Salvar" />
</form>