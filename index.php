<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ուսանողների ցուցակ</title>
    <?php
require_once 'classes.php';

$students = [
    new Student("Անի", "Պետրոսյան", 20, 101, "091123456", 18.5, "ՏՏ", 2),
    new Student("Արամ", "Հակոբյան", 22, 102, "093654321", 17.8, "Տնտեսագիտություն", 3),
    new Student("Մարի", "Սարգսյան", 19, 103, "094987654", 19.2, "Հումանիտար", 1),
];


?>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Ուսանողների տվյալներ</h2>

<table>
    <tr>
        <th>Անուն</th>
        <th>Ազգանուն</th>
        <th>Հեռախոս</th>
        <th>Անձնագիր</th>
        <th>Տարիք</th>
        <th>ՄՈԳ</th>
        <th>Ֆակուլտետ</th>
        <th>Կուրս</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student->name1 ?></td>
            <td><?= $student->surname ?></td>
            <td><?= $student->getPhone() ?></td>
            <td><?= $student->getId() ?></td>
            <td><?= $student->age ?></td>
            <td><?= $student->mog ?></td>
            <td><?= $student->faculty ?></td>
            <td><?= $student->course ?></td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>



