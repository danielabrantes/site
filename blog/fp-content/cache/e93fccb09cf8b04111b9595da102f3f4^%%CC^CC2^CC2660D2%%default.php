<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:32
         compiled from admin:widgets/default */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:widgets/default', 7, false),array('modifier', 'default', 'admin:widgets/default', 45, false),array('function', 'html_submit', 'admin:widgets/default', 107, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>
<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php $this->_tag_stack[] = array('html_form', array('id' => "admin-widgets-default")); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
	<div id="available-widgets">
	<h2><?php echo $this->_tpl_vars['panelstrings']['availwdgs']; ?>
</h2>
	
	<div id="widget-trashcan">
		<?php echo $this->_tpl_vars['panelstrings']['trashcan']; ?>

	</div>	
	
	<ul>
	<?php $_from = $this->_tpl_vars['fp_registered_widgets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['widgetid'] => $this->_tpl_vars['widget']):
?>
		<li class="widget-class widget-id-<?php echo $this->_tpl_vars['widgetid']; ?>
"> 
						<input class="widget-id" type="hidden" name="avalwidg[]" value="<?php echo $this->_tpl_vars['widgetid']; ?>
" />
			<?php if ($this->_tpl_vars['widget']['nparams'] > 0): ?>
						<input class="textinput" style="float:right" type="hidden" />
			<?php endif; ?> 
			<p><?php echo $this->_tpl_vars['widget']['name']; ?>
</p> 
		</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>
	
	<div class="buttonbar">
	<input type="submit" name="save" value="<?php echo $this->_tpl_vars['panelstrings']['submit']; ?>
" />
	</div>

	</div>
	
	<div id="admin-widgetset-list">
	
	<h2><?php echo $this->_tpl_vars['panelstrings']['themewdgs']; ?>
</h2>
	<p><?php echo $this->_tpl_vars['panelstrings']['themewdgsdescr']; ?>
</p>
	
	<ul>
	<?php $_from = $this->_tpl_vars['widgetlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['widgetset'] => $this->_tpl_vars['widgetarr']):
?>
	<li class="admin-widgetset">
		<h3 class="widgetset-name"> 
				<?php echo ((is_array($_tmp=@$this->_tpl_vars['panelstrings']['stdsets'][$this->_tpl_vars['widgetset']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['widgetset']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['widgetset'])); ?>
 
		</h3>
		
		<ul id="widgetsetid-<?php echo $this->_tpl_vars['widgetset']; ?>
">
		<?php $_from = $this->_tpl_vars['widgetarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['widget']):
?>
			<li class="widget-instance widget-id-<?php echo $this->_tpl_vars['widget']['id']; ?>
 <?php echo $this->_tpl_vars['widget']['class']; ?>
">
				<input class="widget-id" type="hidden" name="widgets[<?php echo $this->_tpl_vars['widgetset']; ?>
][]" 
				value="<?php echo $this->_tpl_vars['widget']['id']; ?>
<?php if ($this->_tpl_vars['widget']['params']): ?>:<?php echo $this->_tpl_vars['widget']['params']; ?>
<?php endif; ?>" />
				<?php if ($this->_tpl_vars['widget']['params']): ?>
								<input class="textinput" style="float:right"  
					type="text" value="<?php echo $this->_tpl_vars['widget']['params']; ?>
"/>
				<?php endif; ?> 
				<p> <?php echo $this->_tpl_vars['widget']['name']; ?>
 </p>  
			</li> 
		<?php endforeach; else: ?>
			<li class="widget-placeholder"> Drop here </li>
		<?php endif; unset($_from); ?>
		</ul>
	</li>
	<?php endforeach; endif; unset($_from); ?>
	
	
	</ul>
	
	<?php if ($this->_tpl_vars['oldwidgetlist']): ?>
	
	<h2><?php echo $this->_tpl_vars['panelstrings']['oldwdgs']; ?>
</h2>
	<p><?php echo $this->_tpl_vars['panelstrings']['oldwdgsdescr']; ?>
</p>
	
	<ul>	
	<?php $_from = $this->_tpl_vars['oldwidgetlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['widgetset'] => $this->_tpl_vars['widgetarr']):
?>
	<li class="admin-widgetset">
		<h3 class="widgetset-name"> 
				<?php echo ((is_array($_tmp=@$this->_tpl_vars['panelstrings']['stdsets'][$this->_tpl_vars['widgetset']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['widgetset']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['widgetset'])); ?>
 
		</h3>
		
		<ul id="widgetsetid-<?php echo $this->_tpl_vars['widgetset']; ?>
">
		<?php $_from = $this->_tpl_vars['widgetarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['widget']):
?>
			<li class="widget-instance widget-id-<?php echo $this->_tpl_vars['widget']['id']; ?>
">
				<input class="widget-id" type="hidden" name="widgets[<?php echo $this->_tpl_vars['widgetset']; ?>
][]" 
				value="<?php echo $this->_tpl_vars['widget']['id']; ?>
<?php if ($this->_tpl_vars['widget']['params']): ?>:<?php echo $this->_tpl_vars['widget']['params']; ?>
<?php endif; ?>" />
				<?php if ($this->_tpl_vars['widget']['params']): ?>
								<input class="textinput" style="float:right"  
					type="text" value="<?php echo $this->_tpl_vars['widget']['params']; ?>
"/>
				<?php endif; ?> 
				<p> <?php echo $this->_tpl_vars['widget']['name']; ?>
 </p>  
			</li> 
		<?php endforeach; else: ?>
			<li class="widget-placeholder"> Drop here </li>
		<?php endif; unset($_from); ?>
		</ul>
	</li>
	<?php endforeach; endif; unset($_from); ?>
	</ul>

	<?php endif; ?>
	
	</div>
		
	<div class="buttonbar">
	<?php echo smarty_function_html_submit(array('name' => 'save','id' => 'save','value' => $this->_tpl_vars['panelstrings']['submit']), $this);?>

	</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>