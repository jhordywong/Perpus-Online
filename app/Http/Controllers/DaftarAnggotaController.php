<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Anggota;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarAnggotaController extends Controller
{
    public function create()
    {
        $users = User::WhereNotExists(function($query) {
            $query->select(DB::raw(1))
            ->from('anggota')
            ->whereRaw('anggota.user_id = users.id');
         })->get();
            return view('daftaranggota.create', compact('users'));
    } 

    public function store(Request $request)
    {
        $count = Anggota::where('npm',$request->input('npm'))->count();

        if($count>0){
            Session::flash('message', 'Already exist!');
            Session::flash('message_type', 'danger');
            return redirect()->to('anggota');
        }

        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:20|unique:anggota'
        ]);

        Anggota::create($request->all());

        return redirect()->to('/home');

    }
}
