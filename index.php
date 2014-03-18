<?php
include 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
  <title>Upload a file</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" lang="en" content="" />
  <link href="css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table>
<tr>
  <td>File selection:</td>
  <td><input type="file" id="files" name="files[]" multiple /></td>
</tr>
<tr>
  <td>Progress:</td>
  <td><div id="progress_bar"><div class="percent">0%</div></div></td>
</tr>
<tr>
  <td>Status:</td>
  <td><span id="status"></span></td>
</tr>
</table>

<script src="js/index.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
window.amazon_path = '<?php echo "{$s3_url}{$s3_bucket}/"; ?>';
document.getElementById('files').addEventListener('change', handleFileSelect, false);
setProgress(0, 'Waiting for upload.');
</script>
</body>
</html>