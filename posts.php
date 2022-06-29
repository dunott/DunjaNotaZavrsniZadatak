<?php include ('header.php'); ?>
<?php
   
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$statement = $connection->prepare($sql);
$statement->execute();
$statement->setFetchMode(PDO::FETCH_ASSOC);
$posts = $statement->fetchAll();

?>


<main role="main" class="container">

<div class="row">

<div class="col-sm-8 blog-main">

                
<?php foreach ($posts as $post) { ?>
        <div class="blog-post">
            <h2 class="blog-post-title"> <a href="./single-post.php?post_id=<?php echo $post['id']; ?>"><?php echo $post['title'];?></a></h2>
            <p class="blog-post-meta"><?php echo $post['created_at'];?> by <a href="#"><?php echo $post ['author']?></a></p>
            <p><?php echo $post['body']; ?> </p>
    </div>
<?php } ?>

<nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>

</div><!-- /.blog-main -->
        
<?php include 'sidebar.php' ?>
        
</div><!-- /.row -->

</div><!-- /.row -->

</html>


