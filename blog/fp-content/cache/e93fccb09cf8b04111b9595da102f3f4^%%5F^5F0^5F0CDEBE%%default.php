<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:29
         compiled from admin:themes/default */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'admin:themes/default', 7, false),array('modifier', 'cmd_link', 'admin:themes/default', 25, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="current-theme">
	<h2><?php echo $this->_tpl_vars['panelstrings']['head1']; ?>
</h2>
	<img src="<?php echo $this->_tpl_vars['current_theme']['preview']; ?>
" alt="<?php echo $this->_tpl_vars['current_theme']['name']; ?>
" />
		<h5>
			<?php echo $this->_tpl_vars['current_theme']['title']; ?>
 &#8212; <?php echo ((is_array($_tmp=@$this->_tpl_vars['current_theme']['author'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['panelstrings']['noauthor']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['panelstrings']['noauthor'])); ?>

		</h5>
		
		<?php echo ((is_array($_tmp=@$this->_tpl_vars['current_theme']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['panelstrings']['nodescr']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['panelstrings']['nodescr'])); ?>

		
</div> <!-- end of #current-theme -->

<?php if ($this->_tpl_vars['available_themes']): ?>

<div id="available-themes">

<h2><?php echo $this->_tpl_vars['panelstrings']['head2']; ?>
</h2>
<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>


<ul>
<?php $_from = $this->_tpl_vars['available_themes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thm']):
?>
	<li>
		<h5><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'select', $this->_tpl_vars['thm']['id']) : admin_filter_command($_tmp, 'select', $this->_tpl_vars['thm']['id'])); ?>
"><?php echo $this->_tpl_vars['thm']['title']; ?>
</a></h5>
		<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'select', $this->_tpl_vars['thm']['id']) : admin_filter_command($_tmp, 'select', $this->_tpl_vars['thm']['id'])); ?>
"><img src="<?php echo $this->_tpl_vars['thm']['preview']; ?>
" alt="<?php echo $this->_tpl_vars['thm']['name']; ?>
" /></a>
		
		<p><?php echo ((is_array($_tmp=@$this->_tpl_vars['thm']['description'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['panelstrings']['nodescr']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['panelstrings']['nodescr'])); ?>
</p>
		
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

</div> <!-- end of #available-themes -->

<?php endif; ?>