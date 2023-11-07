<?php
include __DIR__."/../fun.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['category-create'])) {
    $name = $_POST['name'];
   
    insert('categories', ['name'=> $name]);
    header('location: index.php');
}

$categories = selectAll('categories');

//edit
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $category = selectAll('categories', $id);
}
//update
if($_SERVER['REQUEST_METHOD']==='POST' && isset( $_POST['category-update'] )){
    
    $id = trim( $_POST['id'] );
    $category = [
         'name'=> trim( $_POST['name'] ),
      
    ];
 
    update('categories',$id, $category);
    header('location: index.php');
 }

 if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
    $id = $_GET['delete'];
   
  
    delete('categories', $id);
    header('location:index.php');
}
?>