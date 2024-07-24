<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Right Price Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<?php include "../includes/navigation.php" ?>    
<div class="container mt-5">

<?php
    if (isset($_GET['success'])) {
        ?>
        <script> 
        window.addEventListener('load',function() {
        swal("Success", "Product addded to wishlist", "success");  
        })
    </script>
    <?php
    } elseif (isset($_GET['error'])) {
    ?>

        <script> 
        window.addEventListener('load',function() {
        swal("Declined", "Product already in wishlist", "error");  
        })
    </script>
    <?php
    }
    ?>

    <h2 class="text-center">WISHLIST</h2>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>PRICE</th>
                <th class="text-center">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // connection
            require_once '../php/connection.php'; 

            session_start();
            $user_id = $_SESSION['user_id']; // get session id

            // get data 
            $sql = "SELECT wi.wishlist_item_id, wi.product_id, p.product_name, p.product_price, p.product_image
                    FROM tbl_wishlist_item wi
                    JOIN tbl_products p ON wi.product_id = p.product_id
                    where wi.user_id =   $user_id";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td><div> <img src='" . $row['product_image'] . "' alt='' class='product-image img-thumbnail'> </div> <div class='text-center'> " .  $row['product_name'] . " </div></td>
                            <td>$" . number_format($row['product_price'], 2) . "</td>
                            <td>
                                <form action='../php/delete_wishlist_item.php' method='post' style='display:inline;'>
                                    <input type='hidden' name='wishlist_item_id' value='" . $row['wishlist_item_id'] . "'>
                                    <button type='submit' class='btn btn-primary btn-sm '>Delete Item 🗑️</button>
                                    
                                    <button type='button' class='btn btn-primary mt-2'>
                                    <a style='color:white; text-decoration:none' href='../php/getProductinfo.php?id=" . $row['product_id'] . "'>
                                        View Product
                                    </a>
                                    </button>
                                </form>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3' class='text-center'>No items in wishlist</td></tr>";
            }

            // Close connection
            $connect->close();
            ?>
        </tbody>
    </table>
</div>
<!-- <?php include '../includes/footer.php' ?> -->
        </body>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
