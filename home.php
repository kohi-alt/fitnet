<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitNet Social</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
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
                    
                    <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contus.php">Contact Us</a></li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">FitNet</a>
            <input class="form-control w-25" type="search" placeholder="Search FitNet" aria-label="Search">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#">Home</a>
                <a class="nav-link" href="#">Profile</a>
                <a class="nav-link" href="#">Messages</a>
                <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="signin.php">Logout</a></li>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4 d-flex">
        <!-- Sidebar -->
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">Friends</li>
                <li class="list-group-item">Workouts</li>
                <li class="list-group-item">Nutrition</li>
            </ul>
        </div>
        
        <!-- Main Feed -->
        <div class="col-md-6">
            <!-- Post Box -->
            <div class="card mb-3 p-3">
                <input type="text" class="form-control" placeholder="What's on your mind?">
                <button class="btn btn-primary mt-2">Post</button>
            </div>
            
            <!-- Sample Post -->
            <div class="card p-3 mb-3">
                <h5>Jaybee Miranda</h5>
                <p>Had a great workout today! Feeling strong. 💪</p>
                <img src="pics/post.jpg" class="img-fluid rounded" alt="Workout Photo">
                <div class="d-flex justify-content-between mt-2">
                    <button class="btn btn-light">Like</button>
                    <button class="btn btn-light">Comment</button>
                    <button class="btn btn-light">Share</button>
                </div>
            </div>
        </div>
        
        <!-- Right Sidebar -->
        <div class="col-md-3">
            <h5>Online Friends</h5>
            <ul class="list-group">
                <li class="list-group-item">Angelo Faustino</li>
                <li class="list-group-item">Harvy Castillo</li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
