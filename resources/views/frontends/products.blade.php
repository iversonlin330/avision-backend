<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Avision-compare</title>
</head>
<style>
	body {
		font-family: Noto Sans, sans-serif;
		letter-spacing: 2px;
		color: #3F3F3F;
		font-size: 14px;
		line-height: 1.8em;
	}

	.product_pic {
		width: 100%;
		margin-bottom: 15px;
		//width:240px;
		//height:240px;
	}

	.left-side {
		float: left;
		width: 288px;
		padding-left: 50px;
		padding-right: 30px;
		background-color: #FAFAFA;
	}
	
	.checkbox-20{
		width: 20px;
		height: 20px;
	}
	
	.checkbox-15{
		width: 15px;
		height: 15px;
	}
	    

	#sidebar {
		background-color: #FAFAFA;
		height: 100%;
		padding: 100px 50px ;
		position: relative;
	}

	.close{
		position: absolute;
		top:3%;
		right: 8%;

	}

	.search {
		margin: 0 auto;
		margin-bottom: 30px;
		width: 90%;
	}

	.search input {
		background-color: #EBEBEB !important;
		border-radius: 8px;
		font-size: 15px;
		padding: 15px;
		height: 40px;
		color: #9B9B9B;
		border: none;
		border-right: solid #FFFFFF 1px !important;
	}

	.search .input-group-text {
		background-color: #EBEBEB !important;
		border: none;
	}

	.left-side-title {
		padding-left: 15px;
		margin-bottom: 25px;
		font-size: 18px;
		font-weight: 500;
		border-left: 4px solid #356796;
	}

	.left-side-item {
		font-size: 16px;
		margin-bottom: 10px;
	}

	.first-check {
		width: 5vh;
		height: ;
	}

	.second {
		margin-bottom: 15px;
	}

	.second input {
		//width:15px;
		height: 15px;
	}

	hr {
		margin-bottom: 30px;
		margin-top: 30px;
	}

	.right-side {
		float: left;
		margin-top: 100px;
	}


	.card {
		border: none;
		margin-bottom: 30px;
		position: relative;
	}

	.product-tag {
		position: absolute;
		left: 15px;

	}

	.card-title input {
		margin-top: .05rem;
	}

	.card-body {
		border: none;
		box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.2);
		padding: 15px;
		height: auto;
	}

	.product {
		float: left;
		margin-left: 34px;
		margin-bottom: 35px;
		width: 245px;
		height: 475px;
		background-color: #FFFFFF;
		box-shadow: 0px 0px 10px rgba(63, 63, 63, 0.4);
	}

	.product_header .form-check {
		margin-right: 15px;
		font-size: 12px;
	}

	.card-title .form-check {
		//margin-right: 15px;
		font-size: 12px;
	}

	.product_header input {
		width: 15px;
		height: 15px;
	}

	.product_img {
		margin-bottom: 15px;
	}

	.product_title {
		font-size: 16px;
		text-align: center;
		margin-bottom: 15px;
		font-weight: bold;
	}

	.product_description ul {
		font-size: 14px;
		color: #9B9B9B;
		//margin-left: 30px;
		margin-bottom: 20px;
	}

	.product_btn {
		text-align: center;
		margin-bottom: 10px;
	}

	.product_btn a {
		//width:125px;
		//height:35px;
		background-color: #FFFFFF;
		color: #2F4D6A;
		border: 1px solid #356796;
		font-size: 12px;
		padding: 8px 15px;
	}

	.product_btn a:hover {
		background-color: #356796;
		color: #FFFFFF;
	}

	.more_btn {
		margin-top: 20px;
		padding: 10px 20px;
		text-align: center;
	}

	.more_btn a {
		background-color: #fff;
		border: 1px solid #3F3F3F;
		color: #3F3F3F;
		padding: 9px 50px;
		font-size: 14px;

	}

	.more_btn a:hover {
		background-color: #3F3F3F;
		border: 1px solid;
		color: #fff;
		padding: 9px 50px;
	}

	.more_btn a:active {
		background-color: #3F3F3F;
	}
	
	.compare_show_btn{
		background-color: #dbdbdd;
		text-align: center;
		padding: 5px 10px;
		width: 120px!important;
		border-radius: 5px 5px 0 0 ;
		position: fixed;
		right: 0;
		bottom: 0;
		width: 100%;
		text-align: center;
	}
	
	.compare {
		position: fixed;
		left: 0;
		bottom: 0;
		width: 100%;
		background-color:#fafafa;
		text-align: center;
		padding: 30px 130px; 
		box-shadow:0px 0px 10px rgba(0,0,0,0.2);
		//padding-left:165px;
	}
	
	.compare_list{
		padding-left: 20px;
	}

	

	.compare_close {
		margin-right: 15px;
		margin-top: 15px;
		height: 25px;
		color: #3F3F3F;
	}

	.compare_close img{
		padding: 5px;
	}

	.compare_close img:hover{
		background-color: #efefef;
		opacity: 0.8;
		border-radius: 50%;
	}

	.compare_title {
		font-size: 16px;
		font-weight: 500;
		margin-bottom: 15px;
		width: 350px;
	}


	.compare img {
		//width: 65px;
		max-height: 65px;
		margin-bottom: 10px;
	}

	.compare_btn {
		width: 160px;
		text-align: center;
		
	}

	.flexbox{
		display: flex;
		align-items: center;
	}

	.compare_btn {
	    background-color: #fff;
	    border: 1px solid #3F3F3F;
	    color: #3F3F3F;
	    padding: 9px 40px;
	    font-size: 14px;
	}

	.compare_btn:hover {
	    background-color: #3F3F3F;
	    border: 1px solid;
	    color: #fff;
	    padding: 9px 40px;
	}

	/*排版*/
	.mt-100 {
		margin-top: 100px;
	}

	/*RWD*/
	.search_text {
		color: #356796;
		font-size: 16px;
		margin: 10px 0;
		font-weight: bold;
	}

	@media (max-width: 768px) {
		#sidebar{
		padding: 60px 50px;			
		}
		.left-side-title{
			font-size: 20px;
		}
		.left-side-item{
			font-size: 18px;
		}
		.right-side {
		margin-top: 0px;
		}
		.compare{
			padding: 20px;
		}
	}
