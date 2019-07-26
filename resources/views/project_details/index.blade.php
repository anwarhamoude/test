@extends('layouts.app')

@section('content')

<a href="{{ url('/') }}" class="project">Return -></a>

<div class="card">

  <h3>Coalition Technologies</h3>
  <h4>PHP Skills Test</h4>


<p>Spend roughly 60 minutes completing as much as you can. Please submit your files even if they are not fully finished.</p>

<p>Create a webpage with a form that has the following text input fields: Product name, Quantity in stock, Price per item.</p>

    <p class="ml">The submitted data of the form should be saved in an XML / JSON file with valid XML / JSON syntax.</p>
    <p class="ml">Underneath of the form, the web page should display all of the data which has been submitted in rows ordered by date time submitted, the order of the data columns should be: Product name, Quantity in stock, Price per item, Datetime submitted, Total value number.</p>
    <p class="ml">The "Total value number" should be calculated as (Quantity in stock * Price per item).</p>
    <p class="ml">The last row should how a sum total of all of the Total Value numbers.</p>
    <p class="ml">For extra credit, include functionality to edit each line</p>

<h4>Instructions:</h4>

<h4>Solution requirements:</h4>

    <p class="ml">Use PHP / Html / Javascript / CSS.</p>
    <p class="ml">Use Twitter Bootstrap.</p>
    <p class="ml">The form should be submitting the data and updating the data being displayed on the page using Ajax.</p>
    <p class="ml">Provide all the files related to the solution in one zip file, the solution should work directly after extracting it on a server without the need to modify anything in the files to make it work.</p>
</div>


@endsection
