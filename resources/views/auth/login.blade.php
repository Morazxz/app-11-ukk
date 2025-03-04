<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #739072">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan']=="gagal") {
        echo "<div class'alert'>Username dan Password tidak sesuai !</div>";
        }
    }
?>
    <div class="container">
        <div class="card position-absolute top-50 start-50 translate-middle rounded"
            style="width: 25rem; height: 19rem; border-radius: 17px">
            <div class="card-body" style="background-color: #f4f7f2;">
                <form action="cek_login.php" method="post">
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control"  placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a href="{{ url('/admin/dashboardad') }}" class="btn btn-secondary"
                            style="border-radius: 15px; width: 100;">Login</a>
                    </div>
                    <div>
                        <p>Belum punya akun? silahkan daftar terlebih dahulu</p>
                        <a href="{{ url('register') }}">
                            <p>Register</p>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
