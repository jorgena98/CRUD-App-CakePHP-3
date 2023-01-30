<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('fontawesome.min') ?>
    <?= $this->Html->script('jquery-3.4.0') ?>
    <?= $this->Html->script('bootstrap') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    
  
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  
<?php if($username){ ?>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
       <p class="navbar-brand">Users Page</p>
    </div>
    
    <ul class="nav navbar-nav navbar-right">
        <li> 
          <?= $this->Html->link("Logout",['controller'=>'Users','action'=>'logout']) ?>
        </li>
    </ul>
  </div>
</nav>

<?php } 
else {?>

<nav class="navbar navbar-default">
  <div class="container">
  <div class="navbar-header">
      <p class="navbar-brand">Login Page</p>
    </div>
  </div>
</nav>

<?php } ?>


    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
