<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:13
         compiled from C:%5CUsers%5Cpedro%5CDocuments%5CNetBeansProjects%5Csite%5Cblog/admin/main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'C:\\Users\\pedro\\Documents\\NetBeansProjects\\site\\blog/admin/main.tpl', 8, false),)), $this); ?>

	<ul id="admin-tabmenu">
		<?php $_from = $this->_tpl_vars['menubar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tab']):
?>
		<?php if ($this->_tpl_vars['tab'] == $this->_tpl_vars['panel']): ?>
		
		<li id="admin-<?php echo $this->_tpl_vars['tab']; ?>
">
			<a class="admin-tab-current" href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=<?php echo $this->_tpl_vars['tab']; ?>
">
				<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['admin']['panels'][$this->_tpl_vars['tab']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['tab']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['tab'])); ?>

			</a>
		</li>
		<?php else: ?>
		<li id="admin-<?php echo $this->_tpl_vars['tab']; ?>
">
			<a href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=<?php echo $this->_tpl_vars['tab']; ?>
">
				<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['admin']['panels'][$this->_tpl_vars['tab']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['tab']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['tab'])); ?>

			</a>
		</li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	
	<?php if ($this->_tpl_vars['submenu']): ?>
	<ul id="admin-submenu">
		<?php $_from = $this->_tpl_vars['submenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subtab'] => $this->_tpl_vars['item']):
?>
		<?php if ($this->_tpl_vars['item']): ?>
		<li id="admin-<?php echo $this->_tpl_vars['panel']; ?>
-<?php echo $this->_tpl_vars['subtab']; ?>
">
			<a <?php if ($this->_tpl_vars['action'] == $this->_tpl_vars['subtab']): ?>class="active" <?php endif; ?>
				href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=<?php echo $this->_tpl_vars['panel']; ?>
&amp;action=<?php echo $this->_tpl_vars['subtab']; ?>
">
			<?php echo ((is_array($_tmp=@$this->_tpl_vars['lang']['admin'][$this->_tpl_vars['panel']]['submenu'][$this->_tpl_vars['subtab']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['subtab']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['subtab'])); ?>

			</a>
		</li>
		<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
	<?php endif; ?>
	
	<div id="admin-content">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=@$this->_tpl_vars['admin_resource'])) ? $this->_run_mod_handler('default', true, $_tmp, "admin:".($this->_tpl_vars['panel'])."/".($this->_tpl_vars['action'])) : smarty_modifier_default($_tmp, "admin:".($this->_tpl_vars['panel'])."/".($this->_tpl_vars['action']))), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	</div>