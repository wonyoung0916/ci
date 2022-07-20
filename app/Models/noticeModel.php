<?php
namespace App\Models;
use CodeIgniter\Model;

class noticeModel extends Model{
    protected $table= 'fullname';
    protected $allowedFields = ['title'];
}