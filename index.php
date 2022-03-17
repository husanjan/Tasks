
<?php

    //Query Class
    require_once "Query.php";


    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark">


<table class="table text-white mt-5">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">FullName</th>
        <th scope="col">Age</th>
        <th scope="col">Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php  foreach ($selectPeople AS $people) : ?>
    <tr>
        <th scope="row">1</th>
        <td><?=$people["fullname"]?></td>
        <td><?=$people["age"]?></td>
        <td><?=$people["phone"]?></td>

    </tr>
    <?php  endforeach;?>

    </tbody>
</table>
</body>
</html>