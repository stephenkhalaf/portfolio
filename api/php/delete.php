<?php
include_once "../config/database.php";
if(isset($_GET['admin_id'])){
    $admin_id = $_GET['admin_id'];

    $sql = mysqli_query($conn, "DELETE FROM admin WHERE (unique_id = $admin_id) AND (unique_id != 1715514510)");
    header("Location: ../admin.php");
}

if(isset($_GET['about_id'])){
    $about_id = $_GET['about_id'];

    $sql = mysqli_query($conn, "DELETE FROM about WHERE unique_id = $about_id");
    $sql2 = mysqli_query($conn, "SELECT * FROM about WHERE unique_id = $about_id ");
    $about = mysqli_fetch_assoc($sql2);
    $image1 = $about['image1'];
    $image2 = $about['image2'];
    if(file_exists("../../uploads/$image1")){
        unlink("../../uploads/$image1");
    }

    if(file_exists("../../uploads/$image2")){
        unlink("../../uploads/$image2");
    }


    header("Location: ../about.php");
}

if(isset($_GET['book_id'])){
    $book_id = $_GET['book_id'];

    $sql = mysqli_query($conn, "SELECT * FROM books WHERE unique_id = $book_id ");
    if($sql){
        $book = mysqli_fetch_assoc($sql);
        $image = $book['image'];
        $sql2 = mysqli_query($conn, "DELETE FROM books WHERE unique_id = $book_id");
        if($sql2){
            $path = "../../uploads/$image";
            unlink($path);
        }
    }
    

    header("Location: ../book.php");
}

if(isset($_GET['education_id'])){
    $education_id = $_GET['education_id'];

    $sql = mysqli_query($conn, "DELETE FROM education WHERE unique_id = $education_id");
    header("Location: ../education.php");
}

if(isset($_GET['experience_id'])){
    $experience_id = $_GET['experience_id'];

    $sql = mysqli_query($conn, "DELETE FROM experience WHERE unique_id = $experience_id");
    header("Location: ../experience.php");
}
if(isset($_GET['message_id'])){
    $message_id = $_GET['message_id'];

    $sql = mysqli_query($conn, "DELETE FROM messages WHERE unique_id = $message_id");
    header("Location: ../message.php");
}
?>