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
    <title>Login</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">CRUD PHP MySQL</a>
            </div>
        </nav>
        <main class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <h5 class="card-title">Login</h5>
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="joao.silva@email.com">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" id="password" placeholder="********">
                            </div>
                            <input type="submit" value="Entrar" class="btn btn-block btn-primary btn-success">
                            <a href="register_form.php" class="bnt btn-link btn-block text-center">Cadastre-se</a>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>