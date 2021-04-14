<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Kontak extends ResourceController
{
    protected $modelName = 'App\Models\KontakModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function create()
    {
        $data = $this->request->getPost();

        if ($this->model->save($data)) {
            $response = [
                'data' => $data,
                'messages' => [
                    'success' => 'Telepon Created'
                ]
            ];
            return $this->respondCreated($response);
        }
    }
    public function update($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('Id tidak ditemukan');
        }
        $data = $this->request->getRawInput();
        $data['id'] = $id;
        if ($this->model->save($data)) {
            $response = [
                'data' => $data,
                'messages' => [
                    'success' => 'Telepon Updated'
                ]
            ];
            return $this->respondUpdated($response);
        }
    }
    public function delete($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('Id tidak ditemukan');
        }
        if ($this->model->delete($id)) {
            $response = [
                'data' => ['id' => $id],
                'messages' => [
                    'success' => 'Telepon Deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }
    }
    public function show($id = null)
    {
        if (!$this->model->findById($id)) {
            return $this->fail('Id tidak ditemukan');
        } else {
            $data = $this->model->findById($id);

            return $this->respond($data);
        }
    }
}
