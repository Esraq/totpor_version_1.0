@extends('layouts.master')

@section('content')



<div class="search-section">
      <div class="container" style="margin-top: 6.25rem">
        <select class="search-category">
          <option value="" disabled selected>Category</option>
          <option value="cleaning">Cleaning</option>
          <option value="plumbing">Plumbing</option>
          <option value="cooking">Cooking</option>
        </select>
        <select class="search-location">
          <option value="" disabled selected>Location</option>
          <option value="new-york">New York</option>
          <option value="los-angeles">Los Angeles</option>
          <option value="chicago">Chicago</option>
        </select>
        <button class="search-btn">Search</button>
      </div>
    </div>



<br><br><br><br><br><br><br><br><br>









@endsection