@extends('admin.layout.layout')
    
@section('title', 'Page Title')

@section('content')


        <section class="content-header">
          <h1>
            Data Votes
            <small>candidate</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Votes</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Votes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Tools</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php $a=1; ?>
                      @foreach($votes as $vote)
                      <tr>
                        <td>{{$a++}}</td>
                        <td>{{$vote->nim}}</td>
                        <td>{{$vote->nama}}</td>
                        <td>{{$vote->kelas}}</td>
                        <td>{{$vote->angkatan}}</td>
                        <td><a href="{{route('deletevote',$vote->nim)}}" class="btn btn-warning" role="button">Reset</a></td>
                      </tr>
                      @endforeach
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Tools</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        @stop