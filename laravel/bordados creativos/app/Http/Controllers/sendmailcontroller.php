<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views\php\sendmail.php;


class sendmailcontroller extends Controller
{
    //
    function get_sendmail(){
        return send_mail();
    }
}
