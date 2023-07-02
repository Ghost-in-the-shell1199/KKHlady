<?php
    require_once('./page-header.php');
?>
<body>
    <h1>Create Developer</h1>
    <form id="addDeveloperForm">
        Developer Name: <input type="text" name="name"><br>
        <input type="submit" value="Create Developer Post">
    </form>
    <div id="statusMessage"></div>
</body>
<?php
    require_once('./footer.php');
?>
</html>

<script src="../js/manage-applications.js"></script>