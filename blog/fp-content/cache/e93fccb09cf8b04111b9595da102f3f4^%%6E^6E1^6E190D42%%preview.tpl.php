<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:23
         compiled from preview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry', 'preview.tpl', 1, false),array('modifier', 'tag', 'preview.tpl', 3, false),array('modifier', 'date_format', 'preview.tpl', 4, false),)), $this); ?>
			<?php $this->_tag_stack[] = array('entry', array('content' => $this->_tpl_vars['entry'])); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<div class="entry">
				<h3><?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_title') : theme_apply_filters_wrapper($_tmp, 'the_title')); ?>
</h3>
				<p class="date">Published by <?php echo $this->_tpl_vars['author']; ?>
 on <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['fp_config']['locale']['dateformat']) : theme_date_format($_tmp, $this->_tpl_vars['fp_config']['locale']['dateformat'])); ?>
 </p>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_content') : theme_apply_filters_wrapper($_tmp, 'the_content')); ?>

			</div>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
