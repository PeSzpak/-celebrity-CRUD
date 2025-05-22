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
    <title>CRUD Dos Famosos</title>
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
            <!-- form -->
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="save.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name"   placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email"   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" id="phone"   placeholder="Phone">
                        </div>
                       <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address"   placeholder="Address">
                        </div>
                        <input type="submit" value="Salvar" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
            <!-- /form -->
            <!-- table -->
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('db.php');
                            $query = "SELECT * FROM clients LIMIT 10;";
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?= $row['id']; ?> </td>
                                    <td><?= $row['name']; ?> </td>
                                    <td><?= $row['email']; ?> </td>
                                    <td><?= $row['phone']; ?> </td>
                                    <td><?= $row['address']; ?> </td>
                                    <td><?= $row['created_at']; ?> </td>
                                    <td>
                                        <a href="edit_form.php?id=<?= $row['id']; ?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
</body>
</html>