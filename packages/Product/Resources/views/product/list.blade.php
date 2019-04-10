@extends('base::layouts.master')
@section('content')

<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 align-self-center">
			<h4 class="text-themecolor">{{ trans('product::product.text_listting_product') }}</h4>
		</div>
		<div class="col-md-7 align-self-center text-right">
			<div class="d-flex justify-content-end align-items-center">
				<a href="{{ route('products.get.create') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> {{ trans('product::product.btn_create_product') }}</a> 

				<a href="{{ route('admin.product.export') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-file-excel-o"></i> {{ trans('product::product.btn_export_excel') }}</a>

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
		<div class="col-lg-12">
			@include('base::partials.flash-notifitions')
			<div class="card">
				<div class="card-header bg-info">
				    <h4 class="m-b-0 text-white">{{ trans('Sản phẩm') }}</h4>
				</div>
				<div class="card-body">
					<form action="" method="GET" class="m-b-20">
						<div class="row">
							<div class="col-md-2">
								<input type="text" name="title" class="form-control" placeholder="Tên sản phẩm" autocomplete="off">
							</div>
							<div class="col-md-2">
								<select class="form-control" name="product_category_id">
									<option value="">Danh mục vật tư</option>
									<option>Vật tư 1</option>
								</select>
							</div>
							<div class="col-md-3">
								<div class="row">
									<div class="col-md-6"><input min="0" type="number" name="fprice" class="form-control" placeholder="Giá bắt đầu"></div>
									<div class="col-md-6"><input min="0" type="number" name="tprice" class="form-control" placeholder="Đến giá"></div>
								</div>
							</div>
							<div class="col-md-2">
								<select class="form-control" name="type">
									<option value="0">Loại sản phẩm</option>
									<option>Đơn hàng nhập</option>
									<option>Website online</option>
								</select>
							</div>
							<div class="col-md-1">
								<select class="form-control" name="status">
									<option value="">Status</option>
									<option value="1">Enabled</option>
									<option value="0">Disabled</option>
								</select>
							</div>
							<div class="col-md-2">
								<button class="btn btn-info d-none d-lg-block" type="submit"><i class="ti-search"></i> Lọc sản phẩm</button>
							</div>
						</div>
					</form>
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover product-overview" id="product-datatables">
							<thead>
								<tr>
									<th style="width: 8px;"><input type="checkbox" class="" id="checkall"></th>
									<th class="text-left">{{ trans('product::product.date_table') }}</th>
									<th class="text-left" style="width: 250px;">{{ trans('product::product.title_table') }}</th>
									<th class="text-left">{{ trans('product::product.sku_table') }}</th>
									<th class="text-left" style="width: 100px;">{{ trans('product::product.image_title') }}</th>
									<th class="text-left">{{ trans('product::product.price_table') }}</th>
									<th class="text-left">{{ trans('product::product.category_table') }}</th>
									<th class="text-left" style="width: 75px !important;">{{ trans('product::product.status_table') }}</th>
									<th class="text-left" style="width: {{ count(config('base.language')) * 50 }}px">
										@foreach(config('base.language') as $lang => $name)
	                                    	<img src="{{ asset('uploads/languages') }}/{{ $lang }}.png" title="English" alt="English">
										@endforeach
									</th>
									<th class="text-left" style="width: 120px;">{{ trans('product::product.action_table') }}</th>
								</tr>
							</thead>
							@push('jQuery')
								<script>
									$(function() {
									    $('#product-datatables').DataTable({
									        processing: true,
									        serverSide: true,
									        pageLength : 10,
									        lengthChange : false,
									        searching : false,
									        order: [],
									        columnDefs : [ {
									            targets: [0, 4, 8,9],
    											orderable: false
									        }],
									        ajax: '{!! route('admin.product.datatables.get.list') !!}',
									        columns: [
									            { data: 'check', name: 'check'},
									            { data: 'created_at', name: 'created_at' },
									            { data: 'title', name: 'title',searching : true},
									            { data: 'sku', name: 'sku'},
									            { data: 'image', name: 'image'},
									            { data: 'price', name: 'price'},
									            { data: 'catogory_title', name: 'catogory_title' },
									            { data: 'status', name: 'status' },
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
			</div>
		</div>
	</div>
</div>
@endsection
