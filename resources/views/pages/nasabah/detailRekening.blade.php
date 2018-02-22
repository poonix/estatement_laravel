@extends('layout.layout')

@section('title','Detail Rekening')
@section('main_title')
  Jadwal Angsuran
@endsection
@section('sub_title','')
@section('breadcrumb')
  <li><a href="{{ url('/dashboard') }}"><i class="fa fa-search"></i> Cari Nasabah</a></li>
  <li>{{ $NamaNasabah }} </li>
  <li>Jadwal Angsuran </li>
  <li>{{ $Rekening }} </li>
@endsection
@section('contents')

<div class="row">
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
              <div class="row">
                <div class="col-sm-3">
                    <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Nasabah</label>
                            <p>{{ $NamaNasabah }}</p>
                          </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Rekening</label>
                        <p>{{ $Rekening }}</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kode Unit</label>
                        <p>{{ $Rekening }}</p>
                      </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">ID Cabang</label>
                        <p>{{ $Rekening }}</p>
                      </div>
                  </div>
                </div>
              </div>
            <!-- /.box-header -->
            <!-- form start -->
              <!--
                <form role="form">
                  <div class="row">
                    <div class="col-md-3">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Nasabah</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Rekening</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu Kandung</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Unit</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>-->
          </div>
          <!-- /.box -->
          <div class="box">
            <!--
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal Transaksi</th>
                  <th>Angsuran Ke</th>
                  <th>Pokok Transaksi</th>
                  <th>Bunga Transaksi</th>
                  <th>Total Angsuran</th>
                  <th>action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($APICol['data'] as $student)
                  <tr>
                    <td>{{ $student['TGL_TRANS']['date'] }}</td>
                    <td>{{ $student['ANGSURAN_KE'] }}</td>
                    <td>Rp. {{ number_format($student['POKOK_TRANS'],0) }}</td>
                    <td>Rp. {{ number_format($student['BUNGA_TRANS'],0) }}</td>
                    <td>Rp. {{ number_format($student['TOTAL_ANGSURAN'],0) }}</td>
                    <td><a href="#"><i class="fa fa-file-pdf-o"></i></a></td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      @endsection