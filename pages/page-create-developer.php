<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/createDeveloper.css">
</head>

<?php
    require_once('./page-header.php');
?>
<body>
    <h1>Create Developer</h1>
    <form id="addDeveloperForm">
         Name: <input class="name" type="text" name="name" placeholder="Developer Name"><br>
        <input class="button" type="submit" value="Create Developer Post">
    </form>
    <div id="statusMessage"></div>
</body>
<?php
    require_once('./footer.php');
?>
</html>

<script src="../js/manage-applications.js"></script>