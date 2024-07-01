<?php

require_once "connection.php";

try{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start();
        $title = $_POST['title'];
        $picture = $_POST['image'];
        $content = $_POST['blog_content'];
        $user = $_SESSION['user_id'];
        $current_date = date("Y/m/d");

        $querry = "INSERT into tbl_blog (blog_author, blog_published_date,blog_title,blog_picture,blog_contents)
         VALUES (?,?,?,?,?)";
        $bind_statement= $connect->prepare($querry);
        $bind_statement->bind_param("issss",$user, $current_date, $title, $picture, $content);
        $result = $bind_statement->execute();
        if($result){
            header("Location: ../pages/dashboard.php");
        }
    }

}catch(Exception $e){
    echo $e->getMessage();
}




?>