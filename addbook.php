<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=na, initial-scale=1.0">
    <title>E-library Management</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>


<?php
// $bookname = $_POST['book_name'];
// $authorname = $_POST['author_name'];
// $pages = $_POST['pages'];
// $price = $_POST['price'];
// $unique_book_no = $_POST['book_no'];
// $copies= $_POST['copies'];

// if(!empty($bookname) ||!empty($authorname) || !empty($pages) || !empty($price) || !empty($unique_book_no) || !empty($copies)){
//     $host="localhost:3307";
//     $dbusername="root";
//     $dbpassword="";
//     $dbname=book_info;

//     $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);

//     if(mysqli_connect_error()){
//         die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
// }else{
//     // $Insert= "INSERT INTO addbook(book_name,author_name,pages,price,book_no,copies) VALUES('$bookname','$authorname','$pages','$price','$unique_book_no','$copies')";
//     // if($conn->query($Insert)){
//      echo "New record is inserted succesfully";
//     // }
//     // else{
//     // echo "Errors: ".$Insert."<br>".$conn->error;
//     // }
//      $conn->close();
// }
// }
// else{
//     echo "All fields are required";
//     die();
// }
echo " connected succesfully";
?>

</body>
</html>