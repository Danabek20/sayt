<?php
include("../layout/header.php");

include  __DIR__.'/../../app/controllers/category.php';
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


            <div class="col-md-3 col-md-offset-2">
	        
    		<h1>Create Category</h1>
    		
    		<form action="" method="POST">
    		    
    		
    		    
    		    <div class="form-group">
    		        <label for="title">Category name <span class="require">*</span></label>
    		        <input type="text"  class="form-control" name="name" />
    		    </div>
    		   
    		    
    		   
    		    
    		    <div class="form-group">
    		        <button type="submit" name="category-create" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>