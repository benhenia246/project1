<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>

        </ul>
        <div>
            <a href=#>Register</a>
        </div>
    </div>
</nav>
<div style="margin: 20px;" class="jumbotron">
    <h1>Login</h1> <br>
    <form action="login.php" method="post">

       <h4>Username:</h4>  <input type="text" placeholder="Enter Username" name="Username"required><br>
        <h4>Password:</h4> <input type="password" placeholder="Enter password" name="password" required><br>
        <a href="lostpsw.php">Forget password?</a>
        <br>
        <input class="btn btn-primary" value="Login" type="submit">
    </form>
</div>


</html>
