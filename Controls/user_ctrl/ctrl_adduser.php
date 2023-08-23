<?php


require_once("../../Models/clsUser.php");
$clsUser= new clsUser();
$imageUser=$_FILES["imageUser"];
$imageNameConvert= $imageName['name'];
$fullName=$_REQUEST["fullName"];
$address=$_REQUEST["address"];
$phoneNumber=$_REQUEST["phoneNumber"];
$email=$_REQUEST["email"];
$userName=$_REQUEST["userName"];
$password=$_REQUEST["password"];

if(isset($imageUser) && $imageUser["error"]==0){// upload file ảnh sang thư mục Upload/images.
   $kq= move_uploaded_file($imageUser["tmp_name"],"../../Upload/imagesUser/$imageName");
}
else{
    echo "Lỗi upload ảnh vào server";
}
if($clsUser->checkUser($userName)){

    $olderUrl="http://localhost/Noraute/register.php";
    header("Location:$olderUrl?ErrorCreAcount=1");
}
else{
    // $cslDatabase= new clsDatabase();
    // $ketqua=$cslDatabase->executeQuery($sql,$data);
   
    $ketqua=$clsUser->addUser($userName,$password,$fullName,$email,$phoneNumber,$address,$imageNameConvert);
    if($ketqua==true){
        $olderUrl="http://localhost/Noraute/register.php" ;
     header("Location:$olderUrl?CreAcountSuccess=1");
    }
    else{
        $olderUrl="http://localhost/Noraute/register.php" ;
        header("Location:$olderUrl?CreAcountSuccess=-1");
    }
}
?>