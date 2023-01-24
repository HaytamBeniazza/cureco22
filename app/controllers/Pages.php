<?php
  class Pages extends Controller {
    protected $pagesModel;
    public function __construct(){
      $this->pagesModel = $this->model('Admin');
    }
    
    public function index(){
      $this->view('pages/index');
    }

    public function about(){
      $this->view('pages/about');
    }

    public function product(){
      $product = $this->pagesModel->getProduct();
      $data = [
          'product' => $product
      ];
      $this->view('pages/product',$data);
    }

    public function contact(){
      $this->view('pages/contact');
    }
  }
  