<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] == '/home.php') echo "active"; ?>" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] == '/contact.php') echo "active"; ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  <?php if ($_SERVER['REQUEST_URI'] == '/about.php') echo "active"; ?>" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <body>