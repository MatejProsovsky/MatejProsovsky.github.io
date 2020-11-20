<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use \App\Models\acc;


class AccController extends AControllerBase
{
    public function index()
    {
    }

    public function pro() {
        $id = $_SESSION['userId'];
        $acc = new acc();
        $acc->getOne($id);
        return [
            'username' => $acc->getUsername(),
            'email' => $acc->getEmail(),
            'password' => $acc->getPassword()
        ];

    }

    public function log() {
        if (isset($_POST['username'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $accounts=Acc::getAll();

            foreach ($accounts as $acc) {
                if ($acc->getUsername() == $username && $acc->getPassword()==$password)
                {
                    $_SESSION['userId'] = $acc->getID();
                    header('Location: ?c=home');
                    return [
                        'logged' => 1
                    ];
                }
            }
            return [
                'logged' => 2
            ];
        }
    }

    public function modifyPro() {
        $id = $_SESSION['userId'];
        $acc = new Acc();
        $acc->getOne($id);

        if (isset($_POST['username'])){
            $acc->setUsername($_POST['username']);
            $acc->setPassword($_POST['password']);
            $acc->setEmail($_POST['email']);
            $acc->save();
            header('Location: ??c=acc&a=pro');
        }

        return [
            'Acc' => $acc
        ];
    }

    public function deleteAcc(){
        $id = $_SESSION['userId'];
        $acc = new Acc();
        $acc->getOne($id);
        $acc->delete();
        header('Location: ?c=home');
        $this->logout();
        exit();
    }

    public function add(){
        if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])  ){
            $username=$_POST['username'];
            $password=$_POST['password'];
            $email=$_POST['email'];

            $accounts=Acc::getAll();

            foreach ($accounts as $acc) {
                if ($acc->getUsername() == $username && $acc->getPassword()==$password)
                {
                    return [
                        'registered' => 0
                    ];
                }
            }
            $account = new Acc($username, $email, $password);
            #echo $account->getEmail();
            $account->save();

            header('Location: ?c=acc&a=log');
            return [
                'registered' => 1
            ];
        }
    }

    public function logout() {
        $_SESSION = array();

        if(ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '' , time()-42000, $params["path"], $params["domain"],
                $params["secure"],$params["httponly"]);
        }
        session_destroy();
        header('Location: ?c=home');
    }
}
