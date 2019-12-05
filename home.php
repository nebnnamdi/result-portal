<?php
    include_once 'includes/header.php';

    if (!isset($_SESSION['uid'])) {
        header("Location: index.php?page=not_found");
        exit();
    }
?>
<?php
    include_once 'includes/top-bar.php';
?>

<div class="dashboard-main">
    
    <?php
        include_once 'includes/side-bar.php';
    ?>

    <div class="dashboard-main-two">
        <div class="main-two">
            <?php
                echo "<h2>Welcome, <b>".$_SESSION['uname'].'</b></h2>';
            ?>
        </div>

        <div class="main-two-content">
            <div class="sec-one">
                <h2><i class="fas fa-credit-card"></i><a href="#"> e-Wallet</a></h2>
                <p><a href="#">Load e-wallet, make payments and check balance.</a></p>
            </div>
        </div>

        <div class="main-two-content">
            <div class="sec-one">
                <h2><i class="fas fa-bell"></i><a href="#"> Notifications</a></h2>
                <p><a href="#">Edit your profile, update and manage other settings.</a></p>
            </div>
        </div>

        <div class="main-two-content">
            <div class="sec-one">
                <h2><i class="fas fa-cogs"></i><a href="#"> Settings</a></h2>
                <p><a href="#">Edit your profile, update and manage other settings.</a></p>
            </div>
        </div>

    </div>

    <div class="dashboard-others"></div>

</div>
    
<?php
    include_once 'includes/footer.php';
?>