@extends('admin.layout.layout')
    
@section('title', 'Page Title')

@section('content')

	  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Read Candidate
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Candidate</a></li>
            <li class="active">Read Candidate</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->


@foreach($candidates as $candidate)

	<div class="col-md-6">
  <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ "Pasangan Nomor ".$candidate->no_urut}}</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <form role="form" action="cadidate/insert">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- text input -->
                    <img src="/pemilu.app/public/uploads/image/{{$candidate->photos}}" class="img-circle" width="70%">
                    <div class="form-group">
                      <label>Nomor Urut</label>
                      <input type="text" class="form-control" value="{{ $candidate->no_urut }}" disabled>
                    </div>
                    <div class="form-group">
                      <label>Tag Line</label>
                      <input type="text" class="form-control" value="{{ $candidate->tagline }}" disabled>
                    </div>
					<div class="form-group">
                      <label>Calon Ketua</label>
                      <input type="text" class="form-control" value="{{ $candidate->ketua }}" disabled>
                    </div>
					<div class="form-group">
                      <label>Calon Wakil Ketua</label>
                      <input type="text" class="form-control" value="{{ $candidate->wakil }}" disabled>
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Visi</label>
                      <textarea class="form-control" rows="3" disabled>{{ $candidate->visi }}</textarea>
                    </div>
					<div class="form-group">
                      <label>Misi</label>
                      <textarea class="form-control" rows="3" 	disabled>{{ $candidate->misi }}</textarea>
                    </div>					
                    <div class="form-group">
                      <a href="{{route('ubah',$candidate->id)}}" class="btn btn-info" role="button">Edit</a>
                      <a href="{{route('hapus',$candidate->id)}}" class="btn btn-warning" role="button">Hapus</a>
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>

@endforeach

			  
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->


@stop