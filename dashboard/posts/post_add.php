<?php session_start();?>
<?php include '../dashboard_inc/header.php' ?>
<?php include '../../configs/helper.php' ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Title -->
    <div class="row justify-content-between aling-items-center mx-2">
        <div>
            <h1 class="h3 mb-4 text-gray-800">Add Post</h1>
        </div>
        <div>
            <a href="posts.php" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
    </div>

    <!-- Post info Table -->
    <section>
        <div class="row justify-content-center">
            <div class="col-6">
            <div class="card  shadow">
                <div class="card-body">
                    <form action="post_add_post.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="post_title">Title</label>
                            <input type="text" name="post_title" id="post_title" class="form-control form-control-sm" placeholder="Type your title">
                        </div>
                        <div class="mb-3">
                            <label for="post_catagory">Category</label>
                            <select name="post_catagory" id="post_catagory" class="form-control form-control-sm">
                                <option value="">Select a category</option>
                                <?php $categoryTB = getCategories();
                                foreach($categoryTB as $category) {?>
                                <option value="<?=$category['name']?>"><?=$category['name']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post_content">Content</label>
                            <textarea name="post_content" id="post_content" rows="4" class="form-control form-control-sm" placeholder="Type your content"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="post_thumbnail">Upload</label>
                            <input type="file" name="post_thumbnail" id="post_thumbnail" class="form-control form_bless form-control-sm">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" name="postLoad" class="btn btn-sm btn-info">Publish now</button>
                        </div>
                        
                    </form>  
                </div>
            </div>
            </div>
        </div>
    </section>

</div>
<!-- /.container-fluid -->

<?php include '../dashboard_inc/footer.php' ?>

<?php if (isset($_SESSION['post_success'])) { ?>
        <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: '<?=$_SESSION['post_success']?>',
        showConfirmButton: false,
        timer: 1500
        })
        </script>
<?php }  unset ($_SESSION['post_success']); ?>

<?php if (isset($_SESSION['post_err'])) { ?>
        <script>
        Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: '<?=$_SESSION['post_err']?>',
        showConfirmButton: false,
        timer: 1500
        })
        </script>
<?php }  unset ($_SESSION['post_err']); ?>