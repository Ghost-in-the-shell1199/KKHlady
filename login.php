<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<header>
    <p>
        Department of children Development(DCD)<br>
        KK Women's and children hospital
    </p>
</header>
<body>
    <p>login in as</p>
    <button id="developer">developer</button>
    <h3>developers<h3>
    <button id="admin">admin</button>
    <h3>admin<h3>

    <button id="loginBtn">Login</button>

    <div id="loginPopup">
        <div class="loginForm">
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
<script src="login.js"></script>
</body>
</html>