<?php
include __DIR__."/../fun.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset( $_POST['post-create'])) {
    

    $filesize=$_FILES['img']['size'];
    $filetmp = $_FILES['img']['tmp_name'];
    $filename = $_FILES['img']['name'];
    $title = $_POST['title'];
    $text = $_POST['text'];
    $allowded = array('jpg','png','jpeg');
    $path = pathinfo($filename);
    $ext = $path["extension"];
if (!in_array($ext,$allowded)) {
    echo "Error";
}

    $post = [
        'title'=>$title,
        'text'=>$text,
        'img'=>$filename
    ];
    
   insert('posts', $post);

    move_uploaded_file($filetmp,"upload/".$filename);
    header("location: index.php");

    
}

//select
$posts = selectAll('posts');


//edit
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $post = selectAll('posts', $id);
}
//update
if($_SERVER['REQUEST_METHOD']==='POST' && isset( $_POST['post-update'] )){
    
    $id = trim( $_POST['id'] );
    $filetmp = $_FILES['img']['tmp_name'];
    $img = $_POST['img'];
    $post = [
         'title'=> trim( $_POST['title'] ),
         'text'=> trim( $_POST['text'] ),
         'img'=> $img
    ];
 
    move_uploaded_file($filetmp,"upload/".$img);
    update('posts',$id, $post);
    header('location: index.php');
 }

 if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) {
    $id = $_GET['delete'];
   
  
    delete('posts', $id);
    header('location: index.php');
}

?>