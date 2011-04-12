<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:13
         compiled from admin:maintain/default */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cmd_link', 'admin:maintain/default', 19, false),array('modifier', 'action_link', 'admin:maintain/default', 23, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['files']): ?>
<p><?php echo $this->_tpl_vars['panelstrings']['chmod_info']; ?>
</p>
<p><a href="admin.php?p=maintain"><?php echo $this->_tpl_vars['panelstrings']['opt0']; ?>
</a></p>
<ul> 
<?php $_from = $this->_tpl_vars['files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
	<li><?php echo $this->_tpl_vars['file']; ?>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
<p><a href="admin.php?p=maintain"><?php echo $this->_tpl_vars['panelstrings']['opt0']; ?>
</a></p>
<?php elseif ($this->_tpl_vars['phpinfo']): ?>
<p><a href="admin.php?p=maintain"><?php echo $this->_tpl_vars['panelstrings']['opt0']; ?>
</a></p>
<?php echo $this->_tpl_vars['phpinfo']; ?>

<p><a href="admin.php?p=maintain"><?php echo $this->_tpl_vars['panelstrings']['opt0']; ?>
</a></p>
<?php else: ?>
<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>
<ul>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'do', 'rebuild') : admin_filter_command($_tmp, 'do', 'rebuild')); ?>
"><?php echo $this->_tpl_vars['panelstrings']['opt1']; ?>
</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'do', 'purgetplcache') : admin_filter_command($_tmp, 'do', 'purgetplcache')); ?>
"><?php echo $this->_tpl_vars['panelstrings']['opt2']; ?>
</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'do', 'restorechmods') : admin_filter_command($_tmp, 'do', 'restorechmods')); ?>
"><?php echo $this->_tpl_vars['panelstrings']['opt3']; ?>
</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'do', 'phpinfo') : admin_filter_command($_tmp, 'do', 'phpinfo')); ?>
"><?php echo $this->_tpl_vars['panelstrings']['opt4']; ?>
</a></li>
<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'updates') : admin_filter_action($_tmp, 'updates')); ?>
"><?php echo $this->_tpl_vars['panelstrings']['opt5']; ?>
</a></li>
</ul>
<?php endif; ?>