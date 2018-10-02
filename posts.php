<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <?php foreach ($posts as $post) {;?>
      <div class="container">
        <h1><a href="#"><?php echo $post['title']; ?></a></h1>
        <h3>pubblicato il <?php echo $post['published_at']; ?></h3>
        <?php ?>
        <p><?php echo substr($post['content'], 0, 150) . '...';?></p>
      </div>
    <?php }; ?>
  </body>
</html>
