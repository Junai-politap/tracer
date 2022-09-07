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
                                @foreach ($list_bagian->where('id', '96ae2422-0023-45bd-87b2-7ec4d65b027f') as $bagian)
                                    <h1>{{ $bagian->nama }} - {{ $bagian->title }}</h1>
                                @endforeach
                            </h4>
                        </header>
                        <hr class="widget-separator">

                        <div class="container">
                            <form action="{{ url('store-form-I') }}" method="post">
                                @csrf
                                <input name="id_mahasiswa" value="{{ $mahasiswa->id }}" type="hidden">

                                @foreach ($list_soal->where('id_bagian', '96ae2422-0023-45bd-87b2-7ec4d65b027f') as $soal)
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

                                                    {{-- No 1 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c4f8e-9443-4052-8354-9d59d00aa0b9')
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
                                                    {{-- End No 1 --}}

                                                    {{-- No 2 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5023-d384-4366-bf55-d1d01d77f264')
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
                                                    {{-- End No 2 --}}

                                                    {{-- No 3 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c50f5-8c12-4b90-8e5c-c91b84610478')
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

                                                    {{-- End No 3 --}}

                                                    {{-- No 4 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5132-2d9f-4aa5-bb2f-5043f79c5296')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_4"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 4 --}}

                                                    {{-- No 5 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c51aa-f05c-40b5-bfcc-2b0d657ce3ec')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_5"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 5 --}}

                                                    {{-- No 6 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c51eb-ee89-4215-a45d-e8081589badc')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_6"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 6 --}}

                                                    {{-- No 7 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5604-9a0c-43a5-8729-d0335bf433aa')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_7"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 7 --}}

                                                    {{-- No 8 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5668-6998-4cc1-ad2c-56cb699f6a3c')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_8"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 8 --}}

                                                    {{-- No 9 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5739-bf78-4f45-b3ab-7b546b6c7258')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_9"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 9 --}}

                                                    {{-- No 10 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5774-b1b3-4164-9321-a5676e255760')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_10"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 10 --}}

                                                    {{-- No 11 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c57ca-26a9-421e-8bc9-aac0d625317c')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_11"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    {{-- End No 11 --}}

                                                    {{-- No 12 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c583d-0c2e-46e1-8499-b407cd15b745')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_12"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 12 --}}

                                                    {{-- No 13 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c58f3-94df-4863-b156-5d93ba23a1f7')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_13"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 13 --}}

                                                    {{-- No 14 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5a90-a245-442a-b9c8-7a97e2c3293e')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_14"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 14 --}}

                                                    {{-- No 15 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5b14-0c82-4794-a419-a35148246be1')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_15"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 15 --}}

                                                    {{-- No 16 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5b53-be4a-4cbe-8d60-ff9e089d0e1e')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_16"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 16 --}}

                                                    {{-- No 17 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5be4-913f-47a4-b3b3-b4ecc703c3a2')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_17"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 17 --}}

                                                    {{-- No 18 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5d10-761d-43cc-ad78-77f5feff0c0a')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_18"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 18 --}}

                                                    {{-- No 19 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5d47-9557-40b1-b3bc-8f5014660200')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_19"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    {{-- End No 19 --}}

                                                    {{-- No 20 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5dbe-11d9-4a63-9920-41fd8a2cf398')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_20"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 20 --}}

                                                    {{-- No 21 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5e02-dae0-4d63-96f9-0c8763772ef6')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_21"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 21 --}}

                                                    {{-- No 22 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5e32-f05d-45e0-a843-930afa7d8cf3')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_22"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 22 --}}

                                                    {{-- No 23 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5ebb-6b02-45a6-b8f2-8aa007b8cd9e')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_23"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 23 --}}

                                                    {{-- No 24 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5eee-886a-468b-a47d-9d4ea4db792c')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_24"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 24 --}}

                                                    {{-- No 25 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5f22-d16b-4767-a5fd-a54c3fd14f77')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_25"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 25 --}}

                                                    {{-- No 26 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5fa4-71a7-47f7-9c08-0e142de23474')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_26"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 26 --}}

                                                    {{-- No 27 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c5fd6-cd86-4f48-a28e-1cb76d3f4a26')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_27"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>

                                                    {{-- End No 27 --}}

                                                    {{-- No 28 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c60e9-e27e-40f2-9d08-b9f4e3830890')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_28"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 28 --}}

                                                    {{-- No 29 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c612b-619e-4b70-94f9-17ea4f27742a')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_29"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 29 --}}

                                                    {{-- No 30 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c61db-b224-4b25-b29f-25e867c7b506')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_30"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 30 --}}

                                                    {{-- No 31 --}}
                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '970c6212-25dc-4260-a6ce-ca9cd466e262')
                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio" name="jawaban_31"
                                                                            value="{{ $jawaban->id }}">
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    {{-- End No 31 --}}
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
