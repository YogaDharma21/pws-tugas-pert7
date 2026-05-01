<?php
require_once './classes/Users.php';
$users = new Users();
$data = $users->getById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <form action="./process_edit_user.php" method="POST">
        <input type="hidden" name="id" id="id" value="<?= $data['id'] ?>">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $data['nama'] ?>">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= $data['email'] ?>">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
