@extends ('admin.template.base')

@section('content')

<!-- start coding -->

   
    <div class="container">
        <div class="row">
   		    <div class="card mt-12 pt-5">
   		    	<div class="card">
   		    		<div class="card-header">
						<div class="container-fluid">
							Detail Data User
		   				</div>
                    	<div class="card-body">
                  			<h3>{{$user->nama}}</h3>
                  			<hr>
                  			<p>
                  			   {{"@".$user->username}} |
                  			   Email : {{$user->email}} 
                  			</p>
                    	</div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection