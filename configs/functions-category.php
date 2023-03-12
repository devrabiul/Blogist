<?php

function getCategories(){
    global $dbCon;
    $categoryTB = mysqli_query($dbCon, "SELECT * FROM `category`");
    return $categoryTB;
}

function categoryAdd($cateInfo){
    global $dbCon;

    $name = mysqli_real_escape_string($dbCon, $cateInfo['name']);
    $slug = strtolower(str_replace(' ','-', $name));

    $query = mysqli_query($dbCon, "INSERT INTO `category`(`name`, `slug`) VALUES ('$name','$slug')");
    
if($query){ ?>
<script>
    window.location.href='category.php';
</script>
<?php }

}

