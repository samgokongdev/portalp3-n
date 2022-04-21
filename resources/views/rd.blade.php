@extends('layout')

@section('konten')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Summary SKPLB</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No. LHP</th>
                                    <th>NPWP</th>
                                    <th>Nama WP</th>
                                    <th>Nominal SKPLB</th>
                                    <th>Refund Discrepancy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>LAP-00123/WPJ.07/KP.0404/RIK.SIS/2022</td>
                                    <td>123456789000000</td>
                                    <td>Edinburgh</td>
                                    <td>Rp 678,989,999,123</td>
                                    <td>Rp 125,125,122,356</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
