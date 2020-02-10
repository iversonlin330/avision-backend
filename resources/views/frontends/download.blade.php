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
    <title>Avision｜驅動程式下載</title>
</head>

<body>
{!! get_header() !!}
<!--top filter-->
<div class="top_banner_type2" style="background-image:url(./images/dirve_top.png); min-height:600px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <p class="page_title mb-20">驅動程式、軟體下載</p>
                <hr class="mb-5">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="filter_box mb-3	">
                    <p class="filter_title">方式一：篩選分類與型號</p>
                    <hr>
                    <div class="form-group">
                        <select class="form-control" id="product_category">
                            <option selected="true" disabled="disabled">產品分類</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="product_model">
                            <option selected="true" disabled="disabled">產品型號</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="blue_btn">
                        <a class="btn " href="#">搜尋</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="filter_box mb-3">
                    <p class="filter_title">方式二：輸入產品型號</p>
                    <hr>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="輸入產品序型號">
                    </div>
                    <div class="blue_btn" style="position: absolute; bottom:30px; left:50%; transform: translate(-50%, 0);">
                        <a class="btn " href="#">搜尋</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="filter_box">
                    <p class="filter_title">方式三：輸入產品序號</p>
                    <hr>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp" placeholder="輸入產品序號">
                    </div>
                    <div class="blue_btn" style="position: absolute; bottom:30px; left:50%; transform: translate(-50%, 0);">
                        <a class="btn " href="#">搜尋</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--scanner product-->
<div class="search_result container">
    <p class="blue_line_title">搜尋結果：</p>
    <div class="row">
        <div class="col-md-3 col-6">
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
        </div>
    </div>
    <div class="more_btn">
        <a class="btn" href="3-1-1-1_product-detail.html">瀏覽更多</a>
    </div>
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
