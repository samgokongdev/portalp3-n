@extends('layout')

@section('konten')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Realisasi Pencairan SKP Total</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>NPWP</th>
                                    <th>Nama WP</th>
                                    <th>KDMAP/KJS</th>
                                    <th>Tgl Bayar</th>
                                    <th>Masa-Tahun</th>
                                    <th>Jumlah</th>
                                    <th>NTPN</th>
                                    <th>Sumber Pen</th>
                                    <th>No LHP</th>
                                    <th>Surat Teguran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>123456898000000</td>
                                    <td>Edinburgh</td>
                                    <td>411121/300</td>
                                    <td>31/12/2022</td>
                                    <td>3-2019</td>
                                    <td>Rp 1,789,526,123</td>
                                    <td>0981003IJMC617Q8</td>
                                    <td>MPN</td>
                                    <td>LAP-00123/WPJ.07/KP.0404/RIK.SIS/2022</td>
                                    <td>ST-00000/NPWKKD/2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection