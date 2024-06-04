<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SiswaModel;
use App\Models\SoalModel;
use App\Models\SkorsModel;


class AdminController extends BaseController
{
    
    protected $model;
    protected $soalmodel;
    protected $skorsmodel;

    public function __construct(){
        $this->model = new SiswaModel();
        $this->soalmodel = new SiswaModel();
        $this->skorsmodel = new SkorsModel();
    }

    // ============================================================================================================ //
    // ========================================== Controller Menu Siswa  ========================================== //
    // ============================================================================================================ //

    public function index()
    {
        return view('dashboard\index.php');
    }

    public function create_siswa()
    {
        return view('siswa\create.php');
    }

    public function index_siswa()
    {
        $siswaModel = new SiswaModel();

        $data = [
            'siswa' => $siswaModel->findAll(),
        ];

        return view('siswa/index', $data);
    }

    public function post_siswa() {
        $siswaModel = new SiswaModel();       
        $file = $this->request->getFile('poto_siswa');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $newName);
            $potoName = $newName;
        } else {
            $potoName = null;
        }
        $data = [
            'no_nis' => $this->request->getVar('no_nis'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat_siswa' => $this->request->getVar('alamat_siswa'),
            'poto_siswa' => $potoName,
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];
        $siswaModel->insert($data);
        return redirect()->to('/siswa')->with('success', 'Data Siswa Berhasil Diunggah.');
    }
    

    public function detail_siswa($id_siswa)
    {
        $siswaModel = new SiswaModel();
        $data['siswa'] = $siswaModel->find($id_siswa);
        return view('siswa\detail', $data);
    }

    public function update_siswa($id_siswa)
    {
        $siswaModel = new SiswaModel();
        $file = $this->request->getFile('poto_siswa');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $newName);
            $potoName = $newName;
        } else {
            $potoName = $this->request->getVar('existing_poto');
        }
    
        $data = [
            'no_nis' => $this->request->getVar('no_nis'),
            'nama_siswa' => $this->request->getVar('nama_siswa'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'alamat_siswa' => $this->request->getVar('alamat_siswa'),
            'poto_siswa' => $potoName,
            'email' => $this->request->getVar('email'),
            'no_hp' => $this->request->getVar('no_hp'),
        ];
    
        if ($siswaModel->update($id_siswa, $data)) {
            return redirect()->to('/siswa')->with('message', 'User updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update user');
        }
    }
    

    public function delete_siswa($id_siswa)
    {
        $siswaModel = new SiswaModel();
        $siswa = $siswaModel->find($id_siswa);
        if ($siswa) {
            $filePath = WRITEPATH . 'uploads/' . $siswa->poto_siswa;
            if ($siswa->poto_siswa && file_exists($filePath)) {
                unlink($filePath);
            }
            $siswaModel->delete($id_siswa);
        }
        return redirect()->to('/siswa');
    }


    
    // ============================================================================================================ //
    // ======================================== Controller End Menu Siswa  ======================================== //
    // ============================================================================================================ //


    // ============================================================================================================ //
    // ========================================== Controller Menu Soal  =========================================== //
    // ============================================================================================================ //

    public function index_soal()
    {
        $soalmodel = new SoalModel();
        $data['soal'] = $soalmodel->findAll();
    
        return view('soal/index', $data);
    }

    public function create_soal()
    {
        return view('soal\create');
    }


    public function post_soal_pilihan_ganda()
    {
        $pertanyaan = $this->request->getPost('pertanyaan');
        $pilihan_a = $this->request->getPost('pilihan_a');
        $pilihan_b = $this->request->getPost('pilihan_b');
        $pilihan_c = $this->request->getPost('pilihan_c');
        $pilihan_d = $this->request->getPost('pilihan_d');
        $jawaban = $this->request->getPost('jawaban');
    
        $jawaban_benar = ''; 
    
        switch ($jawaban) {
            case 'A':
                $jawaban_benar = $pilihan_a;
                break;
            case 'B':
                $jawaban_benar = $pilihan_b;
                break;
            case 'C':
                $jawaban_benar = $pilihan_c;
                break;
            case 'D':
                $jawaban_benar = $pilihan_d;
                break;
            default:
                return "Jawaban tidak valid";
        }
    
        $data = [
            'pertanyaan' => $pertanyaan,
            'pilihan_a' => $pilihan_a,
            'pilihan_b' => $pilihan_b,
            'pilihan_c' => $pilihan_c,
            'pilihan_d' => $pilihan_d,
            'jawaban' => $jawaban,
            'jawaban_benar' => $jawaban_benar 
        ];
    
        $soalmodel = new SoalModel();
        $result = $soalmodel->insert($data);
    
        if ($result) {
            return redirect()->to('/soal');
        } else {
            $data['error'] = 'Gagal menambahkan soal';
            return view('create', $data);
        }
    }

    public function detail_soal($id_soal)
    {
        $soalmodel = new SoalModel();
        $data['soal'] = $soalmodel->find($id_soal);

        return view('soal/detail', $data);
    }

    public function update_soal($id_soal)
    {
        $soalmodel = new SoalModel();

        $data = [
            'pertanyaan' => $this->request->getPost('pertanyaan'),
            'pilihan_a' => $this->request->getPost('pilihan_a'),
            'pilihan_b' => $this->request->getPost('pilihan_b'),
            'pilihan_c' => $this->request->getPost('pilihan_c'),
            'pilihan_d' => $this->request->getPost('pilihan_d'),
            'jawaban' => $this->request->getPost('jawaban')
        ];

        $soalmodel->update($id_soal, $data);

        return redirect()->to('/soal'); 
    }
    
    public function delete_soal($id_soal)
    {
        $soalmodel = new SoalModel();
        $soalmodel->delete($id_soal);
        return redirect()->to('/soal');
    }

        

    // ============================================================================================================ //
    // ======================================== Controller End Menu Soal  ========================================= //
    // ============================================================================================================ //

    
    // ============================================================================================================ //
    // ========================================= Controller Menu Skors  =========================================== //
    // ============================================================================================================ //

    public function index_skors() {

        $skorsmodel = new SkorsModel();
        $skors =  $skorsmodel->get_all_Skors();
        $data = [
            'skors' => $skors
        ];
        return view('skors/index', $data);
    }

    // ============================================================================================================ //
    // ======================================= Controller End Menu Skors  ========================================= //
    // ============================================================================================================ //
}
