@extends('layouts.app')

@section('content')
	<div class="panel panel-default">
		<div class="panel panel-heading">
			Add Category
		</div>

		<form method="POST" action="/category/{{ $category->id }}/update" class="form-horizontal" role="form">
			<label for="name" class="">Name:</label>
			<input type="text" id="name" name="name" maxlength="15" value="{{ $category->name }}" required class="form-control" />
			<label for="brief" class="">Brief</label>
			<textarea id="brief" name="brief" placeholder="Enter a brief description of the category" maxlength="255" class="form-control" required>{{ $category->brief }}</textarea>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<button type="submit" class="btn btn-default">Save</button>
			<hr />
		</form>
	</div>
@endsection