<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Avision</title>
</head>
<style>
	body {
		font-family: Noto Sans, sans-serif;
		letter-spacing: 2px;
		color: #3F3F3F;
		font-size: 14px;
		line-height: 1.8em;
	}

	.bread {
		margin-top: 100px;
		margin-bottom: 20px;
		color: #9B9B9B;
	}

	.main {
		margin-top: 20px;
		background-color: #FAFAFA;
		padding: 50px 0px 50px 165px;
		height: 600px;
	}

	#main {
		background-color: #FAFAFA;
		padding: 50px 0;
		position: relative;
	}

	.main-left {
		float: left;
		margin-right: 30px;
	}

	.main-right {
		float: left;
	}

	.main-title {
		font-size: 24px;
		font-weight: bold;
		margin-bottom: 10px;
	}

	.main-left-img img {
		width: 539px;
		height: 303px;
		margin-bottom: 20px;
	}

	.main-left-img-list img {
		float: left;
		width: 122px;
		height: 122px;
		margin-left: 10px;
	}

	#left img {
		width: 100%;
	}

	.product-des {
		font-size: 18px;
		letter-spacing: 3px;
		margin-left: 10px 0;
	}

	.cert img {
		height: 40px;
	}

	.add-compare{
		font-size: 16px;
		font-weight: normal;
	}

	.contact_btn {
		margin-top: 40px;
	}

	.contact_btn a {
		background-color: #fff;
		border: 1px solid #3F3F3F;
		padding: 9px 70px;
		font-size: 14px;
	}

	.contact_btn a:hover {
		background-color: #3F3F3F;
		color: white !important;
	}

	.nav-link {
		font-size: 16px;
		font-weight: 500;
		padding-bottom: 15px;
		margin-right: 35px;
		color: #9B9B9B !important;
	}

	.nav-link.active {
		color: #2F4D6A !important;
		border-color: white !important;
		border-bottom: 4px solid #356796 !important;
	}

	#myTabContent {
		margin-bottom: 100px;
	}

	.nav-tabs {
		border-bottom: white;
	}

	.table-title {
		//color: #FFFFFF;
		font-size: 15px;
		font-weight: 400;
		float: left;
	}

	.table-header {
		background-color: #2F4D6A;
		color: #FFFFFF;
		font-size: 16px;
		font-weight: 500;

	}

	.table-header.active {
		background-color: white;
		color: #2F4D6A;
		font-size: 16px;
		font-weight: 500;
	}

	.btn-primary {
		color: white !important;
	}

	.download-table {
		color: #555656;
		font-size: 16px;
	}
/*
	.download-table th:nth-child(1) {
		width: 20%;
	}

	.download-table th:nth-child(2) {
		width: 10%;
	}

	.download-table th:nth-child(3) {
		width: 20%;
	}

	.download-table th:nth-child(4) {
		width: 40%;
	}

	.download-table th:nth-child(5) {
		width: 10%;
	}
*/
	.download-table td {
		padding: 10px !important;
		vertical-align: middle;
		font-size: 14px;
	}

	.download-table tr {
		border-bottom: solid 1px #EBEBEB;
	}

	.btn-download {
		background-color: #356796;
		border: none;
		padding: 5px 15px;
		font-size: 14px;
	}

	#T4 {
		font-size: 16px;
		font-weight: 500;
	}

	#T4 img {
		width: 100%;
	}

	[data-toggle="collapse"] img {
		max-height: 10px;
	}

	[aria-expanded="true"] .table-header {
		background-color: white;
	}
	.card{
		border:none;
		border-radius: 0!important;
	}

	.card-header:first-child{
		border-radius: 0!important;
	}

	.card-body {
		padding: 5px 10px 10px 10px!important;
	}

	.tbody td,
	.card-body td {
		color: #3F3F3F;
		font-size: 14px;
		padding: 8px;
	}

	.card-body td:nth-child(1) {
		min-width: 25%;
	}

	.card-body td:nth-child(2) {
		min-width: 75%;
	}

	.table {
		margin-bottom: 0 !important;
	}

	.card-body tbody  tr {
		border-bottom: solid 1px #EBEBEB !important;
	}

	blockquote {
		border-left: 4px solid #356796;
		padding-left: 15px;
		font-size: 16px;
		font-weight: bold;
	}

	#T4 .card{

	}

	#T4 .card-body {
		padding: 20px 15px !important;
		box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.2);

	}

	#T4 .T4-content{
		width: 80%;
		margin: 0 auto;
	}

	#T4 .T4-text {
		font-size: 14px;
		font-weight: normal;
		margin: 15px 0;
	}

	#T5 .card-body {
		color: #3F3F3F;
		font-size: 14px;
		padding: 20px 30px !important;
	}

	#T5 .table-header .btn[aria-expanded=true] {
		color: #fff;
		background-color: #32bdb6;
	}

	.faq-table{
		margin-bottom: 50px;
	}

	/*RWD*/
	@media (max-width: 768px) {
		#main{
			padding: 25px;
		}
		.contact_btn{
			text-align: center;
		}
		.nav-link{
			font-size: 14px;
			margin-right: 0px;
			padding: 7px;
		}
		.table-title{
			font-size: 14px;
			width: 85%;
		}
	}


