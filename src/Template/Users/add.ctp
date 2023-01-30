<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control ('firstname', ['type'=>'text','required'=>true,'class'=>'form-control', 'placeholder'=>'Enter firstname']);
            echo $this->Form->input('lastname', ['type'=>'text','required'=>true,'class'=>'form-control', 'placeholder'=>'Enter lastname']);
            echo $this->Form->input('username', ['type'=>'text','required'=>true,'class'=>'form-control', 'placeholder'=>'Enter username']);
            echo $this->Form->input('email', ['type'=>'email','required'=>true,'class'=>'form-control', 'placeholder'=>'Enter  email']);
            echo $this->Form->input('password', ['type'=>'password','required'=>true,'class'=>'form-control', 'placeholder'=>'Enter password']);
        ?>
    </fieldset>
    
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>

</div>
</fieldset>



<?= $this->Html->link('Back','/Users/index',['class' => 'btn btn-info pull-right']);?>
    