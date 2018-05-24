<html>
<head>
<title>Upload Form</title>
</head>
<body>
<?php echo base_url();?>
<?php if(isset($error)){ echo $error;}?>

<?php echo form_open_multipart('change_profile_picture/do_upload');?>

<input type="file" name="img" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>

