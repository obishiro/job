 
<div class="container" style="width: 350px;" style="text-align: center">

      <form class="formular form-signin" id="frm_chpass">
        <h3 class="form-signin-heading"><i class="icon-user icon-large"></i> Please sign in</h3>
        <input class="validate[required]" type="text" name="username" class="input-block-level" placeholder="<?=label("username");?>">
        <input class="validate[required]" type="password" name="password" class="input-block-level" placeholder="<?=label("password");?>">
<!--        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <input type="hidden" name="bt-login" value="1" />
        <div class="form-actions">
      <?php echo form_hidden('add-chpass','1');?>  
              <input type="hidden" value="<?=$UsrId;?>" name="UID" />
                  
      <button type="button" id="bt-chpass" class="btn btn-primary "><i class="icon-save icon-large"></i> <?=label("save");?></button>
      <button type="reset" class="btn btn-danger"><i class="icon-remove icon-large"></i> <?=label("cancel");?></button>
    </div>   
      </form>

    </div>
 