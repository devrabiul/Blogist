<?php include '../../configs/helper.php' ?>
<?php include '../dashboard_inc/header.php' ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Title -->
    <div class="row justify-content-between aling-items-center mx-2">
        <div>
            <h1 class="h3 mb-4 text-gray-800">All Post</h1>
        </div>
        <div>
            <a href="post_add.php" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Post</a>
        </div>
    </div>

    <!-- Post info Table -->
    <section>
        <table class="table table-straped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Tilte</th>
                    <th>Category</th>
                    <th>Update At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $posts = getPosts();
                foreach ($posts as $key => $post){?>
                <tr>
                    <td><?=$key+1;?></td>
                    <td>
                        <img src="uploads/<?=$post['post_thumbnail']?>" alt="" width="40" height="40" style="border-radius: 50%;">
                    </td>
                    <td><?=$post['post_title']?></td>
                    <td><?=$post['post_catagory']?></td>
                    <td><?=$post['update_at']?></td>
                    <td>
                    <?php if ($post['status'] == 1) { ?>
                        <a href="#" class="btn btn-sm btn-success">Active</a>
                    <?php }else{ ?>
                        <a href="#" class="btn btn-sm btn-danger">Dective</a>
                    <?php } ?>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary mb-2 mx-1">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-danger mb-2">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>

</div>
<!-- /.container-fluid -->

<?php include '../dashboard_inc/footer.php' ?>
