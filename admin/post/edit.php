<?php
include("../layout/header.php");
include  __DIR__.'/../../app/controllers/post.php';

?>
<div class="container-fluid">
  <div class="row">
            <?php 
                include("../layout/nav.php");
            ?>

        </div>
      </div>
      </div>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data"> 
            <input type="hidden" value="<?=$post[0]['id']?>" name="id">
            Title: <textarea name="title" id="" cols="30" rows="2"><?=$post[0]['title']?></textarea>
            Text: <textarea name="text" id="" cols="30" rows="5"><?=$post[0]['text']?></textarea>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 col-md-6 border-bottom">
            <input type="file" name="img" class="form-control" value="<?= $post[0]['img']?>" id="exampleFormControlFile1">
                <input type="submit" name="post-update" class="btn btn-primary" value="Ok">
                </div>
            </form>
    </div>
</div>