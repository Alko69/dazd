<?php

$users = 
[
    [
        'name' => 'marc',
        'Color' => 'vert',
        'Age' => 43,
        'other' => ['arra', 'aiaze', 'michel']
    ],

    [
        'name' => 'genevieve',
        'Color' => 'bleu',
        'Age' => 76
    ],

    [
        'name' => 'oscar',
        'Color' => 'pourpre',
        'Age' => 94
    ]
    
];

echo $users[0]['other'][2];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP</title>
</head>

<body>
    <table>
       <tr>
            <th>Prénom: </th>
            <th>Couleur: </th>
            <th>Age: </th>
       </tr>
       <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['name'] ?></td>
                <td><?= $user['Color'] ?></td>
                <td><?= $user['Age'] ?></td>
            </tr>
       <?php endforeach ?>
    </table>  
</body>
</html>