
<?php
if (isset($_POST['login'])) {
    $lemail = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
    $lpass = $_POST['pass'];

    $query = "SELECT * FROM registration WHERE username = '$lemail'";
    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        if (password_verify($lpass, $row['password'])) {
            
            header("Location: home.html");
            exit();
        } else {
            ?>
            <script>
                alert("Incorrect password");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("User not found");
        </script>
        <?php
    }
}
?>