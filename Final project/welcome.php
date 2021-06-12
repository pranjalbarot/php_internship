<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<?php
    ob_start();
    /* include header.php file*/
    include ('header1.php');
?>

<?php

    /*  include banner area  */
        include ('Template/_banner-area.php');

    /*  include top sale section */
        include ('Template/_top-sale.php');

    /*  include special price section  */
         include ('Template/_special-price.php');

    /*  include banner ads  */
        include ('Template/_banner-ads.php');

    /*  include new phones section  */
        include ('Template/_new-phones.php');

    /*  include blog area  */
         include ('Template/_blogs.php');

?>


<?php
// include footer.php file
include ('footer.php');
?>