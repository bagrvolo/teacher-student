<?php
$pdo = new PDO("mysql:host=127.0.0.1; dbname=project", "root", ' ') or die("conn err");
$sql = "select id,info from student";
$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
?>

<style>
    table {
        border: solid 1px black;
        border-collapse: collapse;
    }

    th {
        border: solid 1px black;
    }

    td {
        border: solid 1px black;
        padding: 10px;
        padding-bottom: 10px;
    }
</style>
<h1>Info about Student</h1>

<table id="teach_table">
    <tr>
        <th>Info about me</th>
    </tr>
    <? foreach ($result as $res) : ?>
        <tr>
            <td>
                <?= $_POST['info']; ?>
            </td>
        </tr>
    <? endforeach; ?>
</table>

