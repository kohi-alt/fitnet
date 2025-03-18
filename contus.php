<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - FitGym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navbar (Fixed to Top) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="pics/m1.png" alt="Gym Logo" width="50"> FitNet
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contus.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-primary text-white" href="signin.php">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Header -->
    <section class="contact-header">
        <div class="container text-center text-white">
            <h1>Contact FitNet</h1>
            <p>We'd love to hear from you! Reach out with any questions or feedback.</p>
        </div>
    </section>

    <!-- Contact Details & Form -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <!-- Contact Details -->
                <div class="col-md-6 contact-info">
                    <h2>Get in Touch</h2>
                    <p><strong>📍 Address:</strong> Poblacion, San Antono, Nueva Ecija</p>
                    <p><strong>📞 Phone:</strong> +63 955 403 5979</p>
                    <p><strong>📧 Email:</strong> contact@fitnet.com</p>
                    <p><strong>🕒 Hours:</strong> Mon - Fri: 6 AM - 10 PM | Sat - Sun: 8 AM - 8 PM</p>
                    <!-- Map -->
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?..." width="100%" height="250" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-md-6">
                    <h2>Send Us a Message</h2>
                    <form action="contact-form-handler.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
