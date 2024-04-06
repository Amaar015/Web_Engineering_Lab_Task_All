<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Headlines</title>
</head>
<body>
    <h1>News Headlines</h1>
    <?php foreach ($newsData as $news): ?>
        <div>
            <h2><?php echo $news['headline']; ?></h2>
            <img src="<?php echo $news['image']; ?>" alt="<?php echo $news['headline']; ?>">
            <p><?php echo $news['detail']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
