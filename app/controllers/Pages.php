<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $this->view('pages/index');
    }

    public function about(){
      $this->view('pages/about');
    }

    public function product(){
      $this->view('pages/product');
    }

    public function contact(){
      $this->view('pages/contact');
    }
  }
  