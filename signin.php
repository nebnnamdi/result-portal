<?php
    include 'includes/header.php';
?>

    <div class="content">
        <div class="content-one">
            <div class="image"></div>
            <h2>Login</h2>
            <div class="hr-one"> </div>
            <form action="includes/login.php" method="POST">
                <input class="login" placeholder="Username" type="text" name="uname"> <br>
                <input class="login" placeholder="Password" type="password" name="pwd"><br>
                <button class="button" type="submit" name="submit">Login</button> <c>Not registered? <a href="registration.php">Sign up</a></c>
            </form>
                
        </div>

        <div class="content-two">
            <div id="box-one">
                <h3>QUICK LINKS<br></h3> 
                <div id="boxOne"><a href="#">PORTAL</a></div>
                <div id="boxOne"><a href="#">TEACHERS</a></div>
                <div id="boxOne"><a href="#">DATES AND FEES</a></div>
                <div id="boxOne"><a href="#">FORMS, POLICIES AND PROCEDURES</a></div>
                <div id="boxOne"><a href="#">TERMS AND CONDITIONS</a></div>
            </div>

            <div id="box-two">
                <h3 class="">CONTACT<br></h3> 
                <div><i class="fas fa-map-marker-alt"></i> 53 Old Ojo Road, Kuje, Amuwo, Lagos.</div>
                <div><i class="fas fa-phone"></i> +234 (803) 415 1651</div>
                <div><i class="fas fa-envelope"></i> nebnnamdi@gmail.com</div>
            </div>
            
        </div>
    </div>

<?php
    include 'includes/footer.php';
?>