<?php

include_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);

    $pass1 = password_hash($pass, PASSWORD_DEFAULT);
    $repass = filter_input(INPUT_POST, 'repass', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($repass != $pass) {
        ?>
        <script>alert("password not match");</script>
        <?php
    } else {
        // $hashed = passzword_hash($pass, PASSWORD_DEFAULT);

        // Check if the username is already registered
        $check = "SELECT * FROM registration WHERE username ='$username'";
        $query = mysqli_query($conn, $check);

        if (mysqli_num_rows($query) > 0) {
            ?>
            
            <script>alert("Already Registered");
                window.location="log-in.php";

            </script>
            <?php
        } else {
            // Insert new user into the database
            $sql = "INSERT INTO registration(username, password) VALUES ('$username', '$pass1')";
            try {
                $query = mysqli_query($conn, $sql);
                if ($query) {

                    ?>
                    <script>
                        alert("Registration Done");
                    window.location="log-in.php";

                    </script>

                    <?php
                }
            } catch (mysqli_sql_exception $e) {
                ?>
                <script>alert("Something went wrong: <?php echo $e->getMessage(); ?>");</script>
                <?php
            }
        }
    }
}

?>
