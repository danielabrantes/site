<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:15
         compiled from shared:entryadminctrls.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'admincontrols', 'shared:entryadminctrls.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('admincontrols', array()); $_block_repeat=true;smarty_block_admincontrols($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="admincontrols">
<a href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=entry&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
&amp;action=write">[<?php echo $this->_tpl_vars['lang']['main']['btn_edit']; ?>
]</a>
<a href="<?php echo @BLOG_BASEURL; ?>
admin.php?p=entry&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
&amp;action=delete">[<?php echo $this->_tpl_vars['lang']['main']['btn_delete']; ?>
]</a>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_admincontrols($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>