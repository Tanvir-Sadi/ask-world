<?php

namespace Luminous\Model;

use Luminous\Model\Model;

class Authenticable extends Model
{
    public function rememberMe($days){
        $remember_token = new Remember_token();
        $remember_token =$remember_token->create([
            'token' => bin2hex(openssl_random_pseudo_bytes(16)),
            'tokenable_id' => $this->id,
            'tokenable_type' => get_class($this)
        ]);
        $_SESSION['id'] = $this->id;
        setcookie('token', $remember_token->token, time() + (86400 * $days), "/");
        return $remember_token;
    }

    public function forgetMe(){
        if ($this->isRemembered()){
            $remember_token = new Remember_token();
            $stmt = $remember_token->prepare('SELECT * FROM remember_token WHERE token = :token');
            $stmt->execute(['token'=>$_COOKIE['token']??null]);
            $remember_token = $stmt->fetchObject(get_class($remember_token));
            $remember_token->destroy();
        }
        unset($_SESSION['id']);
        setcookie('token', null, -1, '/');
    }


    public function startAuthSession($token){

        // find remember token on database
        $stmt = $this->prepare('SELECT * FROM remember_token WHERE token= :token limit 1');
        $stmt->execute(['token'=>$token]);
        $remember_token = $stmt->fetch();

        //check if token exists
        if(!$remember_token)
            return false;

        $_SESSION['id'] = $remember_token->tokenable_id;
        return true;
    }

    private function isRemembered(){
        return isset($_COOKIE['token']);
    }
}