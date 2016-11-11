@extends ('layouts.admin')


@section('content')
	<h1>Create Post</h1>

	<div class="row">

	{!! Form::open(['url' => 'admin/posts', 'method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => 'true']) !!}
		<div class="form-group">
			{!! Form::label('photo_id', 'Photo:') !!}
			{!! Form::file('photo_id') !!}
		</div>

		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('categ ory_id', 'Category:') !!}
			{!! Form::select('category_id', [1 => 'PHP', 2 => 'JavaScript'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body', 'Text:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 10]) !!}
		</div>

		<div class="form-group">
			{!! Form::button('Create Post', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

	</div>

	<div class="row">@include('includes.form_error')</div>

@stop