<?php require '../../configs/helper.php' ?>
<?php include '../dashboard_inc/header.php' ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Logo</h1>

    <div class="row">
        <div class="col-4">
            <div class="card shadow">
                <div class="card-body">

                    <?php
                        $logoTb = mysqli_query($dbCon, "SELECT * FROM `logo` WHERE status=1");
                        $logoAssoc = mysqli_fetch_assoc($logoTb);
                    ?>

                    <img src="../uploads/settings/<?=$logoAssoc['logo']?>" alt="<?=$logoAssoc['logo']?>" id="LogoPreview" width="100">

                    <br><br>
                    <form action="settings_post.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="">Upload Logo</label>
                            <input type="file" name="logo" class="form-control form_bless" onchange="document.getElementById('LogoPreview').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="logoUpload" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-8">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php 
                            $logos = mysqli_query($dbCon, "SELECT * FROM `logo`");
                            foreach ($logos as $key => $logo){ ?>
                            <tr>
                                <td><?=$key+1;?></td>
                                <td>
                                    <img src="../uploads/settings/<?=$logo['logo']?>" alt="<?=$logo['logo']?>" width="50">
                                </td>
                                <td>
                                    <?php if($logo['status'] == 0){ ?>
                                           <a href="settings_post.php?id=<?=$logo['id']?>&status=deactive" class="btn btn-sm btn-danger">Deactive</a>
                                    <?php } else { ?>
                                        <button class="btn btn-sm btn-success" disabled>Active</button>
                                    <?php } ?>
                                </td>
                                <td>
                                <a href="settings_post.php?id=<?=$logo['id']?>&action=delete" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                </a>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php include '../dashboard_inc/footer.php' ?>