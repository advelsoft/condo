<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">	
	<title><?php echo $company[0]->CompanyName; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'content/img/cloud-icon.png'; ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/metisMenu/metisMenu.min.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/forms.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/style.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/custom-css.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/dashboard.css";?>">
	<link rel="stylesheet" href="<?php echo base_url()."content/css/jquery/jquery.timepicker.css";?>" >
	<!-- Include external CSS. -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
	<!-- Include Editor style. -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
</head>
<style type="text/css">
	body {
	  font-family: 'Roboto', sans-serif;
	}
</style>
<body>