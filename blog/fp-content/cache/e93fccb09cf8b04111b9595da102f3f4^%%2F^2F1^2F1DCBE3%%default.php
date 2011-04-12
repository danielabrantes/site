<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:31
         compiled from admin:plugin/default */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:plugin/default', 7, false),array('modifier', 'in_array', 'admin:plugin/default', 22, false),array('modifier', 'plugin_getinfo', 'admin:plugin/default', 23, false),array('modifier', 'cmd_link', 'admin:plugin/default', 31, false),)), $this); ?>

<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>
<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	

	<table id="plugin-table">
	<thead id="plugin-table-head">
		<tr>
			<th><?php echo $this->_tpl_vars['panelstrings']['name']; ?>
</th>
			<th class="main-cell"><?php echo $this->_tpl_vars['panelstrings']['description']; ?>
</th>
			<th><?php echo $this->_tpl_vars['panelstrings']['author']; ?>
</th>
			<th><?php echo $this->_tpl_vars['panelstrings']['version']; ?>
</th>
			<th><?php echo $this->_tpl_vars['panelstrings']['action']; ?>
</th>
		</tr>
	</thead>
	<tbody id="plugin-table-body">
	<?php $_from = $this->_tpl_vars['pluginlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin']):
?>
	<?php $this->assign('inarr', ((is_array($_tmp=$this->_tpl_vars['plugin'])) ? $this->_run_mod_handler('in_array', true, $_tmp, $this->_tpl_vars['enabledlist']) : in_array($_tmp, $this->_tpl_vars['enabledlist']))); ?>
	<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin'])) ? $this->_run_mod_handler('plugin_getinfo', true, $_tmp) : plugin_getinfo($_tmp)); ?>

	<tr<?php if ($this->_tpl_vars['inarr']): ?> class="enabled" <?php endif; ?>>
		<td> <?php echo $this->_tpl_vars['name']; ?>
 </td>
		<td class="main-cell"> <?php echo $this->_tpl_vars['description']; ?>
 </td>
		<td> <?php echo $this->_tpl_vars['author']; ?>
 </td>
		<td> <?php echo $this->_tpl_vars['version']; ?>
 </td>
		<td> <?php if ($this->_tpl_vars['inarr']): ?> 
			<a class="link-disable"
			href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'disable', $this->_tpl_vars['plugin']) : admin_filter_command($_tmp, 'disable', $this->_tpl_vars['plugin'])); ?>
"> 
				<?php echo $this->_tpl_vars['panelstrings']['disable']; ?>

			</a> 
			<?php else: ?>
			<a class="link-enable" 
			href="<?php echo ((is_array($_tmp=$this->_tpl_vars['action_url'])) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'enable', $this->_tpl_vars['plugin']) : admin_filter_command($_tmp, 'enable', $this->_tpl_vars['plugin'])); ?>
"> 
				<?php echo $this->_tpl_vars['panelstrings']['enable']; ?>

			</a> 
			<?php endif; ?>
		</td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
	</table>
	
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>