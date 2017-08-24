<?php
require('db.php');
$db = db_init();
$title = $_POST['title'];
$nick = $_POST['nick'];
$pw = $_POST['pw'];
$context = $_POST['context'];
$time = date("Y-m-d H:i:s", time());
if($title == NULL){
        echo "<script>alert(\"제목을 입력해주세요\");</script>";
        echo "<script>history.go(-1);</script>";
}
else if($nick == NULL){
        echo "<script>alert(\"이름을 입력해주세요\");</script>";
        echo "<script>history.go(-1);</script>";
}

else if($pw == NULL){
        echo "<script>alert(\"PASSWORD를 입력해주세요\");</script>";
        echo "<script>history.go(-1);</script>";
}
else if($context == NULL){
        echo "<script>alert(\" 내용을 입력해주세요.\");</script>";
        echo "<script>history.go(-1);</script>";

}
$target_dir = "./updir/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOK= 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])){
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false){
		echo "File is an image - ".$check["mime"].".";
		$uploadOk = 1;
	}else{
		echo "File is not an image.";
	}
}
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
$quy = "insert into Boards values(NULL,'".$title."', '".$time."', '".$context."', '".$pw."', '".$nick."','".$_FILES["fileToUpload"]["name"]."')";
$db->query($quy);
echo  "<script>alert(\" 글 작성 완료.\");</script>";
$db->close();

echo "<script>location.href='/board_list.php';</script>";
?>
