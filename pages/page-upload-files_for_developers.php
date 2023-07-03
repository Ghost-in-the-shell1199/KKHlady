<?php
    require_once('./page-header.php');
?>
<style>
.center {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
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