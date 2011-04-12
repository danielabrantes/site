<?php /* Smarty version 2.6.18, created on 2011-04-11 16:53:13
         compiled from shared:errorlist.tpl */ ?>
<div id="errorlist">
		<?php if ($this->_tpl_vars['error']): ?>
		<ul class="msgs errors">
			<?php $_from = $this->_tpl_vars['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['msg']):
?>
			<li>
			<?php if (is_numeric ( $this->_tpl_vars['field'] )): ?>
				<?php echo $this->_tpl_vars['msg']; ?>
 
			<?php else: ?>
				<a href="#<?php echo $this->_tpl_vars['field']; ?>
"><?php echo $this->_tpl_vars['msg']; ?>
</a>
			<?php endif; ?>
			</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['warnings']): ?>
		<ul class="msgs warnings">
			<?php $_from = $this->_tpl_vars['warnings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['msg']):
?>
			<li>
			<?php if (is_numeric ( $this->_tpl_vars['field'] )): ?>
				<?php echo $this->_tpl_vars['msg']; ?>
 
			<?php else: ?>
				<a href="#<?php echo $this->_tpl_vars['field']; ?>
"><?php echo $this->_tpl_vars['msg']; ?>
</a>
			<?php endif; ?>
			</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['notifications']): ?>
		<ul class="msgs notifications">
			<?php $_from = $this->_tpl_vars['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
			<li><?php echo $this->_tpl_vars['msg']; ?>
</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
		<?php endif; ?>

		
		<?php if ($this->_tpl_vars['success']): ?>
		<?php if ($this->_tpl_vars['success'] < 0): ?>
			<?php $this->assign('class', 'errors'); ?>
		<?php else: ?>
			<?php $this->assign('class', 'notifications'); ?>
		<?php endif; ?>
		<ul class="msgs <?php echo $this->_tpl_vars['class']; ?>
">
			<li><?php echo $this->_tpl_vars['panelstrings']['msgs'][$this->_tpl_vars['success']]; ?>
</li>
		</ul>
		<?php endif; ?>
</div>