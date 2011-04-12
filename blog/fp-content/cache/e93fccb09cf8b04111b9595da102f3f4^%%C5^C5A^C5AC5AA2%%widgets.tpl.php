<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:15
         compiled from widgets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'widgets', 'widgets.tpl', 4, false),)), $this); ?>
		
		<div id="column">
		
		<?php $this->_tag_stack[] = array('widgets', array('pos' => 'right')); $_block_repeat=true;smarty_block_widgets($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>	
			<div id="<?php echo $this->_tpl_vars['id']; ?>
">
			<h4><?php echo $this->_tpl_vars['subject']; ?>
</h4>
			<?php echo $this->_tpl_vars['content']; ?>

			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_widgets($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		
		<?php $this->_tag_stack[] = array('widgets', array('pos' => 'left')); $_block_repeat=true;smarty_block_widgets($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<div id="<?php echo $this->_tpl_vars['id']; ?>
">		
			<h4><?php echo $this->_tpl_vars['subject']; ?>
</h4>
			<?php echo $this->_tpl_vars['content']; ?>

			</div>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_widgets($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		
		</div>
