<?php
namespace App\Controllers;
use App\Models\noticeModel;
use CodeIgniter\Controller;

class notice extends BaseController{
    public function index(){
       $notice = new noticeModel();
       print_r($notice->findAll());
    }
}