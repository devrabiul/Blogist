<?php require '../../configs/helper.php'; ?>
<?php

if(isset($_POST['logoUpload'])){
    createLogo($_POST);
}

if(isset($_GET['id']) && isset($_GET['status']) == 'deactive'){
    $id = $_GET['id'];
    logoDeactive($id);
}

if(isset($_GET['id']) && isset($_GET['action']) == 'delete'){
    $id = $_GET['id'];
    logoDelete($id);
}

?>