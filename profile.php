<?php
    include_once 'includes/header.php';
    include_once 'includes/top-bar.php';

    if (!isset($_SESSION['uid'])) {
        header('Location: index.php?=error404');
        exit();
    }
?>

<div class="dashboard-main">
    <?php
        include_once "includes/side-bar.php";
    ?>

    <div class="dashboard-main-two">
        <div class="main-two">
            <?php
                echo "<h2>Profile Details:</h2>";
            ?>
        </div>

        <?php
            $user = new User();
            $userProfile = $user->profile();
        ?>

        <div class="main-two-content">
            <div class="profile-one">
                <table width=70%>
                    <tr>
                        <td><b>User ID:</b></td>
                        <td><?php echo $_SESSION["uid"]?></td>
                    </tr>
                    <tr>
                        <td><b>Username:</b></td>
                        <td><?php echo $_SESSION["uname"]?></td>
                    </tr>
                    <tr>
                        <td><b>First Name:</b></td>
                        <td><?php echo $_SESSION["fname"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Middle Name:</b></td>
                        <td><?php echo $_SESSION["mname"]?></td>
                    </tr>
                    <tr>
                        <td><b>Last Name:</b></td>
                        <td><?php echo $_SESSION["lname"]?></td>
                    </tr>
                    <tr>
                        <td><b>Telephone:</b></td>
                        <td><?php echo $_SESSION["tel"]?></td>
                    </tr>
                    <tr>
                        <td><b>Address:</b></td>
                        <td><?php echo $_SESSION["addr"]?></td>
                    </tr>
                    <tr>
                        <td><b>E-mail:</b></td>
                        <td><?php echo $_SESSION["email"]?></td>
                    </tr>
                    <tr>
                        <td><b>Fax:</b></td>
                        <td><?php echo $_SESSION["fax"] ?></td>
                    </tr>
                </table>
                <a href="edit.php"><button><i class="fas fa-edit"></i> Edit profile</button></a>
            </div>
        </div>
    </div>
</div>
<?php
    include_once "includes/footer.php";
?>