<?php session_start();?>
<?php include '../../configs/helper.php' ?>

<?php
if (isset($_POST['postLoad'])) {
    postUpload($_POST);
}
?>
