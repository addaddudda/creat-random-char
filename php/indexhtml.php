<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random char</title>
</head>
<body>
    <form action="php.php" method="post">
        <p>
        <label ><input type="radio" name="answer" value="yes">특수문자 허용</label>    
        </p>
        <p>
        <label><input type="radio" name="answer" value="no">특수문자 허용하지 않음</label>  
        </p>
        <p>
            <input type="text" name="range" maxlength="2">
        </p>
        <p>
            <input type="submit" value="submit">
        </p>
    </form>
</body>
</html>