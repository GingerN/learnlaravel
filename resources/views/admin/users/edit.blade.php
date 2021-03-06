@extends('layouts.admin')

@section('content')

	<h1>Edit Users</h1>

	<div class="row">

	<div class="col-sm-3">
		<img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
	</div>

	<div class="col-sm-9">

	{{-- {!! Form::model(['url' => 'admin/users/'.$user->id, 'method' => 'patch', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!} --}}
	{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

		<div class="form-group">
			{!! Form::label('photo_id', 'Avatar:') !!}
			{!! Form::file('photo_id') !!}
		</div>

		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('role_id', 'Role:') !!}
			{!! Form::select('role_id', [''=>'Choose Options']+$roles, null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('is_active', 'Status:') !!}
			{!! Form::select('is_active', [1=>'Active', 0=>'Not Active'], null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::button('Edit User', ['type'=>'submit', 'class'=>'btn btn-primary col-sm-6']) !!}
		</div>

	{!! Form::close() !!}


	{!! Form::open(['method'=>'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}
		<div class="form-group">
			{!! Form::button('Delete User', ['type'=>'submit', 'class'=>'btn btn-danger col-sm-6']) !!}
		</div>
	{!! Form::close() !!}

	</div>
	</div>

	<div class="row">@include('includes.form_error')</div>

	

@stop