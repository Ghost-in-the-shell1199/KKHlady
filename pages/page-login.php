<?php
    require_once('./page-header.php');
?>
<body>
    <button id="loginBtn">Login</button>    
    <div id="loginPopup">
        <div class="loginForm">
            <h2>Login</h2>
            <form method="POST" action="./dashboard.php">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
<script src="../javascript/login.js"></script>
</body>