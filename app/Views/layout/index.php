<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= (isset($pageTitle)) ? $pageTitle : 'Document'?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap.min.css');?>">
</head>
<body>
	<?= $this->renderSection('content');?>	
</body>	
</html>