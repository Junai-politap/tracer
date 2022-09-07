<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Jawaban extends Model
{

	protected $table = "jawaban";

    function Soal(){
		return $this->belongsTo('\App\Models\Soal', 'id_soal');
	}

	function Form_I(){
		return $this->belongsTo('\App\Models\Tracer\Form_I', 'id');
	}
	
}