</style>

<body>
	<div class="container-fluid" id="app">
		<div class="row">
			<div class="col-md-12 d-md-none search_text" onclick="sidebar('show')">進階搜尋></div>
			<div id="sidebar" class="col-md-3 d-none d-md-block">
				<button type="button" class="close d-block d-sm-none" aria-label="Close" onclick="sidebar('hide')">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="search">
					<div class="input-group">
						<input id="search_input" type="text" class="form-control"
							aria-label="Dollar amount (with dot and two decimal places)" placeholder="搜尋⋯">
						<div class="input-group-append" onclick="filter_cal()">
							<span class="input-group-text" style=""><img src="{{asset('/images/icon-search.png')}}" alt=""></span>
						</div>
					</div>
				</div>

				<div class="left-side-title">產品類型</div>
				<div class="form-check ml-3">
					<input class="form-check-input checkbox-20 filter" type="checkbox" value="scanner" data-type="type">
					<label class="form-check-label left-side-item" for="defaultCheck1">掃描器</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="1" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						文件掃描系列
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="2" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						平台掃描系列
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="3" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						智慧可攜式掃描
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="4" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						文件直通車系列
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="5" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						多功能掃描系列
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="6" data-type="type">
					<label class="form-check-label mb-5" for="defaultCheck1">
						生產級掃描儀
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input checkbox-20 filter" type="checkbox" value="laser" data-type="type">
					<label class="form-check-label left-side-item" for="defaultCheck1">
						雷射印表機
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="7" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						印表機
					</label>
				</div>
				<div class="form-check ml-5">
					<input class="form-check-input checkbox-15 filter" type="checkbox" value="8" data-type="type">
					<label class="form-check-label" for="defaultCheck1">
						多功能事務系列
					</label>
				</div>
				<hr>
				<div class="left-side-title">產品功能</div>
				@foreach($filters as $filter)
				<div class="form-check ml-5">
					<input class="form-check-input filter" type="checkbox" data-type="filter" value="{{ $filter->id }}">
					<label class="form-check-label" for="defaultCheck1">{{ $filter->title }}</label>
				</div>
				@endforeach
				<div class="col-md-12 d-md-none text-center">
					<div class="btn btn-primary" style="font-size: 14px; background-color:#356796; padding: 8px 40px; margin-top:30px;" onclick="sidebar('hide')">送出查詢</div>
				</div>
			</div>
			<div class="col-md-9 col-sm-12 right-side ">
				<div class="row">
				
					@foreach($products as $product)
					<div class="col-md-3 col-sm-6 col-6 product-card" data-title="{{ $product->title }}" data-type="{{ $product->type_id }}" data-filter="{{ json_encode($product->filter) }}">
						<div class="card">
							<div class="product-tag">
								@if($product->flag == 2)
									<img src="{{ asset('/images/icon_product_new.png') }}" alt="">
								@elseif($product->flag == 3)
									<img src="{{ asset('/images/icon_product_hot.png') }}" alt="">
								@endif
							</div>
							<div class="card-body">
								<h5 class="card-title">
									<div class="form-check text-right">
										<input class="form-check-input add-compare" type="checkbox" value="{{ $product->id }}"
											id="product_{{ $product->id }}">
										<label class="form-check-label" for="defaultCheck1">
											加入比較
										</label>
									</div>
								</h5>
								<img class="product_pic" src="{{ asset('storage/'.$product->picture) }}">
								<div class="product_title">
								{{ $product->title }}
								</div>
								<div class="product_description">
									<ul>
										<li>{{ $product->characteristic_1 }}</li>
										<li>{{ $product->characteristic_2 }}</li>
										<li>{{ $product->characteristic_3 }}</li>
									</ul>
								</div>
								<div class="product_btn">
									<a class="btn" href="{{ url('frontends/product-detail/'.$product->id) }}">查看產品詳情</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="compare_show_btn">
		產品比較
	</div>
	<div class="compare">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="text-left">
					<div class="compare_title">產品比較</div>
					<div class="d-none d-md-block">右側產品皆已加入比較，至多可選擇三項或立即比較來查看比較結果。</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="row compare_list mx-auto">
				</div>
			</div>
			<div class="col-md-2 col-sm-2 flexbox">
				<div style="float:left;margin:20px auto;"><a class="btn compare_btn"
						href="compare.html">立即比較</a></div>
			</div>
			<div class="compare_close" style="position: absolute; top:0; right:1%;"><img src="{{asset('/images/cross-icons.png')}}" alt=""></div>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.21/dist/vue.js"></script>
	<script>
		var json_str = localStorage.getItem("product-compare");
		if(json_str == null){
			localStorage.setItem("product-compare", JSON.stringify([]));
		}
		$(".compare").hide();
		refresh_compare();
		
		function refresh_compare(){
			var json_str = localStorage.getItem("product-compare");
			if (JSON.parse(json_str)) {
				var arr = JSON.parse(json_str);
				$(".compare_list").empty();
				$(".add-compare").prop('checked',false);
				if(arr.length == 0)
					return;
				for (x in arr) {
					//$('[value="'+arr[x]+'"]').prop('checked',true);
					$('#product_'+arr[x]).prop('checked',true);
					var picture_src = $('#product_'+arr[x]).closest('.card-body').find('.product_pic').attr('src');
					var picture_title = $('#product_'+arr[x]).closest('.card-body').find('.product_title').text();
					$(".compare_list").append("<div class='col-md-4 col-sm-4'><div onclick='remove_compare("+arr[x]+")'><img src='/images/cross-icons" + ".png' style='width:15px; margin-left:8px; float:right; '></div><div><img src='"+picture_src+"'></div><div>"+picture_title+"</div></div>");
				}
				$(".compare").show();
			}
		}
		
		function remove_compare(id){
			var id = String(id);
			var json_str = localStorage.getItem("product-compare");
			var arr = JSON.parse(json_str);
			if (arr.indexOf(id) > -1) {
				arr.splice(arr.indexOf(id), 1);
				localStorage.setItem("product-compare", JSON.stringify(arr));
			}
			refresh_compare();
		}
		

		$(".add-compare").click(function () {
			$(".compare").show();
			var json_str = localStorage.getItem("product-compare");
			if (JSON.parse(json_str)) {
				var arr = JSON.parse(json_str);
				if (arr.indexOf($(this).val()) > -1) {
					arr.splice(arr.indexOf($(this).val()), 1);
				} else {
					if (arr.length >= 3) {
						alert('大於三');
						return false;
					}else{
						arr.push($(this).val());
					}
				}
			} else {
				var arr = [];
			}

			//var json_str = JSON.stringify(arr);
			localStorage.setItem("product-compare", JSON.stringify(arr));
			refresh_compare();
		});
		
		$(".compare_close").click(function () {
			$(".compare").hide();
			$(".compare_show_btn").show();
			//localStorage.setItem("product-compare", JSON.stringify([]));
		});
		
		$(".compare_show_btn").click(function () {
			$(".compare").show();
			$(".compare_show_btn").hide();
			//localStorage.setItem("product-compare", JSON.stringify([]));
		});

		function sidebar(type) {
			if (type == "show") {
				$("#sidebar").removeClass('d-none');
			} else {
				$("#sidebar").addClass('d-none');
			}
		}
		
		$(".filter").change(function(){
			let data_type = $(this).data('type');
			if(data_type == 'type'){
				let type = $(this).val();
				let is_checked = $(this).prop('checked');
				if(type == 'scanner'){
					$(".filter[value=1]").prop('checked',is_checked);
					$(".filter[value=2]").prop('checked',is_checked);
					$(".filter[value=3]").prop('checked',is_checked);
					$(".filter[value=4]").prop('checked',is_checked);
					$(".filter[value=5]").prop('checked',is_checked);
					$(".filter[value=6]").prop('checked',is_checked);
				}else if(type == 'laser'){
					$(".filter[value=7]").prop('checked',is_checked);
					$(".filter[value=8]").prop('checked',is_checked);
				}
				
				/*
				var values = $(".filter:checked").map(function(index,domElement) {
					return $(domElement).val();
				}).get();
				
				if(values.length > 0){
					$(".product-card").hide();
					for(x in values){
						$(".product-card[data-type="+values[x]+"]").show();
					}
					console.log(values[x]);
				}else{
					$(".product-card").show();
				}
				*/
			}else if(data_type == 'filter'){
				
			}
			filter_cal();
		});
		
		function filter_cal(){
			//Type
			var values = $(".filter:checked[data-type='type']").map(function(index,domElement) {
				return $(domElement).val();
			}).get();
			
			if(values.length > 0){
				$(".product-card").hide();
				for(x in values){
					$(".product-card[data-type="+values[x]+"]").show();
				}
			}else{
				$(".product-card").show();
			}
			
			//Filter
			var filters = $(".filter:checked[data-type='filter']").map(function(index,domElement) {
				return $(domElement).val();
			}).get();
			
			if(filters.length > 0){
				$(".product-card:visible").each(function(){
					$(this).hide();
					let product_filter = $(this).data('filter');
					for(x in product_filter){
						if(filters.indexOf(product_filter[x]) > -1){
							$(this).show();
						}
					}
				});
			}
			
			//Search
			let search_val = $("#search_input").val();
			if(search_val){
				$(".product-card:visible").each(function(){
					$(this).hide();
					if($(this).is("[data-title*='"+search_val+"']")){
						$(this).show();
					}
				});
			}
			
		}
		
	</script>
</body>

</html>