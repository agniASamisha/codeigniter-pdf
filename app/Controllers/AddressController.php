<?php

namespace App\Controllers;

use App\Models\AddressModel;
use CodeIgniter\Controller;

class AddressController extends Controller
{
    public function index()
    {
        // Check if user is logged in
        $session = session();
        if (!$session->has('user')) {
            return redirect()->to('/login'); 
        }
        

        $u_ID = $session->get('user')['id'];
        $addressModel = new AddressModel();

        $addresses = $addressModel->where('u_id', $u_ID)
        ->where('status', 'active')
        ->findAll();

        if (!empty($addresses)) {
            $data['addresses'] = $addresses;
            return view('address_view', $data); // Load view with addresses data
        } else {
            return view('address_form'); // Load add address form view if no addresses found
        }
    }

    public function addAddress()
    {
        // Handle form submission to add new address
        $session = session();
        $u_ID = $session->get('user')['id'];

        if ($this->request->getMethod() === 'post') {       
            $addressModel = new AddressModel();

            $data = [
                'u_id' => $u_ID,
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'city' => $this->request->getPost('city'),
                'nationality' => $this->request->getPost('nationality'),
                'state' => $this->request->getPost('state'),
                'location' => $this->request->getPost('locality'),
                'action' => 'active' // Assuming new address is active by default
            ];

            if ($addressModel->insert($data)) {
                return redirect()->to('/viewCart'); // Redirect to address list after successful insertion
            } else {
                // Handle insertion failure
                return "Something went wrong";
            }
        }
    }
    public function edit($id){
        return view('address_update');

    }

    public function update($id)
    {
        // Check if form is submitted
        if ($this->request->getMethod() === 'post') {
            $addressModel = new AddressModel();

            $data = [
                'phone' => $this->request->getPost('phone'),
                'address' => $this->request->getPost('address'),
                'city' => $this->request->getPost('city'),
                'nationality' => $this->request->getPost('nationality'),
                'state' => $this->request->getPost('state'),
                'location' => $this->request->getPost('locality'),
            ];

            // Update the address record
            if ($addressModel->update($id, $data)) {
                return redirect()->to('/address'); // Redirect to address list after successful update
            } else {
                return "Something went wrong"; // Handle update failure
            }
        }

        $addressModel = new AddressModel();
        $data['row'] = $addressModel->find($id);

        return view('address_update', $data); // Load the update form view
    }
}
