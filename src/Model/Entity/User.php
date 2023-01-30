<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;



class User extends Entity
{

    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'enc_password' => true,
    ];


    protected $_hidden = [
        'password',
    ];


    protected function _setEncPassword($value)
    { 
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }


    }  
