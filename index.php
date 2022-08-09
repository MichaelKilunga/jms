<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>JUMACO-MS</title>
    <!-- personal icons -->
    <link rel="icon" type="image/x-icon" href="./assets/common/cc/favicon.ico">
    <!-- bootstrap file -->
    <link href="./assets/common/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       <!-- ofline fontawesome icons  -->
    <link rel="stylesheet" href="./assets/common/bootstrap/font-awesome.min.css">
    <!-- online fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- page manual css -->
    <link href="./scripts/login/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <!-- header will be here -->
    

    <main class="form-signin w-100 m-auto">
      <form>
        <img class="rounded" src="./assets/images/logo.jpg" alt="logo image" width="30%" height="30%">
        <span id="wrongUsername" class="fail"><pre> </pre></span>
        <div class="form-floating">
          <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Username</label>
        </div>
        <pre></pre>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit"><a style="color: white;" href="./scripts/dashboard/dashboard.html">Sign in</a></button>
      </form>
    </main>

    <!-- footer will be here -->

  </body>
</html>
