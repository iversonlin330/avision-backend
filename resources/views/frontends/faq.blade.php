<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Avision｜常見問答集</title>
</head>

<body>
{!! get_header() !!}
<!--top filter-->
<div class="top_banner_type2" style="background-image:url(./images/faq_top.png); min-height:285px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="page_title mb-20">搜尋{{ isset($data['search'])? " “ ".$data['search']."”" : "" }}</p>
                <hr class="mb-5">
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control search_input" id="exampleInputPassword1" placeholder="{{ isset($data['search'])? $data['search'] : "" }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="blue_btn m-0">
                    <a class="btn " href="#">搜尋</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--scanner product-->
<div class="search_result container">
    <p class="blue_line_title">搜尋結果：</p>
    <div class="row">
	@foreach($products as $product)
		<div class="col-md-3 col-6">
            <div class="search_box text-center text-center">
				<a href="{{ url('/frontends/product-detail/'.$product->id.'#T5') }}">
					<img src="{{ asset('storage/'.$product->picture) }}" class="img-fluid " alt="">
				</a>
                <div class="search_product_name">
                    <p class="mb-0">{{ $product->title }}</p>
                </div>
            </div>
        </div>
	@endforeach
        <!--div class="col-md-3 col-6">
            <div class="search_box text-center text-center">
                <img src="images/all_product_01.png" class="img-fluid " alt="">
                <div class="search_product_name">
                    <p class="mb-0">AD120</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="search_box text-center">
                <img src="images/all_product_02.png" class="img-fluid" alt="">
                <div class="search_product_name">
                    <p class="mb-0">AD120</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="search_box text-center">
                <img src="images/all_product_03.png" class="img-fluid" alt="">
                <div class="search_product_name">
                    <p class="mb-0">AD120</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="search_box text-center">
                <img src="images/all_product_04.png" class="img-fluid" alt="">
                <div class="search_product_name">
                    <p class="mb-0">AD120</p>
                </div>
            </div>
        </div-->
    </div>
    <!--div class="more_btn">
        <a class="btn" href="3-1-1-1_product-detail.html">瀏覽更多</a>
    </div-->
</div>

{!! get_footer() !!}
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
</body>

</html>
