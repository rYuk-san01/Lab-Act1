<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;

class MainController extends BaseController
{
    public function save()
    { 
        $main = new MainModel();
        $ID = $this->request->getPost('ID');
        $data = [
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
        ];

        if(isset($ID)){
            $main->set($data)->where('ID', $ID)->update();
        }else{
            $main->save($data);
        }
        return redirect()->to('/test');
    }

    public function delete($ID)
    {
        $main = new MainModel();
        $main->delete($ID);
        return redirect()->to('/test');
    }

    public function test()
    {
        $j = new MainModel();
        $data['main'] = $j->findAll();
        //var_dump(data);
        return view('main', $data);
    }

    public function updates()
    { 
        $data = [
            'StudID' => $this->request->getPost('StudID'),
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
        ];
        $main = new MainModel();
        $main->set($data)->where('ID', $ID)->update();
        return redirect()->to('/test');
    }
    public function update($ID)
    {
        $main = new MainModel();
        $data = [
            'd'=> $main->where ('ID',$ID)->first(),
            'main'=> $main -> findAll(),
            'tt' => 'update'
        ];
        return view('main',$data);
    }

}