/*
    code by Iatek LLC 2018 - CC 2.0 License - Attribution required
    code customized by Azmind.com
*/
@media (min-width: 768px) and (max-width: 991px) {
    /* Show 4th slide on md if col-md-4*/
    .carousel-inner .active.col-md-4.carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -33.3333%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}
@media (min-width: 576px) and (max-width: 768px) {
    /* Show 3rd slide on sm if col-sm-6*/
    .carousel-inner .active.col-sm-6.carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -50%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
}

    .carousel-item {
        margin-right: 0;
    }
    /* show 2 items */
    .carousel-inner .active + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
    .carousel-item-next.carousel-item-left + .carousel-item,
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* farthest right hidden item must be also positioned for animations */
    .carousel-inner .carousel-item-prev.carousel-item-right {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* right or prev direction */
    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
    .carousel-item-prev.carousel-item-right + .carousel-item,
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

    /* show 3rd of 3 item slide */
    .carousel-inner .active + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item {
        transition: none;
    }
    .carousel-inner .carousel-item-next {
        position: relative;
        transform: translate3d(0, 0, 0);
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }

    /* show 4th item */
    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item {
        display: block;
    }
    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
        transition: none;
    }
    /* Show 5th slide on lg if col-lg-3 */
    .carousel-inner .active.col-lg-3.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: absolute;
        top: 0;
        right: -25%;  /*change this with javascript in the future*/
        z-index: -1;
        display: block;
        visibility: visible;
    }
    /* left or forward direction */
    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(-100%, 0, 0);
        visibility: visible;
    }
    /* right or prev direction //t - previous slide direction last item animation fix */
    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
        position: relative;
        transform: translate3d(100%, 0, 0);
        visibility: visible;
        display: block;
        visibility: visible;
    }




