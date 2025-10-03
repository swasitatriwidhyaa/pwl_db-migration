<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }
    public function create()
    {
        $kelasModel = new Kelas();
        $dataKelas = $kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $dataKelas
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        UserModel::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }
}
