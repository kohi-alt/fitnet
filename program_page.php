<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitNet Programs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
</head>
<body class="bg-dark text-white">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="pics/m1.png" width="50"> FitNet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="program_page.php">Programs</a></li>
                <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="signin.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Program Page Content -->
<div class="container mt-5 pt-5">

    <h2 class="text-center mb-4">Workout Programs & Trainer Info</h2>

    <!-- Exercises Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-secondary text-white">
                <div class="card-header">Workout Programs by Focus</div>
                <div class="card-body">
                    <ul>
                        <li><strong>Full Body:</strong> Squats, Burpees, Deadlifts</li>
                        <li><strong>Chest, Shoulders, Triceps:</strong> Bench Press, Shoulder Press, Dips</li>
                        <li><strong>Back, Biceps:</strong> Pull-Ups, Rows, Bicep Curls</li>
                        <li><strong>Legs, Core, Forearms:</strong> Lunges, Planks, Wrist Curls</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Program Structure -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-secondary text-white">
                <div class="card-header">Program Details</div>
                <div class="card-body">
                    <p><strong>Sets:</strong> 3–5</p>
                    <p><strong>Repetitions:</strong> 8–15</p>
                    <p><strong>Rest between sets:</strong> 30s–90s</p>
                    <p><strong>Time Span:</strong> 4–8 Weeks</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Diet Plan -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-secondary text-white">
                <div class="card-header">Diet Plans</div>
                <div class="card-body">
                    <ul>
                        <li><strong>Cutting:</strong> High protein, calorie deficit, cardio focus</li>
                        <li><strong>Bulking:</strong> Calorie surplus, strength training, healthy carbs</li>
                        <li><strong>Supplements:</strong> Whey protein, Creatine, Multivitamins</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Trainer Specializations -->
    <div class="row mb-5">
        <div class="col-md-12">
            <div class="card bg-secondary text-white">
                <div class="card-header">Trainer Specializations</div>
                <div class="card-body">
                    <ul>
                        <li><strong>Weight Loss:</strong> Cardio, HIIT, Nutrition guidance</li>
                        <li><strong>Muscle Building:</strong> Strength programs, Progressive overload</li>
                        <li><strong>Crossfit:</strong> High-intensity functional workouts</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