</style>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5 bread">
				<span class="">產品 > {{ Config('map.product_type')[$product->type->type] }} > {{ $product->type->title }} > {{ $product->title }}</span>
				<div class="col-md-12 d-md-none search_text" onclick="sidebar('show')"></div>
			</div>
		</div>
		<div id="main" class="row">
			<div class="col-md-1"></div>
			<div id="left" class="col-md-5">
				<div class="row mb-3">
					<div class="col-md-12 main-title">{{ $product->title }}
						<div class="d-md-none form-check form-check-inline ml-3" style="float: right;">
							<input class="form-check-input" type="checkbox" value="1" id="product_1">
							<label class="form-check-label add-compare" for="defaultCheck1">
								加入比較
							</label>
						</div>
					</div>

					<div id="main_pic" class="col-md-12"><img src="{{ asset('storage/'.$product->picture) }}"></div>
				</div>
				@if($product->pictures->count() > 0)
				<div class="row main-left-img-lis">
						<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="900000">
							<div class="carousel-inner row w-100 mx-auto" role="listbox">
								<div class="carousel-item col-3 col-md-3 col-lg-3 active" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="{{ asset('storage/'.$product->picture) }}" alt="slide 1">
								</div>
								@foreach($product->pictures->sortBy('order') as $picture)
									<div class="carousel-item col-3 col-md-3 col-lg-3 active" onclick="change_pic(this)">
										<img class="img-fluid mx-auto d-block" src="{{ ($picture->type = 2)? $picture->path : asset('storage/'.$picture->path) }}" alt="slide 1">
									</div>
								@endforeach
								<!--div class="carousel-item col-3 col-md-3 col-lg-3 active" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="images/AN240_feature_01.jpg" alt="slide 1">
								</div>
								<div class="carousel-item col-3 col-md-3 col-lg-3" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="images/AN240_feature_02.jpg" alt="slide 2">
								</div>
								<div class="carousel-item col-3 col-md-3 col-lg-3" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="images/AN240_feature_01.jpg" alt="slide 3">
								</div>
								<div class="carousel-item col-3 col-md-3 col-lg-3" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="images/AN240_feature_02.jpg" alt="slide 4">
								</div>
								<div class="carousel-item col-3 col-md-3 col-lg-3" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="images/AN240_feature_02.jpg" alt="slide 5">
								</div>
								<div class="carousel-item col-3 col-md-3 col-lg-3" onclick="change_pic(this)">
									<img class="img-fluid mx-auto d-block" src="images/AN240_feature_01.jpg" alt="slide 6">
								</div-->
							</div>
							<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
								<i class="fa fa-chevron-left fa-lg text-muted"></i>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
								<i class="fa fa-chevron-right fa-lg text-muted"></i>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					@endif
			</div>
			<div class="col-md-5">
				<div class="pt-4 pb-1 font-weight-bold product-des">{{ $product->slogan }}</div>
				<div class="mb-3">{{ $product->description }}</div>
				@if($logo1s->count() != 0)
				<div class="pb-1 font-weight-bold">機台規格：</div>
				<div class="pb-1 cert mb-3">
					@foreach($logo1s as $logo1)
						<img src="{{ asset('storage/'.$logo1->file) }}">
					@endforeach
					<!--img src="images/icon_duplex.png">
					<img src="images/icon_Staples_detection.png">
					<img src="images/icon_Ultra3sensor.png"-->
				</div>
				@endif
				@if($logo2s->count() != 0)
				<div class="pb-1 font-weight-bold">附贈軟體：</div>
				<div class="pb-1 cert mb-3">
					@foreach($logo2s as $logo2)
						<img src="{{ asset('storage/'.$logo2->file) }}">
					@endforeach
					<!--img src="images/icon_energyStar.png">
					<img src="images/icon_BM2.png"-->
				</div>
				@endif
				@if($logo3s->count() != 0)
				<div class="pb-1 font-weight-bold">認證標章：</div>
				<div class="pb-1 cert mb-3">
					@foreach($logo3s as $logo3)
						<img src="{{ asset('storage/'.$logo3->file) }}">
					@endforeach
					<!--img src="images/icon_energyStar.png">
					<img src="images/icon_BM2.png"-->
				</div>
				@endif
				<div class="contact_btn">
					<a class="btn">聯絡我們</a>
					<div class="form-check form-check-inline ml-3 d-none d-md-inline ">
						<input class="form-check-input add-compare" type="checkbox" value="1" id="product_1">
						<label class="form-check-label" for="defaultCheck1">
							加入比較
						</label>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row mx-auto mt-5 mb-5">
			<ul class="nav nav-tabs mx-auto" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="T1-tab" data-toggle="tab" href="#T1" role="tab" aria-controls="1"
						aria-selected="true">產品特色</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="T2-tab" data-toggle="tab" href="#T2" role="tab" aria-controls="2"
						aria-selected="false">產品規格</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="T3-tab" data-toggle="tab" href="#T3" role="tab" aria-controls="3"
						aria-selected="false">下載</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="T4-tab" data-toggle="tab" href="#T4" role="tab" aria-controls="4"
						aria-selected="false">配件</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="T5-tab" data-toggle="tab" href="#T5" role="tab" aria-controls="5"
						aria-selected="false">常見問答</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="tab-content col-md-10 mx-auto" id="myTabContent">
				<div class="tab-pane fade show active" id="T1" role="tabpanel" aria-labelledby="T1-tab">超高速的雙面掃描/文字編輯器區塊
				</div>
				<div class="tab-pane fade" id="T2" role="tabpanel" aria-labelledby="T2-tab">
					<div class="row">
						<div class="col-md-12">
							<!--start-->
							<div class="accordion" id="accordionExample">
								@foreach($groups as $group)

									<div class="card">
									<div class="card-header table-header" id="headingOne">
										<span class="table-title">{{ $group->title }}</span>
										<div class="float-right d-inline" data-toggle="collapse" data-target="#collapse{{ $group->id }}"
											aria-expanded="true" aria-controls="collapseOne">
											<img class="up" src="/images/icon_up.png">
											<img class="down" src="/images/icon_down.png">
										</div>
									</div>
									<div id="collapse{{ $group->id }}" class="collapse show" aria-labelledby="headingOne">
										<div class="card-body" style="background-color: #FAFAFA;">
											<table class="table table-borderless">
												@foreach($group->specs as $spec)
												<tbody>
													<tr>
														<td style="width:25%;">{{ $spec->title }}</td>
														<td style="width:75%;">{{ (array_key_exists($spec->id,$product_specs))? $product_specs[$spec->id] : '' }}</td>
													</tr>
												</tbody>
												@endforeach
											</table>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<!--end-->
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="T3" role="tabpanel" aria-labelledby="T3-tab">
					@foreach(Config('map.download_type') as $key=>$val)
						@if($product->downloads->where('type',$key)->count() > 0)
						<div class="row mb-4">
							<div class="col-md-1"></div>
							<div class="col-md-12 mb-3">
								<blockquote>{{$val}}</blockquote>
							</div>
							<div class="col-md-12">
								<table class="table download-table table-borderless">
									<thead>
										<tr style="border-bottom:solid 1px #9B9B9B;">
											<th>名稱</th>
											<th>版本</th>
											<th>文件大小</th>
											<th>系統相容</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@foreach($product->downloads->where('type',$key)->sortBy('order') as $download)
											<tr>
												<td>{{ $download->title }}</td>
												<td>VB21</td>
												<td>{{ $download->file_size }}</td>
												<td>{{ $download->lang }}</td>
												<td><a class="btn btn-primary btn-download">下載</a></td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="col-md-1"></div>
						</div>
						@endif
					@endforeach
					@foreach(Config('map.software_type') as $key=>$val)
						@if($softwares->where('type',$key)->count() > 0)
						<div class="row mb-4">
							<div class="col-md-1"></div>
							<div class="col-md-12 mb-3">
								<blockquote>{{$val}}</blockquote>
							</div>
							<div class="col-md-12">
								<table class="table download-table table-borderless">
									<thead>
										<tr style="border-bottom:solid 1px #9B9B9B;">
											<th>名稱</th>
											<th>版本</th>
											<th>文件大小</th>
											<th>系統相容性</th>
											<th>檢查碼(sha1)</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										@foreach($softwares->where('type',$key)->sortBy('order') as $software)
											<tr>
												<td>{{ $software->title }}</td>
												<td>{{ $software->version }}</td>
												<td>{{ $software->file_size }}</td>
												<td>{{ $software->compatibility }}</td>
												<td>{{ $software->sha1 }}</td>
												<td><a class="btn btn-primary btn-download">下載</a></td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							<div class="col-md-1"></div>
						</div>
						@endif
					@endforeach
				</div>
				<div class="tab-pane fade" id="T4" role="tabpanel" aria-labelledby="T4-tab">
					<div class="row">
					@foreach($accessories->sortBy('order') as $accessory)
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<div class="row text-center">
									<div class="col-md-12 pb-2">
										<img class="mb-3" src="{{ asset('storage/'.$accessory->file) }}">
										<div class="T4-content">
											<div class="col-md-12">{{ $accessory->title }}</div>
											<div class="col-md-12 T4-text">{{ $accessory->description }}</div>
											<div class="col-md-12 contact_btn mt-0">
												<a class="btn btn-block " href="{{ $accessory->url }}">聯絡我們</a>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					@endforeach
					</div>
				</div>
				<div class="tab-pane fade" id="T5" role="tabpanel" aria-labelledby="T5-tab">
					<div class="row">
						<div class="col-md-12">
							@foreach(Config('map.faq_type') as $key=>$val)
							@if($faqs->where('type',$key)->count() > 0)
							<div class="faq-table">
								<blockquote>{{$val}}</blockquote>
								<div class="accordion mb-4" id="QAsoftware">
									@foreach($faqs->where('type',$key)->sortBy('order') as $faq)
									<div class="card">
										<div class="card-header table-header" id="headingOne">
											<div class="table-title"><span>{{ $faq->title }}</span></div>
											<div class="float-right d-inline" data-toggle="collapse" data-target="#collapse1_1" aria-expanded="true"
												aria-controls="collapseOne">
												<img class="up" src="/images/icon_up.png">
												<img class="down" src="/images/icon_down.png">
											</div>
										</div>
										<div id="collapse1_1" class="collapse show" aria-labelledby="headingOne">
											<div class="card-body" style="background-color: #FAFAFA;">
												{{ $faq->description }}
											</div>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							@endif
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--div class="bread">
		產品 > 掃描器 > 生產及掃瞄儀 > AN240
	</div>
	<div class="main">
		<div class="main-title">AN240</div>
		<div class="main-left">
			<div class="main-left-img">
				<img src="images/all_product_01.png">
			</div>
			<div class="main-left-img-list">
				<img src="images/all_product_01.png">
				<img src="images/all_product_01.png">
				<img src="images/all_product_01.png">
				<img src="images/all_product_01.png">
			</div>
		</div>
		<div class="main-right">
			<div>快速、性能優越的</div>
			<div><p></p></div>
			<div>功能與規格:</div>
			<div>認證:</div>
			<div>認證:</div>
			<div>聯絡我們 加入比較</div>
		</div>
	</div>
	<div class="tab">
	</div-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script>
		if(window.location.hash) {
			var hash = window.location.hash.substring(1);
			$("#"+hash+"-tab").click();
		}
		
		$('.down').hide();
		$(".compare").hide();
		var json_str = localStorage.getItem("product-compare");

		if (JSON.parse(json_str)) {

			var arr = JSON.parse(json_str);
			for (x in arr) {
				$("#product_" + arr[x]).prop('checked', true);
				$(".compare_list").append("<img src='images/all_product_0" + arr[x] + ".png'>");
			}
			if (arr.length > 0) {
				$(".compare").show();
			}
		}

		$(".add-compare").click(function () {
			$(".compare").show();
			var json_str = localStorage.getItem("product-compare");
			if (JSON.parse(json_str)) {
				var arr = JSON.parse(json_str);
			} else {
				var arr = [];
			}

			if (arr.indexOf($(this).val()) > -1) {
				arr.splice(arr.indexOf($(this).val()), 1);
			} else {
				arr.push($(this).val());
			}

			//var json_str = JSON.stringify(arr);
			localStorage.setItem("product-compare", JSON.stringify(arr));
			$(".compare_list").empty();
			for (x in arr) {
				$(".compare_list").append("<img src='images/all_product_0" + arr[x] + ".png'>");
			}

		});
		$(".compare_close").click(function () {
			$(".compare").hide();
			localStorage.setItem("product-compare", JSON.stringify([]));
		});

		$('[data-toggle="collapse"]').click(function () {
			if ($(this).attr('aria-expanded') == 'true') {
				$(this).find('.down').show();
				$(this).find('.up').hide();
				$(this).closest('.table-header').addClass('active');
			} else {
				$(this).find('.down').hide();
				$(this).find('.up').show();
				$(this).closest('.table-header').removeClass('active');
			}
		});

		function change_pic(obj){
			var img_url = $(obj).find('img').attr('src');
			$("#main_pic img").attr('src',img_url);
		}


		$('#carouselExample').on('slide.bs.carousel', function (e) {

			/*

			CC 2.0 License Iatek LLC 2018
			Attribution required

			*/


			var $e = $(e.relatedTarget);
			var idx = $e.index();
			var itemsPerSlide = 4;
			var totalItems = $('.carousel-item').length;

			if (idx >= totalItems-(itemsPerSlide-1)) {
				var it = itemsPerSlide - (totalItems - idx);
				for (var i=0; i<it; i++) {
					// append slides to end
					if (e.direction=="left") {
						$('.carousel-item').eq(i).appendTo('.carousel-inner');
					}
					else {
						$('.carousel-item').eq(0).appendTo('.carousel-inner');
					}
				}
			}
		});


		/*
		$('#recipeCarousel').carousel({
		  interval: 10000
		})

		$('.carousel .carousel-item').each(function(){
			var next = $(this).next();
			if (!next.length) {
			next = $(this).siblings(':first');
			}
			next.children(':first-child').clone().appendTo($(this));

			if (next.next().length>0) {
			next.next().children(':first-child').clone().appendTo($(this));
			}
			else {
			  $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
			}
		});

		*/

		/*
		function getCookie(cname) {
			var name = cname + "=";
			var ca = document.cookie.split(';');
			for(var i = 0; i <ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0)==' ') {
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0) {
					return c.substring(name.length,c.length);
				}
			}
			return "";
		}

		function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays*24*60*60*1000));
			var expires = "expires="+ d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}
		*/
	</script>
</body>

</html>
