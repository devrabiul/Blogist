<?php

// Chacking Array
function ShowArr($arr){
    echo "<pre>";
    print_r($arr);
    die();
}

// Redirect url
function redirect($url){ ?>
<script>window.location.href='<?=$url?>'</script>
<?php }


