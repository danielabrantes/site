<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:36
         compiled from admin:uploader/default */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:uploader/default', 23, false),array('function', 'html_submit', 'admin:uploader/default', 43, false),)), $this); ?>
<?php if ($_REQUEST['mod'] != 'inline'): ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>
<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php if ($this->_tpl_vars['success']): ?>
	<ul id="admin-uploader-filelist">
	<?php $_from = $this->_tpl_vars['uploaded_files']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file']):
?>
				<li><?php echo $this->_tpl_vars['file']; ?>
</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
<?php endif; ?>

<?php $this->_tag_stack[] = array('html_form', array('enctype' => 'multipart/form-data')); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
	
	<?php if ($_REQUEST['mod'] != 'inline'): ?>
	<fieldset><legend><?php echo $this->_tpl_vars['panelstrings']['fset1']; ?>
</legend>
	<?php endif; ?>
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
		<input type="file" name="upload[]" />
	
	<?php if ($_REQUEST['mod'] != 'inline'): ?>
	</fieldset>
	<?php endif; ?>
	
	<div class="buttonbar">
	<?php echo smarty_function_html_submit(array('name' => 'upload','id' => 'upload','value' => $this->_tpl_vars['panelstrings']['submit']), $this);?>
	
	</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>