@extends('layouts.app')

@section('content')

<div id="app">
  <a href="{{ url('/project_details') }}" class="project">Project Details</a>
  <h3>ANWAR HAMOUDE 808-209-3251</h3>
  <h1>exquisite form demo</h1>

<form-component></form-component>

<div style="margin-top:100px;">.</div>

</div>
<!-- script -->
<script src="{{ asset('js/app.js') }}"></script>

@endsection
