<head>
<link rel="stylesheet" href="../css/upload.css">
</head>
<?php
    require_once('./page-header.php');
?>
<body>
<h1>upload</h1>
<div class="center">
  <form action="/action_page.php">
  <label for="files">location</label>
  <select id="files" name="files">
    <option value="files1">files1</option>
    <option value="file2">file2</option>
    <option value="file3">file3</option>
    <option value="file4">file4</option>
  </select>
</form>
  <form action="/page-upload-files.php">
  <input type="file" id="myFile" name="filename">
  <input type="submit">
</form>

</div>
</body>
<?php
    require_once('./page-footer.php');
?>