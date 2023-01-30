<h3><?= __(h($user->firstname)." ".h($user->lastname)." ".'Data') ?></h3>

    <table class="table table-striped">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= h($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Encryted Password') ?></th>
            <td><?= h($user->enc_password) ?></td>
        </tr>
    
       
    </table>

    <?= $this->Html->link('Back','/Users/index',['class' => 'btn btn-info pull-right']);?>
    