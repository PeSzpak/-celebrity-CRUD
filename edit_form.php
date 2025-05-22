<?php

include("db.php");

$id = $_GET['id'];

$query = "SELECT * FROM `clients` WHERE `id` = '$id';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];
$address = $row['address'];

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>CRUD - Editar</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">CRUD PHP MySQL</a>
            </div>
        </nav>
        <main class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <h5 class="card-title">Editar tarefa</h5>
                        <form action="update.php?id=<?= $row['id']; ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="id" id="id" placeholder="Código" disabled 
                                value="<?= $_GET['id']; ?>">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name"   placeholder="Name"
                            value="<?= $name; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email"   placeholder="Email"
                            value="<?= $email; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone"   placeholder="Phone"
                            value="<?= $phone; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address"   placeholder="Address"
                            value="<?= $address; ?>">
                        </div>
                            <input type="submit" value="Atualizar" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>