<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interface\RespositoreisInterface;

class NameController extends Controller
{
    private $name;
    public function __construct(RespositoreisInterface $name)
    {
        $this->name = $name;
    }


    public function index()
    {
        $get_name =     $this->name->name();
        dd($get_name);
    }
}
