@extends('layout')

@section('konten')
  <div id="content" class="main-content">
    <div class="layout-px-spacing">
      <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home" style="font-size:16px">Home</a></li>
          </ol>
        </nav>
      </div>

      <div class="row layout-top-spacing">

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
          <div class="widget widget-one">
            <div class="widget-heading">
              <h6 class="">Pemeriksaan Tahun Berjalan</h6>

              <div class="task-action">
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>
                </div>
              </div>
            </div>
            <div class="w-chart">

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">Proses</p>
                  <p class="w-stats">{{ $rikjalan }}</p>
                </div>
              </div>


              <div class="w-chart-section paid-visits-content">
                <div class="w-detail">
                  <p class="w-title">Selesai</p>
                  <p class="w-stats">{{ $jml_lhp }}</p>
                </div>
              </div>

            </div>

            <div class="w-chart">
              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">JT Tepat Waktu < 14 Hari</p>
                      <a href="#">
                        <p class="w-stats">{{ $jtw14h }} SP2</p>
                      </a>
                </div>
              </div>

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">JT Daluarsa < 14 Hari</p>
                      <a href="#">
                        <p class="w-stats">{{ $jt14h }} SP2</p>
                      </a>
                </div>
              </div>

            </div>

            <div class="w-chart">
              @foreach ($tepat as $d)
                <div class="w-chart-section total-visits-content">
                  <div class="w-detail">
                    <p class="w-title">Pemeriksaan Tepat Waktu</p>
                    <p class="w-stats">{{ $d->rik_tepat_waktu }}</p>
                  </div>
                </div>

                <div class="w-chart-section total-visits-content">
                  <div class="w-detail">
                    <p class="w-title">Pemeriksaan Tidak Tepat Waktu</p>
                    <p class="w-stats">{{ $d->rik_tidak_tepat_waktu }}</p>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
          <div class="widget widget-one">
            <div class="widget-heading">
              <h6 class="">SKP, Refund Discrepancy, dan Realisasi Konversi</h6>

              <div class="task-action">
                <div class="dropdown">
                  <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                  </a>
                </div>
              </div>
            </div>
            <div class="w-chart">

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">SKP Terbit Tahun Berjalan</p>
                  <p class="w-stats">{{ 'Rp ' . number_format($tot_skpkb, 0, ',', '.') }}</p>
                </div>
              </div>


              <div class="w-chart-section paid-visits-content">
                <div class="w-detail">
                  <p class="w-title">SKP Cair Selama Tahun Berjalan</p>
                  <p class="w-stats">Rp 235,123,456,852</p>
                </div>
              </div>

            </div>

            <div class="w-chart">

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">Refund Discrepancy</p>
                  <p class="w-stats" style="font-size: 12px">*dalam pengembangan</p>
                </div>
              </div>

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">Konversi</p>
                  <p class="w-stats">{{ $tot_konversi }}</p>
                </div>
              </div>
            </div>

            <div class="w-chart">

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  <p class="w-title">LHP Riil</p>
                  <p class="w-stats">{{ $jml_lhp }} LHP</p>
                </div>
              </div>

              <div class="w-chart-section total-visits-content">
                <div class="w-detail">
                  {{-- <p class="w-title"> Total Riksus</p>
                  <p class="w-stats"> 12</p> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
          <div class="widget-four">
            <div class="widget-heading">
              <h5 class="">Penerimaan PKM P3</h5>
            </div>
            <div class="widget-content">
              <div class="vistorsBrowser">
                <div class="browser-list">
                  <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" strokeWidth={2}>
                      <path strokeLinecap="round" strokeLinejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                  </div>
                  <div class="w-browser-details">
                    <div class="w-browser-info">
                      <h6>Non Penagihan</h6>
                      <p class="browser-count">Rp 189,739,902,201</p>
                    </div>
                  </div>
                </div>

                <div class="browser-list">
                  <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" strokeWidth={2}>
                      <path strokeLinecap="round" strokeLinejoin="round"
                        d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                  </div>
                  <div class="w-browser-details">

                    <div class="w-browser-info">
                      <h6>Dengan Penagihan</h6>
                      <p class="browser-count">Rp 190,128,123,900</p>
                    </div>

                  </div>

                </div>

                <div class="browser-list">
                  <div class="w-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                  </div>
                  <div class="w-browser-details">

                    <div class="w-browser-info">
                      <h6>Total</h6>
                      <p class="browser-count">Rp 345,234,567,232</p>
                    </div>

                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
          <div class="widget-four">
            <div class="widget-heading">
              <h5 class="">Cari Data Pemeriksaan WP</h5>
            </div>
            <div class="widget-content">
              <form class="simple-example" action="" novalidate>
                <div class="form-row">
                  <div class="col-md-12 mb-4">
                    <label for="fullName">NPWP (15 Digit)</label>
                    <input maxlength="15" type="text" class="form-control" id="fullName" placeholder="" value=""
                      required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary submit-fn mt-2" type="submit">Submit
                  form</button>
              </form>
            </div>
          </div>
        </div>


      </div>


    </div>
  </div>
@endsection
