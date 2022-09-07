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
                                @foreach ($list_bagian->where('id', '96ae2417-c7ce-43d6-97cb-2216283a51ff') as $bagian)
                                    <h1>{{ $bagian->nama }} - {{ $bagian->title }}</h1>
                                @endforeach
                            </h4>
                        </header>
                        <hr class="widget-separator">

                        <div class="container">
                            <form action="{{ url('store-form-I') }}" method="post">
                                @csrf
                                @foreach ($list_soal->where('id_bagian', '96ae2417-c7ce-43d6-97cb-2216283a51ff') as $soal)
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
                                                        @if ($soal->id == '9706b0be-2992-43f2-b718-0109f9683352')
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
                                                        @if ($soal->id == '9706b300-3db4-4ec7-a6c1-58f100a6ad72')
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
                                                        @if ($soal->id == '9706b315-8221-484d-a3f0-1cf1d53f95ce')
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
                                                        @if ($soal->id == '9706b328-784a-41b7-ace8-7c884e8150f3')
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
                                                        @if ($soal->id == '9706b343-9abf-42cb-9cc2-708c1e53f312')
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
                                                        @if ($soal->id == '9706b354-3a57-40eb-a8ce-55e6f7314113')
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
                                                        @if ($soal->id == '9706b367-0a4c-4ceb-adfa-df8441fd8764')
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
                                                        @if ($soal->id == '9706be6d-d82d-4ff3-a18c-db46fd1097b8')
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
                                                        @if ($soal->id == '9706be7c-0e1b-443c-86e4-eafc015539c1')
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
                                                        @if ($soal->id == '9706bea3-32af-4836-b9ab-1c052b6d07db')
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
                                                        @if ($soal->id == '9706beb3-73f2-4bad-80df-b1652b97590a')
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
                                                        @if ($soal->id == '9706bec3-9070-4fd1-817b-76d249546f33')
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
                                                        @if ($soal->id == '9706bed0-fb3d-4715-8a95-a02d55115412')
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
                                                        @if ($soal->id == '9706bedd-56bf-4726-9cbd-d36410768323')
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
                                                        @if ($soal->id == '9706beea-7a7a-44bb-a82b-cadd077749ea')
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
                                                        @if ($soal->id == '9706bef8-09e8-4f82-a9f0-31722b8a684b')
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
                                                        @if ($soal->id == '9706bf05-e933-4ca3-8157-3bff09de4f83')
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
                                                        @if ($soal->id == '9706bf12-9cfc-4240-a6f3-38fd1a9c7f9a')
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
                                                        @if ($soal->id == '9706bf1f-af53-455b-8922-9ddd5341910b')
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
                                                        @if ($soal->id == '9706bf2c-298f-4785-a768-5681d78b7892')
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
                                                        @if ($soal->id == '9706c00a-07c3-4f59-a50e-0eb8fadf62e5')
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
                                                        @if ($soal->id == '9706c025-81fa-42bd-bbac-57bdf7e78d46')
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
                                                    {{-- End No 22 --}}

                                                    {{-- No 23 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '9706c06b-a33f-420f-a9f2-b70bf25165ac')
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
                                                    {{-- End No 23 --}}

                                                    {{-- No 24 --}}

                                                    <div class="news_post_title_container">
                                                        @if ($soal->id == '9706c078-13df-49da-8dcb-7d6ed857ac9f')
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
                                                        @if ($soal->id == '9706c083-b58b-4fd8-817e-2ed0963fe312')
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
                                                        @if ($soal->id == '9706c091-722e-4e61-8ac9-75ed49165f39')
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
                                                        @if ($soal->id == '9706c09f-20b6-4b7d-9386-b9eb10b4bcdd')
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
                                                        @if ($soal->id == '9706c0ac-1e0e-4963-8e24-7614704dc043')
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
                                                        @if ($soal->id == '9706c0b6-af0f-4c2f-b88f-803ed2b37fae')
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
                                                        @if ($soal->id == '9706c0c4-58b1-4782-b92f-3a551254b97e')
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
                                                        @if ($soal->id == '9706c0d3-45d2-4df2-9291-10bcb5c6c1f8')
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
