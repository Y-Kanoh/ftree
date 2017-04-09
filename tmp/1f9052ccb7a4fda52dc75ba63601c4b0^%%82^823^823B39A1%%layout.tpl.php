<?php /* Smarty version 2.6.26, created on 2017-04-03 23:50:58
         compiled from layout.tpl */ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['config']['url']; ?>
css/ethna.css" type="text/css" />
<script src="js/d3/d3.min.js" charset="utf-8"></script>
<title>Familytree</title>
</head>
<body>
<div id="header">
    <h1>Familytree</h1>
</div>

<div id="main">
<?php echo $this->_tpl_vars['content']; ?>

</div>

<div id="footer">
    Powered By <a href="http://ethna.jp">Ethna</a>-<?php echo @ETHNA_VERSION; ?>
.
</div>
</body>
</html>