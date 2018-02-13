@extends('layout.layout')

@section('title','Cari Nasabah')
@section('main_title','Cari Nasabah')
@section('sub_title','')
@section('breadcrumb')
  <li><a href="{{ url('/dashboard') }}"><i class="fa fa-search"></i> Cari Nasabah</a></li>

@endsection
@section('contents')

<div class="row">
        <div class="col-xs-12">
          <!-- general form elements -->
          <div class="box box-primary">
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
                  <th>Nasabah Id</th>
                  <th>No Rekening</th>
                  <th>Nama Nasabah</th>
                  <th>Nama Ibu Kandung</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($APICol['Data'] as $student)
                  <tr>
                    <td>{{ $student['NASABAH_ID'] }}</td>
                    <td>{{ $student['NO_REKENING'] }}</td>
                    <td>{{ $student['NAMA_NASABAH'] }}</td>
                    <td>{{ $student['NAMA_IBU_KANDUNG'] }}</td>
                    <td>{{ $student['ALAMAT'] }}</td>
                    <td>{{ $student['Status'] }}</td>
                    <td><button class="btn btn-default">View</button></td>
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