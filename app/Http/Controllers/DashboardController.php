<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; 
use App\Models\Loan; 
use App\Models\User; 
class DashboardController extends Controller
{
    // Variabel untuk data umum 
protected $title = 'Dashboard'; 
protected $menu = 'dashboard'; 
protected $directory = 'admin.dashboard'; 

    public function index()
    {
        // Menyiapkan array untuk dikirim ke view 
            $data['title'] = $this->title; 
            $data['menu'] = $this->menu; 

        // Mengambil data dari database 
            $data['total_siswa'] = User::where('role', 'Siswa')->count(); 
            $data['total_item'] = Item::count(); 
            $data['total_loan'] = Loan::where('status', 'Dipinjam')->count(); 

        // Me-return view beserta data 
            return view($this->directory . '.index', $data); 
    }
}
