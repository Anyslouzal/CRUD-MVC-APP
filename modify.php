<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <form action="./controller/controller.php" method="GET">
      <label for="name">name</label>
      <input type="text" name="name" value="<?php echo $_GET['name'] ?>">
      <label for="old">old</label>
      <input type="text" name="old" value="<?php echo $_GET['old'] ?>">
      <label for="num">num</label>
      <input type="text" name="num" value="<?php echo $_GET['num'] ?>">
      <label for="email">email</label>
      <input type="text" name="email"  value="<?php echo $_GET['email'] ?>">
      <input type="submit" name="cmd"  value="modify">
    </form>
</body>
</html>