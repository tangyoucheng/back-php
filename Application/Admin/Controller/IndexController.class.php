<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        layout(false);
        $this->display();
    }

    public function info(){
        $this->display();
    }
}