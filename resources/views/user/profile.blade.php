@extends('layouts.dashboard')

@section('content')

  <div class="row">
    <div class="col-md-3">

      <!-- Profile Image -->
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{ asset("/bower_components/AdminLTE/dist/img/user6-128x128.jpg") }}" alt="User profile picture">
          <h3 class="profile-username text-center">{{ $user->full_name}}</h3>
          <p class="text-muted text-center">{{ $user->userClass->full_class }}</p>

          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Mobiel nummer</b> <a class="pull-right">+316 34205420</a>
            </li>
            <li class="list-group-item">
              <b>E-mail</b> <a class="pull-right">{{ $user->email}}</a>
            </li>
            <li class="list-group-item">
              <b>Klas</b> <a class="pull-right">{{ $user->userClass->full_class }}</a>
            </li>
          </ul>

          <a href="#" class="btn btn-primary btn-block"><b>idk</b></a>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

      <!-- About Me Box -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Over mij</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <strong><i class="fa fa-book margin-r-5"></i>  Opleiding</strong>
          <p class="text-muted">
            {{ $user->userClass->education->name}}
          </p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Woonadres</strong>
          <p class="text-muted">Grevelingen 420, 2401DN, Alphen aan den Rijn, Nederland</p>

          <hr>

          <strong><i class="fa fa-map-marker margin-r-5"></i> Postadres</strong>
          <p class="text-muted">Grevelingen 420, 2401DN, Alphen aan den Rijn, Nederland</p>

          <hr>

          <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
          <p>
            <span class="label label-danger">UI Design</span>
            <span class="label label-success">Coding</span>
            <span class="label label-info">Javascript</span>
            <span class="label label-warning">PHP</span>
            <span class="label label-primary">Node.js</span>
          </p>

          <hr>

          <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->

    <div class="col-md-9">
    	<div class="box box-success">
		    <div class="box-header">
		      <h3 class="box-title">profiel pagina</h3>
		    </div><!-- /.box-header -->
		    <div class="box-body">
		    	profile
		    </div><!-- /.box-body -->
		</div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
