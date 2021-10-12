<!doctype html>
<html lang="en">
    <?php
        //includes
        include 'connection.php';
    ?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>

    <body>
        <div class="products">
            <?php
                $sql = "SELECT * 
                        FROM   tblProduct";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result))
                {
                    echo "ID: ".$row["ProductID"]."<br>";
                    echo "Name: ".$row["Name"]."<br>";
                    echo "Description: ".$row["Description"]."<br>";
                    echo "Price: ".$row["Price"]."<br>";
                    echo "<a href='view_product_details.php?id=".$row["ProductID"]."&add=true'>View Further Details</a><br>";
                }
            ?>
        </div>
    </body>
</html>