<?php

class UserController extends RenderView{
    public function sign_up(){
        $this->loadView('sign_up',
        ['title'=>'Criar conta',
        'api'=>'http://localhost/php_projects/back-end'
        ]);
    }
    public function show(){
        /**
         * @var array
         */
        (array) $users = [];

         if (empty($_GET['id'])) {

            $API = file_get_contents("http://localhost/php_projects/back-end/users");
            $datas = json_decode($API,true);
            
            $users['users'] = $datas['users'];
            /**
             * @return array
             */
            
            $this->loadView('Users',
            ['title'=>'User',
            'api'=>'http://localhost/php_projects/back-end',
            'users'=>$users
            ]);

         } else if(!empty($_GET['id'])){

            $id = $_GET['id'];
            $API = file_get_contents("http://localhost/php_projects/back-end/users?id=$id");
            $datas = json_decode($API,true);

            $users = $datas;

            $this->loadView('Users',
            ['title'=>'User',
            'api'=>'http://localhost/php_projects/back-end',
            'users'=>$users
            ]);
         }

    }

}
