
<?php

$posts = mysqli_query($dbCon, "SELECT * FROM `posts`");
foreach ($posts as $post) { ?>

<div class="post-card -center"><a class="card__cover" href="post_standard.php"><img src="<?=$systemBaseURL?>/dashboard/posts/uploads/<?=$post['post_thumbnail']?>"
            alt="Looking for some feedback for this rejected track" /></a>
    <div class="card__content">
        <h5 class="card__content-category"><?=$post['post_catagory']?></h5><a class="card__content-title"
            href="post_standard.php"><?=$post['post_title']?></a>
        <div class="card__content-info">
            <div class="info__time"><i class="far fa-clock"></i>
                <p><?=$post['created_at']?></p>
            </div>
            <div class="info__comment"><i class="far fa-comment"></i>
                <p>3</p>
            </div>
        </div>
    </div>
</div>

<?php } ?>