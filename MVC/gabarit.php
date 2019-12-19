<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="text-center">
    <a href="/"><img src="images/CPNVinfo.png" width="100px"></a>
</header>
<div class="container">
<?= $content ?>
</div>
<footer class="text-center">
    <img src="images/fb.png" width="20px" height="20px">
    <img src="images/twitter.png" width="20px" height="20px">
    <img src="images/insta.png" width="20px" height="20px">
    <img src="images/snap.png" width="20px" height="20px">
</footer>
</body>
</html>
