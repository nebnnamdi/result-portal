<?php

include_once 'includes/header.php';

echo "Welcome ".$_SESSION['uname'];
echo '<form action="includes/logout.php" method="POST">
<button type="submit" name="submit">Logout</button>
</form>';

include_once 'includes/footer.php';