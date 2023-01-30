<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;


class AppController extends Controller
{


    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');  
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'enc_password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
         
            'unauthorizedRedirect' => $this->referer()
        ]);
        $this->set('username',$this->Auth->user('username'));  
      
    }
}