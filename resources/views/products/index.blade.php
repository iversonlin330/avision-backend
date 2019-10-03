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
		<a class="btn btn-primary add-btn" href="{{ url('products/create') }}">新增產品</a>
	</div>
</div>
<div class="row mt-2">
	<div class="col-12">
	<table class="table">
		<thead>
			<th>產品名稱</th>
			<th>圖片</th>
			<th>編輯</th>
		</thead>
		<tbody>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->title }}</td>
			<td><img src="{{ asset('storage/'.$product->picture) }}"></td>
			<td>
				<a class="btn btn-primary edit_btn" href="{{ url('products/'.$product->id.'/edit') }}">編輯</a>
				<form method="POST" action="/products/{{$product->id}}">
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
@endsection