<!DOCTYPE>

<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <link rel="stylesheet"  href="./main_Login.css">
        <link rel="stylesheet"  href="./board.css">
        
        <title>글 작성</title>

	</head>
	<body>
	<div id="edit">
		<form action="process_write.php" method="post" enctype="multipart/form-data">
			<p>제목 <input type="text" size="100" name = 'title' ?></p>
			<p>이름 <input type="text" size="20"   name = 'nick'?></p>
			<p>비밀번호 <input type="password" name="pw" size="30"></p>
			<p>내용</p>
			<textarea cols="100" rows="30" name="context"></textarea> <br>
			<p>파일 업로드 <input type="file" name="fileToUpload"><br>
			<input type="submit" value="작성하기">
		</form>	
		<form action="main.php">
			<input type="submit" value="취소">
		</form>
	</div>
	
</body>

</html>
