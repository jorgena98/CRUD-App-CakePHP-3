<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('firstname',['type'=>'text','required'=>true,'class'=>'form-control']);
            echo $this->Form->control('lastname',['type'=>'text','required'=>true,'class'=>'form-control']);
            echo $this->Form->control('username',['type'=>'text','required'=>true,'class'=>'form-control']);
            echo $this->Form->control('email',['type'=>'email','required'=>true,'class'=>'form-control']);
            echo $this->Form->control('password',['type'=>'text','required'=>true,'class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>


<?= $this->Html->link('Back','/Users/index',['class' => 'btn btn-info pull-right']);?>
    