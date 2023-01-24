<?php
    class Admins extends Controller {


        protected $adminModel;

        public function __construct(){
        $this->adminModel = $this->model('Admin');
        }

        public function add() {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){


                for($i=0; $i<count($_POST['price']); $i++){

                    $data =[
                        'title' => trim($_POST['title'][$i]),
                        'price' => trim($_POST['price'][$i]),
                        'quantity' => trim($_POST['quantity'][$i]),
                      ];  
                    $this->adminModel->add($data);
                }
                  
                    flash('register_success', 'added seccussfully');
                    redirect('admins/dashboard');
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

        public function delete($idproduct) {
        $this->adminModel->delete($idproduct);
            redirect('admins/dashboard');
        }

        public function update() {

        }

        public function dashboard() {
            $product = $this->adminModel->getProduct();
            $data = [
                'product' => $product
            ];
            $this->view('admin/dashboard', $data);
        }

        public function sort() {

            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                
                $data =[
                    'select' => $_GET['select']
                ];  
                $this->adminModel->sort($data);
          redirect('admins/dashboard', $data);
                      
        }
        
    }
}
