<?php

namespace App\Models\Tracer;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Form_I extends Model
{

	public $table = "form_1";

	function Mahasiswa(){
		return $this->belongsTo('\App\Models\Mahasiswa', 'id_mahasiswa');
	}

    function Soal(){
		return $this->belongsTo('\App\Models\Soal', 'id_soal');
	}

    function Jawaban(){
		return $this->belongsTo('\App\Models\Jawaban', 'id_jawaban');
	}

}
