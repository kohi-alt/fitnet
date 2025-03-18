<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - FitNet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar (Fixed to Top) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="pics/m1.png" alt="Gym Logo" width="50"> FitNet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contus.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="signin.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Blog Header -->
    <header class="blog-header">
        <div class="container text-center">
            <h1>Welcome to Our Fitness Blog</h1>
            <p>Stay updated with the latest fitness tips, workout guides, and healthy lifestyle advice.</p>
        </div>
    </header>

    <!-- Blog Content (Example Sections) -->
    <section class="container blog-content">
        <h2 class="text-center">Latest Blog Posts</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="pics/b1.jpg" class="card-img-top" alt="Blog Image 1">
                    <div class="card-body">
                        <h5 class="card-title">10-Minute Home Workouts</h5>
                        <p class="card-text">Short on time?  Should We Try these quick yet effective exercises.</p>
                        <a href="post1.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="pics/b2.jpg" class="card-img-top" alt="Blog Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Best Diets for Muscle Growth</h5>
                        <p class="card-text">What to eat for lean muscle gains? Get nutrition tips here to maintain body muscle.</p>
                        <a href="post2.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="pics/b3.jpg" class="card-img-top" alt="Blog Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Yoga for Stress Relief</h5>
                        <p class="card-text">Learn how yoga can help you relax and improve mental health.</p>
                        <a href="post3.html" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
