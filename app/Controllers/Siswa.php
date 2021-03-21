<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
// use CodeIgniter\API\ResponseTrait;
// use App\Models\UsersModel;

class Siswa extends ResourceController
{
    protected $modelName = 'App\Models\SiswaModel';
    protected $format    = 'json';

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        // $model = new UsersModel();
        // $data = $model->findAll();
        // return $this->respond($data, 200);
        return $this->respond($this->model->findAll());
    }

    public function create()
    {
        $data =  $this->request->getPost();
        $validate = $this->validation->run($data, 'create');
        $errors = $this->validation->getErrors();

        if ($errors) {
            return $this->fail($errors);
        }

        $siswa = new \App\Entities\Siswa();
        $siswa->fill($data);
        // $siswa->created_by = 'Administrator';
        $siswa->created_date = date('Y-m-d H:i:s');

        if ($this->model->save($siswa)) {
            return $this->respondCreated($siswa, 'Siswa created');
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        // $validate = $this->validation->run($data, 'update_siswa');
        // $errors = $this->validation->getErrors();

        // if ($errors) {
        //     return $this->fail($errors);
        // }

        if (!$this->model->findById($id)) {
            return $this->fail('Id not found');
        }

        $siswa = new \App\Entities\Siswa();
        $siswa->fill($data);
        // $siswa->updated_by = 'Administrator';
        $siswa->updated_date = date('Y-m-d H:i:s');

        if ($this->model->save($siswa)) {
            return $this->respondUpdated($siswa, 'Siswa updated');
        }
    }

    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('Id not found');
        }

        if ($this->model->delete($id)) {
            return $this->respondDeleted(['Id' => $id . ' Deleted']);
        }
    }

    public function show($id = null)
    {
        $data = $this->model->findById($id);

        if ($data) {
            return $this->respond($data);
        }

        return $this->fail('Id not Found');
    }
}