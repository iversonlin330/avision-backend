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
    <title>Avision｜掃描器</title>
</head>

<body>
{!! get_header() !!}
<!--top keyvision-->
<div class="container-fulid">
    <div class="row">
        <div class="top_banner" style="background-image:url({{ asset('storage/'.$group_type->banner) }});">
            <div class="col-md-10 mx-auto">
                <p class="page_title">{{ $group_type->title }}</p>
                <hr class="gray_line">
                <p class="page_des">
                    {{ $group_type->description }}
                </p>
                <img class="img-fluid" src="{{ asset('storage/'.$group_type->picture) }}" alt="">
            </div>
        </div>
    </div>
</div>
<!--scanner product-->
<div class="section_product container">
    <p class="bread">產品 > {{ $group_type->title }}</p>
    <div class="row">
        @foreach($group_type->types as $type)
            <div class="col-md-4">
                <div class="product_box d-flex align-items-end" style="background-image:url({{ asset('storage/'.$type->picture) }});" >
                    <div class="product_name">
                        <p>{{ $type->title }}</p>
                    </div>
                    <!-- hover內容 -->
                    <div class="product_hover">
                        <p>{{ $type->description }}</p>
                        <div class="more_btn">
                            <a class="btn btn-primary" href="{{ url('frontends/products?type_id='.$type->id) }}">瀏覽更多</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{!! get_footer() !!}
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script>

    $('.product_box').hover(function(event){
        $(this).find('.product_hover').slideToggle();
    });
</script>
</body>

</html>
