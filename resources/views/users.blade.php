@extends('master')
@section('article')

	<fieldset>
		
		<ul>
			
			@foreach($users as $user)
				 <li>

				 	<form action="{!! "/users/".$user->id !!}" method="POST">
						    <input type="hidden" name="_method" value="DELETE">
    						{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    						<div class="form-group">
    							<label> {!! $user->username !!} </label>
    							<button type="submit" class="pull-right">
    								<span class="glyphicon glyphicon-remove "></span>
    							</button>
    						</div>
				 	</form>
				 	
				 </li>
			@endforeach
		</ul>
		
	</fieldset>
@stop
