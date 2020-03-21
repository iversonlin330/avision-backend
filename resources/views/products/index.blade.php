@extends('layouts.master')

@section('title', 'index')

@section('style')
@parent
<style>
</style>
@endsection
@section('content')
 <div class="row mt-2">
	<div class="col-12">
		<a class="btn btn-primary add-btn" href="{{ url('products/create?type='.$type) }}">新增產品</a>
		<a class="btn btn-primary add-btn" data-toggle="modal" data-target="#sort_modal">產品排序</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<table class="table">
		<thead>
			<th style="width:20%;">產品名稱</th>
			<th style="width:40%;">圖片</th>
			<th style="width:15%;">Flag</th>
			<th style="width:25%;">編輯</th>
		</thead>
		<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->title }}</td>
			<td><img src="{{ asset('storage/'.$product->picture) }}"></td>
			<td>{{ Config('map.product_flag')[$product->flag] }}</td>
			<td>
				<a class="btn btn-primary edit_btn" href="{{ url('products/'.$product->id.'/edit') }}">編輯</a>
				<form method="POST" action="/products/{{$product->id}}" class="d-inline">
					{{ method_field('DELETE') }}
					<button type="submit" class="btn btn-primary delete_btn">刪除</button>
				 </form>
			</td>
		</tr>
		@endforeach
			<!--tr>
				<td>AN240</td>
				<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
			</tr>
			<tr>
				<td>AN240</td>
				<td><a class="btn btn-primary edit_btn" href="product-create.html">編輯</a><a class="btn btn-primary delete_btn" href="product-create.html">刪除</a></td>
			</tr-->
		</tbody>
	</table>
	</div>
</div>
<!--modal-->
<div id="sort_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title">產品排序</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <form action="{{ url('products') }}" enctype="multipart/form-data" method="post">
	  <div class="modal-body">
		  <ul id="group_sort">
				@foreach($products as $product)
					<li class="btn btn-primary add-btn mt-2" style="display: block;float: none;">{{ $product->title }}
						<input name="order[]" value="{{ $product->id }}" hidden>
					</li>
				@endforeach
			<ul>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-secondary cancel_btn" data-dismiss="modal">取消</button>
		<button type="submit" class="btn btn-primary add-btn">儲存</button>
	  </div>
	  </form>
	</div>
  </div>
</div>
<!--modal-->
@endsection
@section('script')
@parent
<script>
$("#group_sort,#spec_sort").sortable();
</script>
@endsection