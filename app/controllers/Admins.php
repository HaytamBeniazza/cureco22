<?php
class Admins extends Controller
{


    protected $adminModel;

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {



            for ($i = 0; $i < count($_POST['price']); $i++) {
                $filename = $_FILES["image"]["name"][$i];
                $tempname = $_FILES["image"]["tmp_name"][$i];
                $folder = "./uploads/" . $filename;
                $data = [
                    'image' => $filename,
                    'title' => trim($_POST['title'][$i]),
                    'price' => trim($_POST['price'][$i]),
                    'quantity' => trim($_POST['quantity'][$i]),
                ];

                move_uploaded_file($tempname, $folder);

                $this->adminModel->add($data);
            }
            redirect('admins/dashboard');
        } else {
            // Init data
            $data = [
                'title' => '',
                'price' => '',
                'quantity' => '',
            ];

            // Load view
            $this->view('admin/add', $data);
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'title' => $_POST['title'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'id' => $id
            ];
            if ($this->adminModel->edit($data)) {
                redirect('admins/dashboard');
            }
        } else {
            // Init data
            $product = $this->adminModel->getP($id);
            $data = [
                'product' => $product,

            ];

            // Load view
            $this->view('admin/edit', $data);
        }
    }

    public function delete($idproduct)
    {
        $this->adminModel->delete($idproduct);
        redirect('admins/dashboard');
    }

    public function dashboard()
    {


        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            $name = $_POST['search'];
            $product = $this->adminModel->search($name);
            $max = $this->adminModel->totalProducts();
            $min = $this->adminModel->minimumPrice();
            $data = [
                'product' => $product,
                'max' => $max,
                'min' => $min,

            ];

            $this->view('admin/dashboard', $data);
        } else {
            $max = $this->adminModel->totalProducts();
            $min = $this->adminModel->minimumPrice();
            $product = $this->adminModel->getProduct();
            $data = [
                'product' => $product,
                'max' => $max,
                'min' => $min,

            ];

            $this->view('admin/dashboard', $data);
        }
    }

    public function sort()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $data2 = [
                'select' => $_GET['select']
            ];
            $product = $this->adminModel->sort($data2);

            $max = $this->adminModel->totalProducts();
            $min = $this->adminModel->minimumPrice();

            $data = [
                'product' => $product,
                'max' => $max,
                'min' => $min
            ];

            $this->view('admin/dashboard', $data);
        }
    }
}
