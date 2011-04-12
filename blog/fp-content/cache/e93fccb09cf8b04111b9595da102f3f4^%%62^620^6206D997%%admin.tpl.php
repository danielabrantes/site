<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:13
         compiled from admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'page', 'admin.tpl', 13, false),array('function', 'controlpanel', 'admin.tpl', 15, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "cpheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

		<div id="cpmain">
			

		<div class="entry">
		
		<ul id="admin-small-nav">
			<li><a href="<?php echo @BLOG_BASEURL; ?>
">Home</a></li>
			<li><a href="<?php echo @BLOG_BASEURL; ?>
login.php?do=logout">Logout</a></li>
		</ul>
		
		<?php $this->_tag_stack[] = array('page', array()); $_block_repeat=true;smarty_block_page($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<h1 class="title"><?php echo $this->_tpl_vars['subject']; ?>
</h1>
				<div class="body"><?php echo showcontrolpanel(array(), $this);?>
</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_page($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		</div>
		
		</div>
	
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


