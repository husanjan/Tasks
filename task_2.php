<!--2) Write HTML code to display img1.jpg on the screen. Then, use Javascript or jQuery to write a code that-->
<!--toggles the img1.jpg on hover to img2.jpg. On mouse out, it should toggle back to img1.jpg.-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
<img title="Hello" class="mt-lg-4" src="img/1.jpg" width="300"  onmouseover="this.src='img/2.png'" onmouseout="this.src='img/1.jpg'" />
</body>
</html>