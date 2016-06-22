<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Classe para teste, só isso mesmo =D !!!
 *
 * Class Users
 * @package App\Http\Controllers
 * @author Guilherme Arduino Barlatti
 */
class Users extends Controller
{

    public function getIndex(){
        return 'executando metodo index get.';
    }

    public function postIndex(){
        return 'executando metodo index post.';
    }

    /**
     * Metodo mais inutil e tudo mundo sempre faz ele.
     *
     * @return string
     */
    public function getHello()
    {
        return 'hello world !!!';
    }

}
