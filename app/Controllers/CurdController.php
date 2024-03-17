<?php 
namespace App\Controllers;

use App\Models\CurdModel;
use CodeIgniter\Controller;

class CurdController extends BaseController
{
    // Display all records
    public function index()
    {
        $model = new CurdModel();
        $data['records'] = $model->getAllRecords();
        return view('curd_view', $data);
    }
    public function add()
    {
        //$model = new CurdModel();
       
        return view('create_curd_view');
    }
    // Insert new record
    public function create()
    {
        $model = new CurdModel();
        $data = [
            'Name' => $this->request->getPost('name'),
            'Email' => $this->request->getPost('email'),
            'UserName' => $this->request->getPost('username'),
            'Phone' => $this->request->getPost('phone'),
            'Password' => $this->request->getPost('password')
        ];
        $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads', $newName);
                $data['image'] = 'uploads/' . $newName;
            }
        $model->insertRecord($data);
        return redirect()->to('/curd');
    }

    // Fetch single record and display in edit form
    public function edit($id)
    {
        $model = new CurdModel();
        $data['record'] = $model->getRecordByID($id);
        return view('edit_curd_view', $data);
    }

    // Update record
    public function update()
    {
        $model = new CurdModel();
        $id = $this->request->getPost('id');
        $data = [
            'Name' => $this->request->getPost('name'),
            'Email' => $this->request->getPost('email'),
            'Phone' => $this->request->getPost('phone')
        ];
        $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads', $newName);
                $data['image'] = 'uploads/' . $newName;
            }
        $model->updateRecord($id, $data);
        return redirect()->to(base_url('curd'));

    }

    // Delete record
    public function delete($id)
    {
        $model = new CurdModel();
        $model->deleteRecord($id);
        return redirect()->to('curd');
    }
   
}
