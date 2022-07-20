<?php
class Home extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $result = $this->db->query('select * from notice')->result();
        foreach ($result as $notice) {
            echo $notice->name.'<br>';
        }

    }
}