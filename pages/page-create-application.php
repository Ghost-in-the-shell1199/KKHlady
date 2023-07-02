<?php
    require_once('./header.php');
?>

<body>
    <h2>Create an application post</h2>
    <form id="addApplicationForm">
        Title <br>
        <input type="text" name="appTitle" placeholder="Add a title"><br>
        Description <br> 
        <input type="text" name="appDescription" placeholder="Add a description"><br><br>
        <input type="hidden" name="developerID" value="">
        <input type="submit" value="Next">
    </form>

    <div id="statusMessage"></div>
</body>
<?php
    require_once('./footer.php');
?>

</html>

<script src="../js/manage-applications.js"></script>