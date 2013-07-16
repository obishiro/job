<h1>Company</h1>
<div class="container" style="width: 300px;">

      <form class="formular form-signin" method="POST"action="<?=base_url();?>company/login">
        <h3 class="form-signin-heading">Please sign in</h3>
        <input class="validate[required]" type="text" name="username" class="input-block-level" placeholder="<?=label("username");?>">
        <input class="validate[required]" type="password" name="password" class="input-block-level" placeholder="<?=label("password");?>">
<!--        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <input type="hidden" name="bt-login" value="1" />
        <button class="btn   btn-primary" type="submit"><i class="icon-ok"></i><?=label("login");?></button>
      </form>

    </div>
 