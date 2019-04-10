@extends('base::layouts.master')
@section('themes','active')
@section('theme','active')
@section('content')
	<div class="container-fluid">
	    <div class="row" style="padding-top : 15px;">
	    	<div class="col-xs-12 col-sm-12">
				<div class="card mb-3">
				  <div class="card-header">
				     <h3><i class="fa fa-fw fa fa-paint-brush"></i> Themes</h3> 
				  </div>

				  <div class="row">
				  	@foreach($themes as $k => $t)
				  	<div class="col-xs-12 col-sm-6 col-md-3">
				  		<div class="card-body">
						    <div class="card-deck">
						        <div class="card">
						           <img class="card-img-top" src="/themes/{{ $t->name }}/screenshot.jpg" alt="{{ $t->name }}" height="300px">
						           <div class="card-body">
						              <h4 class="card-title">Theme {{ $t->name }}</h4>
						              <p class="card-text">{{ $t->description }}</p>
						              @if($t->active == 0)
						              	<a role="button" class="btn btn-primary btn-active" href="{{ route('admin.theme.get.activeTheme',$t->id) }}"> 
						              		<i class="fa fa-check"></i> Kích hoạt
						              	</a>
						              @else
						              	<a role="button" class="btn btn-success btn-active" href="javascript:void(0)"> <i class="fa fa-check"></i> Đã kích hoạt</a>
						              @endif
						           </div>
						           <div class="card-footer">
						              <small class="text-muted">Authur : {{ $t->author_name }}</small> <br />
						              <small class="text-muted">Email : {{ $t->author_email }}</small> <br />
						           </div>
						        </div>
						    </div>
						</div>
				  	</div>
				  	@endforeach
				  </div>
				</div>
				<!-- end card-->					
			</div>
	    </div>
	</div>
@endsection