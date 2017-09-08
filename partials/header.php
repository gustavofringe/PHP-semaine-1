<?php
define ('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cars</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Favicon -->
    <link rel="icon" href="<?= BASE_URL; ?>favicon.ico" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/normalize.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>css/album.css">
    <!-- End CSS Files -->

    <!-- font files -->
    <link href="https://" rel="stylesheet">
    <!-- End font files -->


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 py-4">
                <h4 class="text-white">About</h4>
                <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 py-4">
                <h4 class="text-white">Contact</h4>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Follow on Twitter</a></li>
                    <li><a href="#" class="text-white">Like on Facebook</a></li>
                    <li><a href="#" class="text-white">Email me</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand">Album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</div>