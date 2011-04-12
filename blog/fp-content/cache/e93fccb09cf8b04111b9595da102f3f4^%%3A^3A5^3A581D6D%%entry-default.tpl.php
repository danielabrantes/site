<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:15
         compiled from entry-default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'entry-default.tpl', 1, false),array('modifier', 'date_format_daily', 'entry-default.tpl', 6, false),array('modifier', 'link', 'entry-default.tpl', 9, false),array('modifier', 'tag', 'entry-default.tpl', 10, false),array('modifier', 'filed', 'entry-default.tpl', 23, false),)), $this); ?>
	<div id="<?php echo $this->_tpl_vars['id']; ?>
" class="entry <?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "y-%Y m-%m d-%d") : theme_date_format($_tmp, "y-%Y m-%m d-%d")); ?>
">
				 
				 
								
		<?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format_daily', true, $_tmp, "<h2 class=\"date\">".($this->_tpl_vars['fp_config']['locale']['dateformat'])."</h2>") : theme_smarty_modifier_date_format_daily($_tmp, "<h2 class=\"date\">".($this->_tpl_vars['fp_config']['locale']['dateformat'])."</h2>")); ?>

		
				<h3>
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
">
				<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_title') : theme_apply_filters_wrapper($_tmp, 'the_title')); ?>

				</a>
				</h3>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:entryadminctrls.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				
				
				<?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_content') : theme_apply_filters_wrapper($_tmp, 'the_content')); ?>

			
				
				<ul class="entry-footer">
			
				<li class="entry-info">Posted by <?php echo $this->_tpl_vars['author']; ?>
 at
				<?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : theme_date_format($_tmp)); ?>

				<?php if (( $this->_tpl_vars['categories'] )): ?> in <?php echo theme_entry_categories($this->_tpl_vars['categories']); ?>
<?php endif; ?>
				</li> 
				
				<?php if (! ( in_array ( 'commslock' , $this->_tpl_vars['categories'] ) && ! $this->_tpl_vars['comments'] )): ?>
				<li class="link-comments">
				<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link')); ?>
#comments"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'comments_number') : theme_apply_filters_wrapper($_tmp, 'comments_number')); ?>
 
					<?php if (isset ( $this->_tpl_vars['views'] )): ?>(<strong><?php echo $this->_tpl_vars['views']; ?>
</strong> views)<?php endif; ?>
				</a>
				</li>
				<?php endif; ?>
				
				</ul>
			
				
	</div>
	