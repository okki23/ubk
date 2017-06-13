<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to <?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css'); ?>">
        <script src="<?php echo base_url('ubk/assets/js/jquery-3.2.1.js'); ?>"> </script>
        <script src="<?php echo base_url('ubk/assets/bootstrap/js/bootstrap.min.js'); ?>"> </script>
</head>
<body>
<?php $this->load->view($content); ?>
</body>
</html>