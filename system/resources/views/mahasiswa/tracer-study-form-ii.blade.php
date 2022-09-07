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
                                @foreach ($list_bagian->where('id', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $bagian)
                                    <h1>{{ $bagian->nama }} - {{ $bagian->title }}</h1>
                                @endforeach
                            </h4>
                        </header>
                        <hr class="widget-separator">

                        <div class="container">
                            <form action="{{ url('store-form-I') }}" method="post">
                                @csrf
                                @foreach ($list_soal->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $soal)
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
                                                    
                                                        <div class="news_post_title text-dark">
                                                            <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                        </div>
                                                        @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio" name="jawaban[{{ $jawaban->id }}]" class="form-check-input" >
                                                                    <label>{{ $jawaban->jawaban }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    

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
