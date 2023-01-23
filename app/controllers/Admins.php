<?php
    class Admins extends Controller {

        protected $userModel;

        public function __construct(){
        $this->userModel = $this->model('Admin');
        }

        public function add() {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data =[
                    'title' => trim($_POST['title']),
                    'price' => trim($_POST['price']),
                    'quantity' => trim($_POST['quantity']),
                  ];
                  
                if($this->userModel->add($data)){
                    flash('register_success', 'added seccussfully');
                    redirect('pages/about');
                }
            }else {
                // Init data
                $data =[
                  'title' => '',
                  'price' => '',
                  'quantity' => '',
                ];
        
                // Load view
                $this->view('admin/add', $data);
              }

        }

        public function delete() {

        }

        public function update() {

        }

        public function dashboard() {
            $product = $this->userModel->getProduct();
            $data = [
                'product' => $product
            ];
            $this->view('admin/dashboard', $data);
        }
    }
