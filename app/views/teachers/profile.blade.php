@extends('layouts.default')

@section('title')
	<title>{{$fullName}} ({{$shortName}})</title>
@stop


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<img src="{{$image}}" height="200px">
			</div>
			<div class="col-xs-8">
				<h1>{{$fullName}} ({{$shortName}}) | {{$department}}</h1>
				<br>
				<h4>4/10</h4>
			</div>
		</div>

		<hr/>
		<center><h3>Ratings</h3></center>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Course Name</th>

					<th>Knowledge</th>

					<th>Teaching Style</th>

					<th>Attitude</th>

					<th>Marks Giving</th>

					<th>Over All</th>
				</tr>
			</thead>
			<tbody>


			</tbody>
		</table>
	</div>

@stop
