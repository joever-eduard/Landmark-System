<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\LotModel;
use App\Models\PropertyDistanceModel;
use App\Models\PropertyValuationModel;

class PagesController extends BaseController
{
    public function index()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function search()
    {
        return view('search');
    }

    public function adminHome()
    {   
        $data = [];

        echo view('adminhome', $data);
    }

    public function adminAbout()
    {
        return view('adminabout');
    }

    public function adminSearch()
    {
        return view('adminsearch');
    }

    public function searchinfo()
    {
        return view('searchinfo');
    }

    public function documents()
    {
        return view('documents');
    }

    public function reports()
    {
        return view('reports');
    }

    public function add()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $newData = [
                'lot_no' => $this->request->getVar('lot_no'),
                'cad_no' => $this->request->getVar('cad_no'),
                'size_of_area' => $this->request->getVar('size_of_area'),
                'location' => $this->request->getVar('location'),
                'phase' => $this->request->getVar('phase'),
                'bllm' => $this->request->getVar('bllm'),
                'distance_to_point1' => $this->request->getVar('distance_to_point1'),
                'land_owner' => $this->request->getVar('land_owner'),
                'status' => $this->request->getVar('status'),
                'valuation_amount' => $this->request->getVar('valuation_amount'),
                'tree_valuation_amount' => $this->request->getVar('tree_valuation_amount'),
                'disturbance_amount' => $this->request->getVar('disturbance_amount'),
                'house_structure_amount' => $this->request->getVar('house_structure_amount'),
            ];   

            var_dump($newData);
            $model = new LotModel();
            $model->save($newData);

        }
        echo view('add');
    }

    public function update()
    {
        return view('update');
    }
    
}
