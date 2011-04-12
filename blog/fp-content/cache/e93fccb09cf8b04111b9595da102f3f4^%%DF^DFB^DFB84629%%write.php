<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:23
         compiled from admin:entry/write */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:entry/write', 3, false),array('block', 'entry_block', 'admin:entry/write', 10, false),array('block', 'entry', 'admin:entry/write', 21, false),array('function', 'validate_init', 'admin:entry/write', 4, false),array('function', 'validate', 'admin:entry/write', 5, false),array('function', 'toolbar', 'admin:entry/write', 34, false),array('function', 'action', 'admin:entry/write', 39, false),array('function', 'list_categories', 'admin:entry/write', 58, false),array('function', 'html_submit', 'admin:entry/write', 74, false),array('modifier', 'notempty', 'admin:entry/write', 25, false),array('modifier', 'default', 'admin:entry/write', 27, false),array('modifier', 'wp_specialchars', 'admin:entry/write', 27, false),array('modifier', 'htmlspecialchars', 'admin:entry/write', 37, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
		<?php echo $this->_plugins['function']['validate_init'][0][0]->dummy(array('form' => $this->_tpl_vars['admin_panel_id']), $this);?>

		<?php echo $this->_plugins['function']['validate'][0][0]->dummy(array('id' => 'subject','message' => $this->_tpl_vars['panelstrings']['error']['subject'],'append' => 'error'), $this);?>

		<?php echo $this->_plugins['function']['validate'][0][0]->dummy(array('id' => 'content','message' => $this->_tpl_vars['panelstrings']['error']['content'],'append' => 'error'), $this);?>

	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<div id="admin-post-preview">
	<?php if ($this->_tpl_vars['preview']): ?>
	<fieldset id="post-preview"><legend><?php echo $this->_tpl_vars['panelstrings']['preview']; ?>
</legend>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "preview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</fieldset>
	<?php endif; ?>
	</div>

		
	
	<?php $this->_tag_stack[] = array('entry', array('content' => $this->_tpl_vars['post'],'alwaysshow' => true)); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
		<div id="admin-editor">
			<p><label for="subject"><?php echo $this->_tpl_vars['panelstrings']['subject']; ?>
</label><br />
			<input type="text" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['subject'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
				name="subject" id="subject" 
				value="<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['subject']) : smarty_modifier_default($_tmp, @$_REQUEST['subject'])))) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, 1) : wp_specialchars($_tmp, 1)); ?>
" /><br />
			<input type="hidden" name="timestamp" value="<?php echo $this->_tpl_vars['date']; ?>
" />
			<input type="hidden" name="entry" value="<?php echo $this->_tpl_vars['id']; ?>
" />
			</p>
			<p>
			<label for="content"><?php echo $this->_tpl_vars['panelstrings']['content']; ?>
</label>
			</p>
			<?php echo smarty_function_toolbar(array(), $this);?>

			<p>
			<textarea name="content" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['content'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
			id="content" rows="20" cols="74"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['content'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['content']) : smarty_modifier_default($_tmp, @$_REQUEST['content'])))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</textarea><br />
						<?php echo theme_smarty_function_action(array('hook' => 'simple_edit_form'), $this);?>


			</p>
		</div>
		
		<div id="admin-options">
	
				
				
				
		<fieldset id="admin-entry-categories"><legend><?php echo $this->_tpl_vars['panelstrings']['archive']; ?>
</legend>
			<?php echo smarty_function_list_categories(array('type' => 'form','selected' => $this->_tpl_vars['categories']), $this);?>

		</fieldset>
		
		<fieldset id="admin-entry-saveopts"><legend><?php echo $this->_tpl_vars['panelstrings']['saveopts']; ?>
</legend>
			
			<p>
			<?php $_from = $this->_tpl_vars['saved_flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flag']):
?>
			<label><input name="flags[<?php echo $this->_tpl_vars['flag']; ?>
]" <?php if ($this->_tpl_vars['categories'] && ( bool ) array_intersect ( array ( $this->_tpl_vars['flag'] ) , $this->_tpl_vars['categories'] )): ?>checked="checked"<?php endif; ?> type="checkbox" /> <?php echo $this->_tpl_vars['lang']['entry']['flags']['long'][$this->_tpl_vars['flag']]; ?>
 </label><br />
			<?php endforeach; endif; unset($_from); ?>
			</p>
			
		</fieldset>
		</div>
		
		
		<div class="buttonbar">
		<?php echo smarty_function_html_submit(array('name' => 'save','id' => 'save','value' => $this->_tpl_vars['panelstrings']['submit'],'accesskey' => 's'), $this);?>

		<?php echo smarty_function_html_submit(array('name' => 'savecontinue','id' => 'savecontinue','value' => $this->_tpl_vars['panelstrings']['savecontinue'],'accesskey' => 'c'), $this);?>

		<?php echo smarty_function_html_submit(array('name' => 'preview','id' => 'preview','value' => $this->_tpl_vars['panelstrings']['preview'],'accesskey' => 'p'), $this);?>

		</div>

	
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($_GET['entry']): ?>

<div id="admin-otheroptions">	

<h2><?php echo $this->_tpl_vars['panelstrings']['otheropts']; ?>
</h2>
	<ul>
		<?php if (! $this->_tpl_vars['draft']): ?>
		<li><a href="admin.php?p=entry&amp;entry=<?php echo $_GET['entry']; ?>
&amp;action=commentlist">
			<?php echo $this->_tpl_vars['panelstrings']['commmsg']; ?>
</a></li>
		<?php endif; ?>
		<li><a href="admin.php?p=entry&amp;entry=<?php echo $_GET['entry']; ?>
&amp;action=delete">
			<?php echo $this->_tpl_vars['panelstrings']['delmsg']; ?>
</a></li>
	</ul>

</div>

<?php endif; ?>


