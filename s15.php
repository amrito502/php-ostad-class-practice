<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Your Name : 
        <input type="text" name="name">
        <button type="submit" name="btn">Submit</button>
    </form>
    <?php 
        if(isset($_POST['btn'])){
            echo "Your Name is : ".$_POST['name'];
        }
    
    ?>
</body>
</html>