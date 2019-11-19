<?php
    include 'includes/header.php';
?>

    <div class="content">
        <div class="content-one">
            <div class="image"></div>
                <h2>Student registration</h2>
                    <div class="hr-one"> </div>

                    <form action="includes/reg.php" method="POST">
                        <br><b style="color: red;">Personal Details:</b> <br> <br>
                        <input style="width: 27%;" class="reg" placeholder="Firstname" type="text" name="fname"> 
                        <input style="width: 30%;" class="reg" placeholder="Middle name" type="text" name="mname">
                        <input style="width: 32%;" class="reg" placeholder="Lastname" type="text" name="lname">
                        <input style="width: 95%;" class="reg" placeholder="Address"type="text" name="address">
                        <input style="width: 25%;" class="reg" placeholder="Telephone" type="text" name="tel">
                        <input style="width: 34%;" class="reg" placeholder="E-mail" type="text" name="email">
                        <input style="width: 30%;" class="reg" placeholder="Fax" type="text" name="fax">
                        <br><br><b style="color:red;">Login Details:</b> <br> <br>
                        <div class="hr-one"> </div>
                        <input style="width: 45%;" class="reg"  placeholder="Username" type="text" name="uname"><br>
                        <input style="width: 45%" class="reg" placeholder="Password" type="password" name="pwd">
                        <input style="width: 45%" class="reg" placeholder="Re-enter Password" type="password" name="repwd"> <br>
                        <br><button class="reg-button" name="submit" type="submit">Submit</button>
                        <br><c>Already registered? <a href="index.php">Sign in</a></c>
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