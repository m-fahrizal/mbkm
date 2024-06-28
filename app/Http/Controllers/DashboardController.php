<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PraMbkm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        if (auth()->user()->role == 'mahasiswa') {
            
            return redirect('/home');
        }

        $total = count(Prambkm::all()) ? count(Prambkm::all()) : 1;


        $bar = [];

        $bar['Kampus Mengajar']['value'] = (count(Prambkm::where('jenis_mbkm', 'Kampus Mengajar')->get())/$total)*100;
        $bar['Studi Independen']['value'] = (count(Prambkm::where('jenis_mbkm', 'Studi Independen')->get())/$total)*100;
        $bar['Magang MSIB']['value'] = (count(Prambkm::where('jenis_mbkm', 'Magang MSIB')->get())/$total)*100;
        $bar['PMM']['value'] = (count(Prambkm::where('jenis_mbkm', 'PMM')->get())/$total)*100;
        $bar['IISMA']['value'] = (count(Prambkm::where('jenis_mbkm', 'IISMA')->get())/$total)*100;
        $bar['Wirausaha Merdeka']['value'] = (count(Prambkm::where('jenis_mbkm', 'Wirausaha Merdeka')->get())/$total)*100;
        $bar['Bangkit']['value'] = (count(Prambkm::where('jenis_mbkm', 'Bangkit')->get())/$total)*100;
        $bar['Magang Mandiri']['value'] = (count(Prambkm::where('jenis_mbkm', 'Magang Mandiri')->get())/$total)*100;
        $bar['ABN']['value'] = (count(Prambkm::where('jenis_mbkm', 'ABN')->get())/$total)*100;

        $bar['Kampus Mengajar']['bg'] = 'bg-danger';
        $bar['Studi Independen']['bg'] = 'bg-warning';
        $bar['Magang MSIB']['bg'] = 'bg-success';
        $bar['PMM']['bg'] = 'bg-purple';
        $bar['IISMA']['bg'] = 'bg-pink';
        $bar['Wirausaha Merdeka']['bg'] = 'bg-teal';
        $bar['Bangkit']['bg'] = 'bg-primary';
        $bar['Magang Mandiri']['bg'] = 'bg-info';
        $bar['ABN']['bg'] = 'bg-orange';

        $pie = [];
        $prodi = ['S1 Informatika', 'S1 Sistem Informasi', 'D3 Sistem Informasi'];
        $mbkm = ['Magang MSIB', 'Studi Independen', 'Kampus Mengajar', 'PMM', 'Wirausaha Merdeka', 'IISMA', 'Bangkit', 'Magang Mandiri', 'ABN'];

        foreach($mbkm as $m){
            foreach($prodi as $p){
                $pie[$m][$p] = PraMbkm::whereHas('mahasiswa', function($query) use ($p){
                    $query->where('prodi', $p);
                })->where('jenis_mbkm', $m)->count();
            }
        }
        $mhs = count(Mahasiswa::all());
        $mhsCount = [];

        foreach($prodi as $p){
            $mhsCount[$p] = count(Mahasiswa::where('prodi', $p)->get());
        }

        return view('dashboard', ['barData' => $bar, 'pieData' => $pie, 'mhsCount' => $mhsCount, 'mhs'=>$mhs]);
    }

    public function print()
    {
        if (auth()->user()->role == 'mahasiswa') {
            
            return redirect('/home');
        }

        $total = count(Prambkm::all()) ? count(Prambkm::all()) : 1;


        $bar = [];

        $bar['Kampus Mengajar']['value'] = (count(Prambkm::where('jenis_mbkm', 'Kampus Mengajar')->get())/$total)*100;
        $bar['Studi Independen']['value'] = (count(Prambkm::where('jenis_mbkm', 'Studi Independen')->get())/$total)*100;
        $bar['Magang MSIB']['value'] = (count(Prambkm::where('jenis_mbkm', 'Magang MSIB')->get())/$total)*100;
        $bar['PMM']['value'] = (count(Prambkm::where('jenis_mbkm', 'PMM')->get())/$total)*100;
        $bar['IISMA']['value'] = (count(Prambkm::where('jenis_mbkm', 'IISMA')->get())/$total)*100;
        $bar['Wirausaha Merdeka']['value'] = (count(Prambkm::where('jenis_mbkm', 'Wirausaha Merdeka')->get())/$total)*100;
        $bar['Bangkit']['value'] = (count(Prambkm::where('jenis_mbkm', 'Bangkit')->get())/$total)*100;
        $bar['Magang Mandiri']['value'] = (count(Prambkm::where('jenis_mbkm', 'Magang Mandiri')->get())/$total)*100;
        $bar['ABN']['value'] = (count(Prambkm::where('jenis_mbkm', 'ABN')->get())/$total)*100;

        $bar['Kampus Mengajar']['bg'] = 'bg-danger';
        $bar['Studi Independen']['bg'] = 'bg-warning';
        $bar['Magang MSIB']['bg'] = 'bg-success';
        $bar['PMM']['bg'] = 'bg-purple';
        $bar['IISMA']['bg'] = 'bg-pink';
        $bar['Wirausaha Merdeka']['bg'] = 'bg-teal';
        $bar['Bangkit']['bg'] = 'bg-primary';
        $bar['Magang Mandiri']['bg'] = 'bg-info';
        $bar['ABN']['bg'] = 'bg-orange';

        $pie = [];
        $prodi = ['S1 Informatika', 'S1 Sistem Informasi', 'D3 Sistem Informasi'];
        $mbkm = ['Magang MSIB', 'Studi Independen', 'Kampus Mengajar', 'PMM', 'Wirausaha Merdeka', 'IISMA', 'Bangkit', 'Magang Mandiri', 'ABN'];

        foreach($mbkm as $m){
            foreach($prodi as $p){
                $pie[$m][$p] = PraMbkm::whereHas('mahasiswa', function($query) use ($p){
                    $query->where('prodi', $p);
                })->where('jenis_mbkm', $m)->count();
            }
        }
        $mhs = count(Mahasiswa::all());
        $mhsCount = [];

        foreach($prodi as $p){
            $mhsCount[$p] = count(Mahasiswa::where('prodi', $p)->get());
        }

        return view('admin.dashboard.print', ['barData' => $bar, 'pieData' => $pie, 'mhsCount' => $mhsCount, 'mhs'=>$mhs]);
    }

    public function fik()
    {
        // Mengambil semua data dari tabel prambkm
        $mahasiswaFIK = count(Prambkm::all());

        return view('admin.dashboard', compact('mahasiswaFIK'));
    }
}
