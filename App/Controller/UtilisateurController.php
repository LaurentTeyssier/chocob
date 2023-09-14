<?php
namespace App\Controller;
use App\Model\Utilisateur;
class UtilisateurController extends Utilisateur{
    public function addUser(){
        include './App/Vue/vueAddUser.php';
    }
}