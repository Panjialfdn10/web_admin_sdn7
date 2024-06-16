<?php

namespace app\Controllers\API\v1;
use CodeIgniter\RESTful\ResourceController;
use App\Models\SiswaModel;
use App\Models\AuthModel;
use App\Models\SoalModel;
use App\Models\SkorsModel;
use App\Models\MateriModel;
use App\Models\KelolaMateriModel;

class APISiswaController extends ResourceController
{
    protected $siswa_model;
    protected $auth_model;
    protected $soal_model;
    protected $skors_model;
    protected $materiModel;
    protected $kelolaMateriModel;

    public function __construct()
    {
        $this->siswa_model = new SiswaModel();
        $this->auth_model = new AuthModel();
        $this->soal_model = new SoalModel();
        $this->skors_model = new SkorsModel();
        $this->materiModel = new MateriModel();
        $this->kelolaMateriModel = new KelolaMateriModel();
    }

    public function find_by_nis($no_nis)
    {
        $nis_list = $this->siswa_model->find_by_nis($no_nis);
        if ($nis_list) {
            $nis = [
                "code" => 200,
                "status" => "Succes",
                "message" => "No Nis Berhasil Ditemukan",
                "data" => array($nis_list)
            ];
            return $this->respond($nis, 200);
        } else {
            $nis = [
                "code" => 404,
                "status" => "Not Found",
                "message" => "No Nis Tidak Ditemukan",
            ];
            return $this->respond($nis, 404);
        }
    }

    // ============================================================================================================ //
    // ======================================= Controllers API Menu Siswa  ======================================== //
    // ============================================================================================================ //
    
    public function get_all_siswa() {
        $data = $this->siswa_model->findAll();
        if ($data) {
            $datasiswa = [
                "code" => 200,
                "status" => "Succes",
                "message" => "Akun Berhasil Ditemukan",
                "data" => array($data)
            ];
            return $this->respond($datasiswa, 200);
        } else {
            $datasiswa = [
                "code" => 404,
                "status" => "Not Found",
                "message" => "Gagal Menemukan Akun.",
            ];
            return $this->respond($datasiswa, 404);
        }
    }

    // ============================================================================================================ //
    // ======================================= Controllers API Menu Soal  ======================================== //
    // ============================================================================================================ //

    public function get_all_soal() {
        $data = $this->soal_model->findAll();

        if ($data) {
            $datasiswa = [
                "code" => 200,
                "status" => "Succes",
                "message" => "Soal Berhasil Ditemukan",
                "data" => $data
            ];
            return $this->respond($datasiswa, 200);
        } else {
            $datasiswa = [
                "code" => 404,
                "status" => "Not Found",
                "message" => "Gagal Menemukan Soal.",
            ];
            return $this->respond($datasiswa, 404);
        }
        
    }

    // ============================================================================================================ //
    // ======================================= Controllers API Menu Skors  ======================================== //
    // ============================================================================================================ //

    public function get_all_Skors() {
        $data = $this->skors_model->get_all_Skors();
        if ($data) {
            $dataskors = [
                "code" => 200,
                "status" => "Success",
                "message" => "Skors Berhasil Ditemukan",
                "data" => $data
            ];
            return $this->respond($dataskors, 200);
        } else {
            $dataskors = [
                "code" => 404,
                "status" => "Not Found",
                "message" => "Gagal Menemukan Skors."
            ];
            return $this->respond($dataskors, 404);
        }
    }

    public function post_skors() {
        $data = $this->request->getPost();
        if ($this->skors_model->insert($data)) {
            $dataskors = [
                "code" => 200,
                "status" => "Success",
                "message" => "Data Berhasil Ditambahkan",
                "data" => $data
            ];
            return $this->respond($dataskors, 200);
        } else {
            $dataskors = [
                "code" => 404,
                "status" => "Not Found",
                "message" => "Gagal Menambahkan Data."
            ];
            return $this->respond($dataskors, 200);
        }
    }
    
    // ============================================================================================================ //
    // ======================================= Controllers API Menu Materi  ======================================= //
    // ============================================================================================================ //

    public function getMateri() {
        $data = $this->materiModel->getMateri();
        if ($data) {
            $datamateri = [
                "code" => 200,
                "status" => "Success",
                "message" => "Materi Berhasil Ditemukan",
                "data" => $data
            ];
            return $this->respond($datamateri, 200);
        } else {
            $datamateri = [
                "code" => 404,
                "status" => "Not Found",
                "message" => "Gagal Menemukan Materi."
            ];
            return $this->respond($datamateri, 404);
        }
    }
}