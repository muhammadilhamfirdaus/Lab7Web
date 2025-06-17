<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ArtikelModel;

class PostApi extends ResourceController
{
    public function index()
    {
        $model = new ArtikelModel();
        return $this->respond($model->findAll(), 200);
    }

    public function create()
    {
        $model = new ArtikelModel();
        $data = [
            'judul' => $this->request->getVar('judul'),
            'isi' => $this->request->getVar('isi'),
        ];

        if (!$data['judul'] || !$data['isi']) {
            return $this->failValidationErrors('Judul dan isi harus diisi');
        }

        $model->insert($data);
        return $this->respondCreated([
            'status' => 201,
            'message' => 'Data berhasil disimpan',
            'data' => $data
        ]);
    }

    public function update($id = null)
    {
        $model = new ArtikelModel();

        if (!$model->find($id)) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan");
        }

        // Baca manual data dari PUT form
        parse_str(file_get_contents("php://input"), $data);

        if (empty($data['judul']) || empty($data['isi'])) {
            return $this->failValidationErrors('Judul dan isi harus diisi');
        }

        $model->update($id, $data);
        return $this->respond([
            'status' => 200,
            'message' => 'Data berhasil diperbarui',
            'data' => $data
        ]);
    }


    public function delete($id = null)
    {
        $model = new ArtikelModel();

        if (!$model->find($id)) {
            return $this->failNotFound("Data dengan ID $id tidak ditemukan");
        }

        $model->delete($id);
        return $this->respondDeleted([
            'status' => 200,
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
