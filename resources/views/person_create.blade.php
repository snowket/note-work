@extends('master')

@section('article')

    {!! Form::open(['action' => 'PersonController@store','class'=>'form']) !!}
      
  	<legend>Person Information</legend>
  <div class="form-group">
      <select name="user" class="select" >
     @foreach($users as $user)
              <option value="{!! $user->id !!}">{!! $user->username !!}</option>
         @endforeach
      </select>
  </div>
    <div class="form-group" style="display: inline;">
        <input type="radio" name="status"  class="" value="1"  required="required" > Teacher
        <input type="radio" name="status"  class="" value="2"  required="required" > Parent
    </div>

  	<div class="form-group">
  		<label for="">Email</label>
  		<input type="Email" class="form-control" name="email" placeholder="Input field">
  	</div>
    <div class="form-group">
        <label for="">Phone Number</label>
        <input type="phone" class="form-control" name="phoneNumber" placeholder="Input field">
    </div>
    <div class="form-group">
        <label for="">Peronal Number</label>
        <input type="text" class="form-control" name="personalNumber" placeholder="Input field" required="required">
    </div>


  
  	
  
  	<button type="submit" class="btn btn-primary">Submit</button>

    {!! Form::close() !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @stop
