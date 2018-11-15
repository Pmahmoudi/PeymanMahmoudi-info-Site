<?php
session_start();
include "db-management/db-user-management.php";
// Incase the the user has been redirected to index.php?logout
//  log the user out.
if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}
$homeNav = "index.php";
$playlistOverviewNav = "";
$logoutNav = "";
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

<header>

    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <strong>SpotiTube</strong>
            </a>
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <strong>Home</strong>
            </a>
            <a href="playlists.php" class="navbar-brand d-flex align-items-center">
                <strong>Playlists</strong>
            </a>
        </div>
    </div>

</header>

<main role="main">


    <section class="jumbotron text-center">
        <div class="container">
        <div class="container d-flex justify-content-between">
            <h1 class="jumbotron-heading">SpotiTube</h1>
            <p class="lead text-muted">This is a template for a simple marketing or informational website. It icludes a large callout called a jumbotron and three supporting pieces of content.
                Use it as a starting point to create something more unique.</p>
        </div>
        </div>
    </section>

    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="container">
        <div class="col-md-4">
            <embed width="300" height="200" src="https://www.youtube.com/v/tgbNymZ7vqY">
        </div>

        <div class="col-md-4">
            <embed width="300" height="200" src="https://www.youtube.com/v/tgbNymZ7vqY">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <embed width="300" height="200" src="https://www.youtube.com/v/tgbNymZ7vqY">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <embed width="300" height="200" src="https://www.youtube.com/v/tgbNymZ7vqY">
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
            </div>
            </embed
        </div>
    </div>
    </div>
</main>
<hr>
<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>@ 2016 Company, lnc.</p>
    </div>
</footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>