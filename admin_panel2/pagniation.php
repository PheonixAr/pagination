<?php
$conn = mysqli_connect('localhost','root','','pagniation');
$sql = "select id,title form page";
$result= mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .mt-100(margin-top:50px;);
        .mt-30(margin-top:30px;);
        .mt-30(margin-bottom:30px;);
    </style>
</head>
<body>
    <div class="continer mt- 100">
        <h2 class="list-group">Pagnation Example</h2>
        <ul class="list-group">
            <?php while ($row=mysqli_fetch_assoc($result)){ ?>
            <li class="list-group-item"><?php echo $row ['title']?></li>
            <?php } ?>
        </ul>
        <ul class="pagination mt -30">
                <li class="page-item active"><a  class='page-link' href="#">1</a></li>
                <li class="page-item "><a  class='page-link' href="#">2</a></li>
                <li class="page-item "><a  class='page-link' href="#">3</a></li>
        </ul> 
    </div>
</body>
</html>