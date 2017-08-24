<html>
<head>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require('db.php');
$db = db_init();
$num = $_GET['num'];
$quy = 'select title, context, author, password, date, file from Boards where number = "'.$num.'"';
echo $quy;
$result = $db->query($quy);
$row = $result->fetch_array(MYSQLI_ASSOC);
if($result->num_rows==0){
	printf("Errormessage: %s\n", $db->error);
	echo "<script>alert(\"해당 글이 존재하지않습니다.\");</script>";
        echo "<script>location.href='./board_list.php'</script>";

}


?>
       <link rel="stylesheet"  href="./main_Login.css">
        <link rel="stylesheet"  href="./board.css">

</head>
<body>
<div id="read">
                <p>제목 : <?= $row["title"] ?></p>
                <p>이름 : <?= $row["author"] ?></p>
                <p>작성일 : <?= $row["date"] ?></p>
                <p>내용</p>
                <p id="content"><?= $row["context"] ?></p>
		<a href='download.php?filename=<?= $row["file"]?>'><?= $row["file"]?></a></br>
                <form action="./board_list.php">
                        <input type="submit" value="목록가기">
                </form>
        </div>
</body>
</html>
