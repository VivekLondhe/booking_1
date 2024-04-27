<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Bootstrap Structure</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Add custom styles here */
  </style>
</head>
<body>

  <div class="container">
    <!-- Post -->
    <div class="card my-3">
      <div class="card-body">
        <h5 class="card-title">Post Title</h5>
        <p class="card-text">Post Content</p>
        <p class="card-text"><small class="text-muted">Posted by Username</small></p>
      </div>
    </div>

    <!-- Comment -->
    <div class="card my-3">
      <div class="card-body">
        <p class="card-text">Comment Content</p>
        <p class="card-text"><small class="text-muted">Commented by Username</small></p>
      </div>
    </div>

    <!-- User -->
    <div class="card my-3">
      <div class="card-body">
        <h5 class="card-title">Username</h5>
        <p class="card-text">User Bio</p>
        <p class="card-text"><small class="text-muted">User Location</small></p>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
