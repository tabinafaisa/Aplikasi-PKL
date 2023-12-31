    @extends('template.layout')
    @section('content')
        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="wallet-widget card p-5">
                            <div class="row">
                                <button class="btn btn-primary col-sm-5 m-2" id="peserta">Peserta</button>
                                <button class="btn btn-primary col-sm-5 m-2" id="pembimbing">Pembimbing</button>
                                @if (Session::has('notif'))
                                    <div class="alert alert-success">{{ Session::get('notif')['msg'] }}</div>
                                @endif
                                @if (Session::has('message'))
                                    <div class="alert alert-danger">{{ Session::get('message')['msg'] }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="display: none;" id="tabelpembimbing">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Master Data Pembimbing</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>NIP</th>
                                                <th>Keahlian</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pembimbing as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->nama }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->nip }}</td>
                                                    <td>{{ $value->keahlian }}</td>
                                                    <td>
                                                        <a href="" class="btn btn-warning">Edit</a>
                                                        <a href="" class="btn btn-info">Detail</a>
                                                        {{-- <a href="" class="btn btn-danger">Delete</a> --}}
                                                        <form action="/delete/{{ $value->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="display: none;" id="tabelpeserta">
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Master Data Peserta</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>NISN</th>
                                                <th>Jurusan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telepon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($peserta as $key => $value)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $value->nama }}</td>
                                                    <td>{{ $value->username }}</td>
                                                    <td>{{ $value->NISN }}</td>
                                                    <td>{{ $value->jurusan }}</td>
                                                    <td>{{ $value->jenis_kelamin }}</td>
                                                    <td>{{ $value->no_telepon }}</td>
                                                    <td>
                                                        @if ($value->status == 'inactive')
                                                            <a href="{{ url('/user/peserta_approve/' . $value->id) }}"
                                                                class="btn btn-success" style="width: 100%">Approve</a>
                                                        @endif
                                                        <form action="/update/{{ $value->id }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-warning" style="width: 100%">Edit</button>
                                                        </form>
                                                        {{-- <a href="{{ url('/edit'. $value->id) }}" class="btn btn-warning">Edit</a> --}}
                                                        {{-- <a href="{{url('/delete/'. $value->id)}}" class="btn btn-danger">Delete</a> --}}
                                                        <form action="/delete/{{ $value->id }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" style="width: 100%">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('js')
        <script>
            // console.log($('#peserta'))
            $('#peserta').on('click', function() {
                $('#tabelpeserta').show('slow')
                $('#tabelpembimbing').hide('slow')
            })

            $('#pembimbing').on('click', function() {
                $('#tabelpembimbing').show('slow')
                $('#tabelpeserta').hide('slow')
            })
        </script>
    @endpush
