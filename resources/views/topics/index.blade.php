@extends('layout')

@section('content')

<div class="row">
	@foreach ($topics as $topic)
		<div class="card">
			<h2><a href="/topics/{{ $topic->id }}">{{ $topic->title }}</a></h2>
		</div>
	@endforeach
</ul>
</div>

@endsection