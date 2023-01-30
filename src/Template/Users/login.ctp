<?php $myTemplates = [
    'inputContainer' => '<div class="form-control">{{content}}</div>',
    'formStart' => '<form {{attrs}} class="form-horizontal" novalidate>'];
$this->Form->setTemplates($myTemplates);
$this->Form->templates($myTemplates);
?>



<?= $this->Form->create() ?>
  <fieldset>
    

    <div class="form-group">
      <label for="inputEmail" class="col-lg-3 control-label">Email</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
      </div>
    </div>
   
    <div class="form-group">
      <label for="inputEpass" class="col-lg-3 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" id="inputEpass"  name="enc_password"  placeholder="Password">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-6 col-lg-offset-3">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </fieldset>

  <?= $this->Form->end()?>
