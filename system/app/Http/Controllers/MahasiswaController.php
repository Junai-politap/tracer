<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Tracer\Form_1;
use App\Models\Tracer\Form_2;
use App\Models\Tracer\Form_3;
use App\Models\Tracer\Form_4;
use App\Models\Tracer\Form_5;
use Auth;

class MahasiswaController extends Controller
{

    public function index(){
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        return view('mahasiswa.index', $data);
    }

    public function profil()
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.profil', $data);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->username = request('username');
        $mahasiswa->confirmasi_pass = request('confirmasi_pass');
        $mahasiswa->password = request('confirmasi_pass');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();

        return redirect('mahasiswa-page');
    }

    public function tracer(Request $request)
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = $list_soal = Soal::all();
        $data['list_jawaban'] = $list_jawaban = Jawaban::all();
        
        $data['list_form_1'] = $list_form_1 = Form_1::orderBy('id_mahasiswa', 'ASC')->take(1)->get();

        $data['buka_form'] = true;
        $bagian_1 = $list_form_1->where('level', 2)->count();
        if($bagian_1 >= 8){
            $data['buka_form'] = false;
        }
        return view('mahasiswa.tracer-study', $data);
        
    }

    public function formTwo(){
        
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        return view('mahasiswa.tracer-study-form-ii', $data);

    }

    public function form3(){
        
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        return view('mahasiswa.tracer-study-form-iii', $data);

    }

    public function form4(){
        
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        return view('mahasiswa.tracer-study-form-iv', $data);

    }

    public function form5(){
        
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        return view('mahasiswa.tracer-study-form-v', $data);

    }

    public function tracerForm_I()
    {
        foreach (request('jawaban') as $id_jawaban => $value) {

        $form_1 = New Form_1;
        $form_1->id_mahasiswa = request('id_mahasiswa'); 
        $form_1->id_jawaban = $id_jawaban;
        $form_1->save();
        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }

    public function tracerForm_II()
    {
        $form_2 = Form_2::find(request('id_mahasiswa'));
		if($form_2) return back()->with('success', 'Anda Sudah Mengisi Formulir');

        $form_2 = New Form_2;
        $form_2->id_mahasiswa = request('id_mahasiswa'); 
        $form_2->jawaban_1 = request('jawaban_1');
        $form_2->jawaban_2 = request('jawaban_2');
        $form_2->jawaban_3 = request('jawaban_3');
        $form_2->jawaban_4 = request('jawaban_4');
        $form_2->jawaban_5 = request('jawaban_5');
        $form_2->jawaban_6 = request('jawaban_6');
        $form_2->jawaban_7 = request('jawaban_7');
        $form_2->jawaban_8 = request('jawaban_8');
        $form_2->save();

        return redirect('tracer-study-form-iii');
    }

    
}
