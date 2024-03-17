<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>dashboard</title>
  <link rel="stylesheet" href="/codeigniter/public/CSS/table.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
<section class="main">
        <div class="users">
            <?php foreach ($gallery as $records): ?>
              <div class="card">
              <img src="<?php echo "http://localhost/codeigniter/public/" . $records['image']; ?>" height="100px" width="100px">
                <button><a href="<?= 'http://localhost/codeigniter/public/index.php/delete/'.$records['id']?>">Delete</a></button>
                
            </div>
                <?php endforeach; ?>
                </div>
    </section>
  <script src="/codeigniter/public/js/dashboard.js"></script>

</body>
</html>
</span>