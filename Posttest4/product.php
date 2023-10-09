<?php
    if(!isset($_POST['register'])) {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass = $_POST['password'];
        $cpass = $_POST['c_password'];

        if ($pass != $cpass) {
            echo "<script>alert('Password does not match!'); document.location.href = 'register.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Ice Cream Dey</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('include/navbar.php') ?>

    <section class="product">
        <div class="product-container">
            <?php 
                if ($first_name == null) {
                    echo "<script>alert('You need to Register first!'); document.location.href = 'register.php'</script>";
                } else {
                    echo "
                        <h1>Hello $first_name!</h1><br>
                        <h3>The following is the data we got:</h3><br><br>
                        <p>Full Name : $first_name $last_name</p>
                        <p>Email Address : $email</p>
                        <p>Phone number : $phone</p>
                        <p>Password : $pass</p>
                    ";
                }
            ?>
        </div>
    </section>

    <?php include('include/footer.php') ?>

    <script src="./script.js"></script>
</body>
</html>