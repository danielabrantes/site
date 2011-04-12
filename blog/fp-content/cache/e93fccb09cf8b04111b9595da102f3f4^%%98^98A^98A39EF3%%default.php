<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:25
         compiled from admin:config/default */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:config/default', 4, false),array('modifier', 'notempty', 'admin:config/default', 15, false),array('modifier', 'escape', 'admin:config/default', 16, false),array('modifier', 'date', 'admin:config/default', 76, false),array('modifier', 'date_format', 'admin:config/default', 89, false),array('function', 'html_submit', 'admin:config/default', 134, false),)), $this); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>


<div id="admin-config" class="option-set">

<div id="admin-config-general">

<h2> <?php echo $this->_tpl_vars['panelstrings']['gensetts']; ?>
 </h2>

	<dl class="option-list">
	<dt><label for="title"> <?php echo $this->_tpl_vars['panelstrings']['blogtitle']; ?>
 </label></dt>
	<dd><input type="text" name="title" id="title" class="textinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['title'])) ? $this->_run_mod_handler('notempty', true, $_tmp, ' field-error') : smarty_modifier_notempty($_tmp, ' field-error')); ?>
" 
	value="<?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['TITLE'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
	</dd>
	
	
	<dt><label for="subtitle"> <?php echo $this->_tpl_vars['panelstrings']['blogsubtitle']; ?>
 </label></dt>
	<dd><input type="text" name="subtitle" id="subtitle" class="bigtextinput"  value="<?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['subtitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></dd>
	
	<dt><label for="blogfooter"> <?php echo $this->_tpl_vars['panelstrings']['blogfooter']; ?>
 </label></dt>
	<dd><input type="text" name="blogfooter" id="blogfooter" class="textinput" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['footer'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></dd>
	
	<dt><label for="author"> <?php echo $this->_tpl_vars['panelstrings']['blogauthor']; ?>
 </label></dt>
	<dd><input type="text" name="author" id="author" class="textinput" value="<?php echo $this->_tpl_vars['flatpress']['author']; ?>
" /></dd>
	
	
	<dt><label for="www"> <?php echo $this->_tpl_vars['panelstrings']['blogurl']; ?>
 </label></dt>
	<dd><input type="text" name="www" id="www" class="textinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['www'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
"
			value="<?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['www'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /></dd>
	
	
	<dt><label for="email"> <?php echo $this->_tpl_vars['panelstrings']['blogemail']; ?>
 </label></dt>
	<dd><input type="text" name="email" id="email" class="textinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['email'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" 
	value="<?php echo $this->_tpl_vars['flatpress']['email']; ?>
" /></dd>
	
	<dt> <?php echo $this->_tpl_vars['panelstrings']['notifications']; ?>
 </dt>
	<dd> 
	<label for="notify"> 
	<input type="checkbox" name="notify" id="notify"<?php if ($this->_tpl_vars['flatpress']['NOTIFY']): ?>checked="checked"<?php endif; ?> /> 
	<?php echo $this->_tpl_vars['panelstrings']['mailnotify']; ?>
 
	</label> 
	</dd>
	
	<dt><label for="startpage"> <?php echo $this->_tpl_vars['panelstrings']['startpage']; ?>
 </label></dt>
	<dd><select name="startpage" id="startpage" class="textinput">
		<option value=":NULL:">
			<?php echo $this->_tpl_vars['panelstrings']['stdstartpage']; ?>

		</option>
	<?php $_from = $this->_tpl_vars['static_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['staticid'] => $this->_tpl_vars['staticpage']):
?>
		<option value="<?php echo $this->_tpl_vars['staticid']; ?>
"<?php if ($this->_tpl_vars['staticid'] == $this->_tpl_vars['fp_config']['general']['startpage']): ?> selected="selected"<?php endif; ?>>
			<?php echo $this->_tpl_vars['staticpage']['subject']; ?>

		</option>
	<?php endforeach; endif; unset($_from); ?>
	</select>
	</dd>
	
	<dt><label for="maxentries"> <?php echo $this->_tpl_vars['panelstrings']['blogmaxentries']; ?>
 </label></dt>
	<dd><input type="text" name="maxentries" id="maxentries" 
	class="smalltextinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['maxentries'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" value="<?php echo $this->_tpl_vars['flatpress']['maxentries']; ?>
" /></dd>
	
	
	</dl>

</div>

<div id="admin-config-intsetts">

<h2> <?php echo $this->_tpl_vars['panelstrings']['intsetts']; ?>
  </h2>

	<dl class="option-list">
		<dt> <?php echo $this->_tpl_vars['panelstrings']['utctime']; ?>
 </dt>
		<?php $this->assign('temp_time', "%b %d %Y %H:%M:%S"); ?>
		<dd> <code> <?php echo ((is_array($_tmp='r')) ? $this->_run_mod_handler('date', true, $_tmp, time()) : date($_tmp, time())); ?>
 </code> </dd>
		
		<dt><label for="timeoffset"> <?php echo $this->_tpl_vars['panelstrings']['timeoffset']; ?>
 </label></dt>
		<dd><input type="text" name="timeoffset" id="timeoffset" 
			class="smalltextinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['timeoffset'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" 
			value="<?php echo $this->_tpl_vars['fp_config']['locale']['timeoffset']; ?>
" /> <?php echo $this->_tpl_vars['panelstrings']['hours']; ?>
 
		</dd>


		<dt><label for="dateformat"> <?php echo $this->_tpl_vars['panelstrings']['dateformat']; ?>
 </label></dt>
		<dd>	<p> <input type="text" name="dateformat" id="dateformat" 
			class="textinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['dateformat'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" 
			value="<?php echo $this->_tpl_vars['fp_config']['locale']['dateformat']; ?>
" /> </p>
			<p> <?php echo $this->_tpl_vars['panelstrings']['output']; ?>
:   <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['fp_config']['locale']['dateformat']) : theme_date_format($_tmp, $this->_tpl_vars['fp_config']['locale']['dateformat'])); ?>
  </p>
		</dd>

		<dt><label for="dateformatshort"> <?php echo $this->_tpl_vars['panelstrings']['dateformatshort']; ?>
 </label></dt>
		<dd>	<p> <input type="text" name="dateformatshort" id="dateformatshort" 
			class="textinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['dateformatshort'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" 
			value="<?php echo $this->_tpl_vars['fp_config']['locale']['dateformatshort']; ?>
