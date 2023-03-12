<?php


// Logo Insert Fuction
function createLogo($logo){
    global $dbCon;

    $logoName = $_FILES['logo']['name'];
    $logoLoc = $_FILES['logo']['tmp_name'];

    $explode = explode('.', $logoName);
    $extention = end($explode);
    $nameGen = 'logo_'.rand(1,1000).'.'.$extention;
    
    $newLoc = '../uploads/settings/'.$nameGen;
    move_uploaded_file($logoLoc, $newLoc);

    $updateLogo = mysqli_query($dbCon, "UPDATE `logo` SET `status`='0'");
    $query = mysqli_query($dbCon, "INSERT INTO `logo`(`logo`) VALUES ('$nameGen')");

    $newID = mysqli_insert_id($dbCon);
    $updateLogo2 = mysqli_query($dbCon, "UPDATE `logo` SET `status`='1' WHERE id=$newID");

    header('location:logo.php');
}

// Status Change
function logoDeactive($id){
    global $dbCon;
    $statusID = $id;
    $updateLogo = mysqli_query($dbCon, "UPDATE `logo` SET `status`='0'");
    $updateLogo2 = mysqli_query($dbCon, "UPDATE `logo` SET `status`='1' WHERE id=$statusID");
    header('location:logo.php');
}

// logo delete
function logoDelete($id){
    global $dbCon;

    $logoID = $id;
    
    $logoSelect = mysqli_query($dbCon, "SELECT * FROM `logo` WHERE id=$logoID");
    $logoAssoc = mysqli_fetch_assoc($logoSelect);

    if($logoAssoc['status'] == 1){
        header('location:logo.php');
    }else{
        $deleteLogoPic = '../uploads/settings/'.$logoAssoc['logo'];
        unlink($deleteLogoPic);
        $logoDelete = mysqli_query($dbCon, "DELETE FROM `logo` WHERE id=$logoID");
        header('location:logo.php');
    }


}