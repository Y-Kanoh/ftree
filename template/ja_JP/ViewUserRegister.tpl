<h1 id=register>新規ユーザ登録</h2>
{form name="userRegister" ethna_action="CompleteRegistration"}

  {foreach from=$errors item=error}
    <span>{$error}</span>
  {/foreach}
  {message name="comment"}

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

{/form}
