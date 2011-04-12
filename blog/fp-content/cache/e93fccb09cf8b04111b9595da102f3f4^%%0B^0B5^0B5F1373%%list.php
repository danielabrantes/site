<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:38
         compiled from admin:static/list */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'static_block', 'admin:static/list', 8, false),array('block', 'html_form', 'admin:static/list', 10, false),array('block', 'static', 'admin:static/list', 19, false),array('modifier', 'action_link', 'admin:static/list', 25, false),array('modifier', 'truncate', 'admin:static/list', 26, false),array('modifier', 'link', 'admin:static/list', 32, false),)), $this); ?>

<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>

<?php $this->_tag_stack[] = array('static_block', array()); $_block_repeat=true;smarty_block_statics($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
<table class="entrylist">
<thead><tr><th><?php echo $this->_tpl_vars['panelstrings']['name']; ?>
</th>
<th class="main-cell"><?php echo $this->_tpl_vars['panelstrings']['title']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['author']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['action']; ?>
</th></tr></thead>
<tbody>
<?php $this->_tag_stack[] = array('static', array()); $_block_repeat=true;smarty_block_static($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<tr>
<td><?php echo $this->_tpl_vars['id']; ?>
</td>
<td class="main-cell">
<a class="link-general"  
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'write') : admin_filter_action($_tmp, 'write')); ?>
&amp;page=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 70) : smarty_modifier_truncate($_tmp, 70)); ?>

</a>
</td>
<td><?php echo $this->_tpl_vars['author']; ?>
</td>
<td>
<a class="link-general" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'page_link') : theme_apply_filters_link_wrapper($_tmp, 'page_link')); ?>
">
<?php echo $this->_tpl_vars['panelstrings']['act_view']; ?>

</a>
<a 
class="link-general" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'write') : admin_filter_action($_tmp, 'write')); ?>
&amp;page=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo $this->_tpl_vars['panelstrings']['act_edit']; ?>

</a>
<a class="link-delete" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'delete') : admin_filter_action($_tmp, 'delete')); ?>
&amp;page=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo $this->_tpl_vars['panelstrings']['act_del']; ?>

</a>
</td>

</tr>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_static($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tbody></table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_statics($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

