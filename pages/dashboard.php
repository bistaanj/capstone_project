<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Right Price Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3 bg-light">
        <div class="logo">
            <img src="../images/RightPriceLogo.jpeg" alt="Logo">
            </div>
        <nav>
            <ul class="nav">
                <li class="nav-item text-center">
                    <a class="nav-link d-flex flex-column align-items-center" href="dashboard.php">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link d-flex flex-column align-items-center" href="wishlist.php">
                        <i class="bi bi-bag-check"></i>
                        <span>Wishlist</span>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link d-flex flex-column align-items-center" href="../php/marketProducts.php">
                        <i class="bi bi-shop"></i>
                        <span>Market</span>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link d-flex flex-column align-items-center" href="blogs.html">
                        <i class="bi bi-pencil-square"></i>
                        <span>Blogs</span>
                    </a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link d-flex flex-column align-items-center" href="../php/logout.php">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container-fluid mt-4">
        <div class="row text-center">
            <div class="col-md-6 d-flex m-auto  bg-primary">
                <h2 class="text-center">Your Overview</h2>
            </div>
        </div>
        <div class="row">            
            <aside class="col-md-3">
                <div class="sidebar p-3 rounded">
                    <div class="username mb-4 d-flex align-items-center">
                        <i class="bi bi-person-circle" style="margin-right: 10px;"></i>
                        <span style="color: yellow;">Username</span>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3 d-flex align-items-center">
                            <i class="bi bi-box"></i>
                            <a class="nav-link" href="sell_product.php">Sell a Product</a>
                        </li>
                        <li class="nav-item mb-3 d-flex align-items-center">
                            <i class="bi bi-box-seam"></i>
                            <a class="nav-link" href="#">Your Products</a>
                        </li>
                        <li class="nav-item mb-3 d-flex align-items-center">
                            <i class="bi bi-pencil-square"></i>
                            <a class="nav-link" href="postblog.php">Post a Blog</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <section class="col-md-9">
                <div class="row text-center">
                    <div class="col-md-6 mb-3">
                        <div class="overview-box rounded p-4">
                            <h1>10</h1>
                            <p>Products on Sale</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="overview-box rounded p-4">
                            <h1>10</h1>
                            <p>Products on Auction</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="overview-box rounded p-4">
                            <h1>3</h1>
                            <p>Products on Wishlist</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="overview-box rounded p-4">
                            <h1>5</h1>
                            <p>Blogs Posted</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="footer mt-5">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="footer-left">
                <img src="Images/RightPriceLogo.jpeg" alt="Logo" class="footer-logo">
                <h4>Right Price</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
</body>
</html>
