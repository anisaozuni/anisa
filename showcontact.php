<?php

require 'lib/functions.php';

$contacts = get_contacts();

$contacts = array_reverse($contacts);

$cleverWelcomeMessage = 'FitNess MEMBERS';
$contactCount = count($contacts);
?>

<div class="jumbotron">
        <div class="container">
            <h1><?php echo strtoupper(strtolower($cleverWelcomeMessage)); ?></h1>


<p>With over <?php echo $contactCount ?> members.</p>
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
</div>
</div>
    <!DOCTYPE html>
<html lang="en">
<head>

<head>

<title>FitNess</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style type="text/css">

.card {
background: #222;
border: 1px solid #dd2476;
color: rgba(250, 250, 250, 0.8);
margin-bottom: 2rem;
}
</style>
<div class="container mx-auto mt-4">
<div class="row">
<?php foreach ($contacts as $contact) { ?>
<div class="col-md-3">
  <div class="card" style="width: 15rem;">
<img src="assets/img/10.jpg" class="card-img-top" alt="...">
<div class="card-body onecard">
<h5 class="card-title">Name:</h5>
    <p class="card-text"><p><?php echo $contact['name']; ?></p>
    <h5>Age:</h5>
    <p><?php echo $contact['age']; ?></p>
    <h5>Email:</h5>
    <p><?php echo $contact['email']; ?></p>
    <h5>Phone:</h5>
    <p><?php echo $contact['phone']; ?></p>
    <h5>Street:</h5>
    <p><?php echo $contact['street']; ?></p>
    <h5>Health:</h5>
    <p><?php echo $contact['health']; ?></p>
    <h5>Fitness:</h5>
    <p><?php echo $contact['fitness']; ?> </p>
</div>
</div>
</div>
<?php } ?>
</div>  
</div>
    </body>
    </html>

