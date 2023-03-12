<?php 

function getPosts(){
    global $dbCon;
    $posts = mysqli_query($dbCon, "SELECT * FROM `posts`");
    return $posts;
}

function postUpload($postInfo){
    global $dbCon;

    $post_title = mysqli_real_escape_string($dbCon, $postInfo['post_title']);
    $post_slug = strtolower(str_replace('','-', $post_title));
    $post_catagory = mysqli_real_escape_string($dbCon, $postInfo['post_catagory']);
    $post_content = mysqli_real_escape_string($dbCon, $postInfo['post_content']);

    $imgName 	= $_FILES['post_thumbnail']['name'];
    $explode = explode('.', $imgName);
    $extention = end($explode);

    
    $post_thumbnail = 'post_thumb_'.rand(111111,999999).'.'.$extention;


    if (empty($post_title)) {
        $_SESSION['post_err'] = 'Give a title';
        redirect('post_add.php');
    }else if (empty($post_catagory)) {
        $_SESSION['post_err'] = 'Select a Category';
        redirect('post_add.php');
    }else if (empty($post_content)) {
        $_SESSION['post_err'] = 'Type your Content';
        redirect('post_add.php');
    }else if (empty($imgName)) {
        $_SESSION['post_err'] = 'Upload a photo';
        redirect('post_add.php');
    }else{

    if ($extention === 'png' || $extention === 'jpg' || $extention === 'jpeg') {
            $query = mysqli_query($dbCon, "INSERT INTO `posts`(`post_catagory`, `post_title`, `post_slug`, `post_content`, `post_thumbnail`) VALUES ('$post_catagory','$post_title','$post_slug','$post_content','$post_thumbnail')");

            $new_location = 'uploads/' . $post_thumbnail;
            move_uploaded_file($_FILES['post_thumbnail']['tmp_name'], $new_location);

            $_SESSION['post_success'] = 'Successfully Published';
            redirect('post_add.php');
    }else{
        $_SESSION['post_err'] = 'Must be in jpg,jpeg or png format';
        redirect('post_add.php');
    }
}

}

    // $status	;
    // $user_id	;

