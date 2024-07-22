<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Right Price Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include "../includes/navigation.php" ?>    
    <main class="container mt-4 flex-grow-1">
        <div class="search-bar d-flex justify-content-center mb-4">
            <?php
                // get search
                $search = isset($_GET['search']) ? $_GET['search'] : '';
            ?>
            <input type="text" id="searchInput" class="form-control rounded-pill" placeholder="Search" style="max-width: 600px;" value="<?php echo htmlspecialchars($search); ?>">
            <img src="../images/Search.png" alt="Search Icon" class="search-icon ml-2" onclick="searchFunction()">
        </div>
        <div class="row">
            <?php
                require_once '../php/connection.php';

                //sql
                $sql = "SELECT b.blog_author, b.blog_published_date, b.blog_title, b.blog_contents, b.blog_id,
                               u.fname, u.lname 
                        FROM tbl_blog b
                        JOIN tbl_user u ON b.blog_author = u.user_id
                        WHERE b.blog_contents LIKE '%$search%'";
                $result = $connect->query($sql);

                if ($result->num_rows > 0) {
                    //  HTML
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="col-md-3 mb-4">';
                        echo '<div class="blog-card p-3 rounded">';
                        echo '<p>' . $row["blog_contents"] . '</p>';
                        echo '<a href="blogRead.php?id=' . $row["blog_id"] . '">.....Read More</a>';
                        echo '<hr>';
                        echo '<p class="author-date">';
                        echo '<span>' . $row["fname"] . ' ' . $row["lname"] . '</span><br>';
                        echo '<span>' . $row["blog_published_date"] . '</span>';
                        echo '</p>';
                        echo '</div>';
                        echo '<h5 class="text-center mt-2">' . $row["blog_title"] . '</h5>';
                        echo '</div>';
                    }
                } else {
                    echo "<tr><td colspan='3' class='text-center'>No results found</td></tr>";
                }
                $connect->close();
            ?>
        </div>
    </main>
    <footer class="footer mt-5">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="footer-left">
                <img src="Images/RightPriceLogo.jpeg" alt="Logo" class="footer-logo">
                <h4>Right Price</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
            </div>
            <div class="footer-right">
                <ul class="footer-links list-inline">
                    <li class="list-inline-item"><a href="#">About</a></li>
                    <li class="list-inline-item"><a href="#">Contact</a></li>
                    <li class="list-inline-item"><a href="#">Careers</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function searchFunction() {
            var searchInput = document.getElementById('searchInput').value;
            window.location.href = 'blogs.php?search=' + searchInput;
        }
    </script>
</body>

</html>
