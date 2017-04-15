<?php /* Smarty version 2.6.26, created on 2017-04-15 18:38:25
         compiled from ViewUserRegister.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'ViewUserRegister.tpl', 2, false),array('function', 'form_input', 'ViewUserRegister.tpl', 3, false),)), $this); ?>
  <h2 id=register>新規ユーザ登録</h2>
  <?php $this->_tag_stack[] = array('form', array('name' => 'userRegister','action' => "")); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo smarty_function_form_input(array('name' => 'user_name'), $this);?>

  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>