" /> </p>
			<p> <?php echo $this->_tpl_vars['panelstrings']['output']; ?>
:   <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['fp_config']['locale']['dateformatshort']) : theme_date_format($_tmp, $this->_tpl_vars['fp_config']['locale']['dateformatshort'])); ?>
  </p>
		</dd>

		<dt><label for="timeformat"> <?php echo $this->_tpl_vars['panelstrings']['timeformat']; ?>
 </label></dt>
		<dd>	<p> <input type="text" name="timeformat" id="timeformat" 
			class="textinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['timeformat'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" 
			value="<?php echo $this->_tpl_vars['fp_config']['locale']['timeformat']; ?>
" /> </p>
			<p> <?php echo $this->_tpl_vars['panelstrings']['output']; ?>
:  <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['fp_config']['locale']['timeformat']) : theme_date_format($_tmp, $this->_tpl_vars['fp_config']['locale']['timeformat'])); ?>
  </p>
		</dd>

	
		<dt><label for="lang"> <?php echo $this->_tpl_vars['panelstrings']['langchoice']; ?>
 </label></dt>
		<dd>	
		<select name="lang" id="lang" class="textinput">
		<?php $_from = $this->_tpl_vars['lang_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['langsetts']):
?>
			<option value="<?php echo $this->_tpl_vars['langsetts']['locale']; ?>
" 
				<?php if ($this->_tpl_vars['langsetts']['locale'] == $this->_tpl_vars['fp_config']['locale']['lang']): ?>selected="selected"<?php endif; ?>>
				<?php echo $this->_tpl_vars['langsetts']['id']; ?>

			</option>
		<?php endforeach; endif; unset($_from); ?>
		</select>
		</dd>
		
		<dt> <label for="charset"> <?php echo $this->_tpl_vars['panelstrings']['charset']; ?>
 </label></dt>
		<dd> <p><input type="text" name="charset" id="charset" 
			class="smalltextinput<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['charset'])) ? $this->_run_mod_handler('notempty', true, $_tmp, " field-error") : smarty_modifier_notempty($_tmp, " field-error")); ?>
" 
			value="<?php echo $this->_tpl_vars['fp_config']['locale']['charset']; ?>
" /></p>
			<p><?php echo $this->_tpl_vars['panelstrings']['charsettip']; ?>
</p>
		</dd>
	

	</dl>

</div>

</div>

<div class="buttonbar">
<?php echo smarty_function_html_submit(array('name' => 'save','id' => 'save','value' => $this->_tpl_vars['panelstrings']['submit']), $this);?>

</div>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

