@if( count($errors ))


	<div class="form-group">
		
		<div class="alert alert-danger">
			
			<ul>

				@foreach($errors->all() as $error)
				
				    <li>
				    		{{ $error }}
				    </li>

			    @endforeach
			</ul>

		</div>

	</div>

@elseif( ( $msg = session('message') ) != null )

	<div class="form-group">
		
		<div class="alert alert-success">
			
			<ul>
				
				    <li>
				    		{{ $msg }}
				    </li>

			</ul>

		</div>

	</div>

@endif