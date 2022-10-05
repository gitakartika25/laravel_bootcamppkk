@extends('template.sidebar')
@section('title', 'About')



@section('active')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">About</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">About</h6>
    </nav>
@endsection

@section('content')

    <div class="container-fluid py-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Halaman About</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2 text-justify ">
                <div class="table-responsive p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>

                                </td>
                                <td>
                                    {{ $d['nama'] }}
                                </td>
                                <td>
                                    {{ $d['alamat'] }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
