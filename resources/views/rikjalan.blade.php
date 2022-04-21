@extends('layout')

@section('konten')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Pemeriksaan Berjalan</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>JT</th>
                                    <th>NP2</th>
                                    <th>NPWP</th>
                                    <th>Nama WP</th>
                                    <th>Kode RIK</th>
                                    <th>Masa</th>
                                    <th>SP2</th>
                                    <th>Tgl SP2</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12/12/2020</td>
                                    <td>1300560421112200061</td>
                                    <td>123456898000000</td>
                                    <td>Edinburgh</td>
                                    <td>1182</td>
                                    <td>012019-122019</td>
                                    <td>PRIN-0001/WPJ.07/KP.04/RIK.SIS/2020</td>
                                    <td>01/01/2020</td>
                                    <td>
                                        <a href="#">Lihat</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
