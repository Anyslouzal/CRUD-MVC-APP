<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="../controller/controller.php?cmd=add" method="post">
      <label for="name">name</label>
      <input type="text" name="name" >
      <label for="old">old</label>
      <input type="text" name="old" >
      <label for="num">num</label>
      <input type="text" name="num" >
      <label for="email">email</label>
      <input type="text" name="email" >
      <input type="submit" value="add">
    </form>
</body>
</html>