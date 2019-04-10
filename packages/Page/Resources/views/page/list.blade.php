@extends('base::layouts.master')
@section('page','active')
@section("list-page","active")
@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <a href={{ route('admin.page.get.add') }} class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> {{ trans('page::page.add_page') }}</a>
				<div class="btn-group m-l-15">
                    <button type="button" class="btn btn-secondary">{{ trans('product::product.btn_language') }}</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                    	@foreach(config('base.language') as $key => $lang)
                        	<a class="dropdown-item" href="?ref_lang={{ $key }}">
                        		<img src="{{ asset('uploads/languages') }}/{{ $key }}.png" title="{{ $lang }}" alt="{{ $lang }}"> {{ $lang }}
                        	</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
	   <div class="col-xs-12 col-sm-12">
	      <div class="card mb-3">
	         <div class="card-header">
	            <h3><i class="fa fa-fw fa fa-book"></i> Pages</h3>
	         </div>
	         <div class="card-body">
	            <table class="table table-responsive-xl table-bordered" id="page-datatables">
                    <thead>
                        <tr>
                        	<th style="width: 25px;">
                        		<input type="checkbox" class="disable-checkbox" id="checkall">
                        	</th>
                            <th>{{ trans('Tiêu đề trang') }}</th>
                            <th>{{ trans('Liên kết') }}</th>
                            <th>{{ trans('page::page.post_status') }}</th>
                            <th>{{ trans('Ngày tạo') }}</th>
                            <th class="text-left" style="width: {{ count(config('base.language')) * 50 }}px">
								@foreach(config('base.language') as $lang => $name)
                                	<img src="{{ asset('uploads/languages') }}/{{ $lang }}.png" title="English" alt="English">
								@endforeach
							</th>
                            <th width="140">{{ trans('page::page.post_action') }}</th>
                        </tr>
                    </thead>
                    @push('jQuery')
						<script>
							$(function() {
							    $('#page-datatables').DataTable({
							        processing: true,
							        serverSide: true,
							        pageLength : 10,
							        lengthChange : false,
							        searching : false,
							        order: [],
							        columnDefs : [ {
							            targets: [0, 5, 6],
										orderable: false
							        }],
							        ajax: '{!! route('admin.page.datatables.get.list') !!}',
							        columns: [
							            { data: 'check', name: 'check'},
							            { data: 'title', name: 'title',searching : true},
							            { data: 'slug', name: 'slug' },
							            { data: 'status', name: 'status' },
							            { data: 'created_at', name: 'created_at' },
							            { data: 'languages', name: 'languages'},
							            { data: 'action', name: 'action'}
							        ]
							    });
							});
						</script>
					@endpush
                </table>
	         </div>
	      </div>
	      <!-- end card-->					
	   </div>
	</div>
</div>
@endsection