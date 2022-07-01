<?php include 'header.php' ?>

<?php
 if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $created_at = date("Y-m-d h:i:s");

    $sql = "INSERT INTO posts (title, body, author, created_at) VALUES ('$title', '$body', '$author', '$created_at')";

    
    $statement = $connection->prepare($sql);
    $statement->execute();
    header("Location:/posts.php");
}
?>

<form action="create-posts.php" method="post">
    <li><label for="title"></label>upisi svoj naslov</li>
    <li><input type="text" name="title" id="title" placeholder= 'upisi svoj naslov' required></li>
    <li><label for="body"></label>Napisi svoj post</li>
    <li><textarea name="body" id="" cols="30" rows="10" placeholder="Napisi svoj post" required></textarea></li>
    <li><label for="author"></label>upisi svoje ime</li>
    <li><input type="text" name="author" id="author" placeholder='upisi svoje ime' required></li>
    <li><button type="submit" name="submit">Submit</button></li>


</form>





<?php include 'sidebar.php' ?>
<?php include 'footer.php' ?>