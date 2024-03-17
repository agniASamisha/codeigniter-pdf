<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <?php foreach ($posts as $post): ?>
        <h2><?php echo $post['title']; ?></h2>
        <p><?php echo $post['content']; ?></p>
    <?php endforeach; ?>

    <!-- Pagination Links -->
    <?php echo $pager->links(); ?>
</body>
</html>
