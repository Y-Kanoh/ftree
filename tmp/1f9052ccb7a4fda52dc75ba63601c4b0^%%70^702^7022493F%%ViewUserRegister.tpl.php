<?php /* Smarty version 2.6.26, created on 2017-04-17 23:29:10
         compiled from ViewUserRegister.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'form', 'ViewUserRegister.tpl', 2, false),array('function', 'message', 'ViewUserRegister.tpl', 7, false),)), $this); ?>
<h1 id=register>新規ユーザ登録</h2>
<?php $this->_tag_stack[] = array('form', array('name' => 'userRegister','ethna_action' => 'CompleteRegistration')); $_block_repeat=true;smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

  <?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?>
    <span><?php echo $this->_tpl_vars['error']; ?>
</span>
  <?php endforeach; endif; unset($_from); ?>
  <?php echo smarty_function_message(array('name' => 'comment'), $this);?>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">ユーザ名（必須）</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="User Name" name="user_name">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">パスワード（必須）</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-12" id="register_button">
      <button type="submit" id="register_button">
        <a id="register_button" href=#>登録</a>
      </button>
    </div>
  </div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>