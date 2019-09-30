<?php
$pdo = new PDO("mysql:host=127.0.0.1; dbname=project", "root", ' ') or die("conn err");
$sql = "select id,subjects,info,date from teacher";
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
<h1>Info about Teacher</h1>

<table id="teach_table">
    <tr>
        <th>My subjects</th>
        <th>Info about me</th>
        <th>My next working day</th>
    </tr>
    <tr>
        <?php foreach ($result as $res) : ?>
            <td>
                <?= $res['subjects']; ?>
            </td>
            <td>
                <?= $res['info']; ?>
            </td>
            <td>
                <?= $res['data']; ?>
            </td>
        <?php endforeach; ?>
    </tr>
</table>
