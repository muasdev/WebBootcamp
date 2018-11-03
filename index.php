<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ayo bootcamp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<h1 class="text-center mt-5 mb-5" style="color:#0f0af9;">Daftar barang</h1>

<?php
    $con=mysqli_connect("localhost","root","","db_web");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$result = mysqli_query($con,"SELECT 
product_categories.id, product_categories.name, products.name as category
FROM
product_categories
    INNER JOIN
products ON product_categories.id=products.category_id");
?>

    <table class="table table-striped table-bordered table-sm">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Category</th>
    
        </tr>
        </thead> 

        <tbody>
            <?php
            while($row = mysqli_fetch_array($result))
            {

            ?>
                <tr>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['name'] ?> </td>
                    <td> <?php echo $row['category'] ?> </td>
                </tr>
                <?php
            }
                ?>
        </tbody>
    </table>

</body>
</html>