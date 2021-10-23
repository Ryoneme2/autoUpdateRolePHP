<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Type Your Name"/>
        <label for="sername">Sername</label>
        <input type="text" name="sername" placeholder="Type Your Name"/>
        <p>level department</p>
        <input type="radio" id="one" name="department" value="one">
        <label for="one">1</label><br>
        <input type="radio" id="two" name="department" value="two">
        <label for="two">2</label><br>
        <input type="radio" id="three" name="department" value="three">
        <label for="three">3</label><br>
        <input type="radio" id="four" name="department" value="four">
        <label for="four">4</label><br>
        <input type="submit">
    </form>
</body>
</html>