<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>

    <main>
        <br><br>
        <h1 class="text-center">Register with Us</h1>
        <div class="container border col-6 my-3 shadow">



            <form action="" method="POST" novalidate>
                <br>
                <div class="mb-3">
                    <label for="" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                        placeholder="" />

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="">

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" name="cpass" id="" placeholder="" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Job Title</label>
                    <input type="text" class="form-control" name="job_title" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>


                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
                <br><br>

            </form>
        </div>


    </main>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>

<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    // $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    // $cpass = password_hash($_POST['cpass'], PASSWORD_BCRYPT);
    $job_title = $_POST['job_title'];


    if (empty($name && $email && $pass && $cpass && $job_title)) {

        echo "<script>alert('All fields are required')</script>";
    }

    if ($pass != $cpass) {
        echo "<script>alert('Password and Confirm Password is not matching')</script>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email should be in format')</script>";
    } else {
        $sql = $conn->prepare('insert into employees2(name,email,password,confirm_pass,job_title) values(?,?,?,?,?)');
        $sql->bind_param('sssss', $name, $email, $pass, $cpass, $job_title);
        if ($sql->execute()) {
            echo "<script>alert('Registration Successfull')</script>";
        } else {
            echo "not insertted..";
        }
    }


}

?>