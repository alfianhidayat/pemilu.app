@extends('admin.layout.layout')
    
@section('title', 'Page Title')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add New Candidate
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Candidate</a></li>
            <li class="active">Add Candidate</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
		  
			  <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Add New Candidate</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                  <form role="form" action="cadidate/insert" enctype="multipart/form-data" method="post" files="true">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Nomor Urut</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="no_urut">
                    </div>
                    <div class="form-group">
                      <label>Tag Line</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="tagline">
                    </div>
					<div class="form-group">
                      <label>Calon Ketua</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="ketua">
                    </div>
					<div class="form-group">
                      <label>Calon Wakil Ketua</label>
                      <input type="text" class="form-control" placeholder="Enter ..." name="wakil">
                    </div>

                    <!-- textarea -->
                    <div class="form-group">
                      <label>Visi</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="visi"></textarea>
                    </div>
					<div class="form-group">
                      <label>Misi</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="misi"></textarea>
                    </div>
					
					         <div class="form-group">
                      <label for="exampleInputFile">Upload Foto</label>
                      <input type="file" id="photos" name="photos">
                      <p class="help-block">Upload foto pasangan</p>
                    </div>
					
				          <div class="box-footer">
                    <input type="submit" value="submit" class="btn btn-primary">
                  </div>


                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
			  
			  
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

         @stop