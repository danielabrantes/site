<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:13
         compiled from cpheader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'action', 'cpheader.tpl', 6, false),array('modifier', 'tag', 'cpheader.tpl', 10, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $this->_tpl_vars['flatpress']['title']; ?>
<?php echo $this->_tpl_vars['pagetitle']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['flatpress']['charset']; ?>
" />
	<?php echo theme_smarty_function_action(array('hook' => 'wp_head'), $this);?>

	<?php echo theme_smarty_function_action(array('hook' => 'admin_head'), $this);?>

</head>

<body class="<?php echo ((is_array($_tmp="admin-".($this->_tpl_vars['panel'])."-".($this->_tpl_vars['action']))) ? $this->_run_mod_handler('tag', true, $_tmp, 'admin_body_class') : theme_apply_filters_wrapper($_tmp, 'admin_body_class')); ?>
">
	<div id="body-container">
	<div id="outer-container">
	