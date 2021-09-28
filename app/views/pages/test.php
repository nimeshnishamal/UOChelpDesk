<?php require APPROOT . '/views/inc/header.php'; ?>


<?php
/* This is how you echo out database information on the screen
foreach ($data['users'] as $user) {
    echo "Information: " . $user->user_name . $user->user_email;
    echo "<br>";
}
*/
?>



<title><?php echo $data['title'];?></title>

<h1><?php echo $data['heading'];?></h1>

<a href="./views/pages/studentHome.php" class="mainbtn">Student</a>

<?php require APPROOT . '/views/inc/footer.php'; ?>
