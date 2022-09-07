@extends('template.mahasiswa')

@section('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA')

@section('content')
    @include('section.mahasiswa')
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <br>
                @include('section.form')
                <div class="col-md-12">
                    <div class="widget"><br>
                        <header class="widget-header"><br>
                            <h4 class="widget-title">
                                @foreach ($list_bagian->where('id', '96ae2407-65d2-4c4f-b204-77b435bd5f4c') as $bagian)
                                    <h1>{{ $bagian->nama }} - {{ $bagian->title }}</h1>
                                @endforeach
                            </h4>
                        </header>
                        <hr class="widget-separator">

                        <div class="container">
                            <form action="{{ url('store-form-I') }}" method="post">
                                @csrf
                                @foreach ($list_soal->where('id_bagian', '96ae2407-65d2-4c4f-b204-77b435bd5f4c') as $soal)
                                    <div class="form-group">
                                        <div class="col-lg-12 news_posts news_post_top d-flex flex-column ">
                                            <div class="news_posts"> <br>
                                                <div class="news_post_top d-flex flex-column flex-sm-row">
                                                    <div class="news_post_date_container">
                                                        <div
                                                            class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                                            <div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '9706a121-df85-438a-8c71-29f5b430ed2c')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_1"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                    </div>

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '9706a12f-f70c-452a-a7e0-b24d127c2d3e')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_2"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                    </div>

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '9706a151-33bf-40bd-ae0b-44e03279cb0b')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_3"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endforeach
                                <div class="form-group">
                                    <button class="btn btn-primary text-white btn-center"><i class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
