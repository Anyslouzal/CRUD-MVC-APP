<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
           <tr>
            <th>id</th>
            <th>name</th>
            <th>old</th>
            <th>num</th>
            <th>email</th>
            <th>update</th>
            <th>delete</th>
           </tr>
        </thead>

    <?php
    

foreach($data as $row)
                echo" <tr>
                 <td>".$row['id']."</td>
                 <td>".$row['name']."</td>
                 <td>".$row['old']."</td>
                 <td>".$row['num']."</td>
                 <td>".$row['email']."</td>
                 <td><a href='../modify.php?id=".$row['id']."&name=".$row['name']."&old=".$row['old']."&num=".$row['num']."&email=".$row['email']."'>update</a></td>
                 <td><a href='../controller/controller.php?id=".$row['id']."'>delete</a></td>
                </tr>"

                ?>

                </tbody>
</body>
</html>