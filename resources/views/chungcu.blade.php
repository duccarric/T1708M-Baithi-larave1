<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-3">
            <div class="ml-5">
                <i class="fas fa-home fa-5x"></i>
            </div>
            <div class="ml-5">
                <span>Sweet home</span>
            </div>
        </div>


    </div>
    <div class="main-content mt-3 row">
        <div class="col-md-3">
            <div class="nav flex-column nav-pills">
                <a class="nav-link" href="/admin">Home</a>
                <a class="nav-link " href="/admin/product">Best Home</a>
                <a class="nav-link " href="/admin/category">Life style</a>
                <a class="nav-link" href="/admin/order">About us</a>
                <a class="nav-link" href="/admin/article">Contact us</a>
            </div>
        </div>
        <div class="col-md-9">

            <div class="card">
                <div class="card-body">
                    <div class="float-left">
                        <h2 class="card-title">Thông tin chi tiết danh mục</h2>
                    </div>
                    <div class="float-right mr-4">
                        <a href="/admin/category" title="Danh sách sản phẩm"><i class="fas fa-list"></i> Danh sách danh mục</a>
                    </div>
                    <div class="clearfix"></div>
                    @foreach($list_obj as $item)
                    <div class="card-body w-25">

                            <label>{{$item->ten}}</label>


                        <div class="row">
                            <label></label>

                        </div>

                            <label>Ảnh :</label>
                            <img src="{{$item->hinh}}" alt="" class="img-thumbnail">

                        <label>{{$item->thongtinchung}}</label>
                        <label>{{$item->chitiet}}</label>

                    </div>
                    @endforeach
                    <div class="row float-right mr-3">
                        {{$list_obj->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>Bản quyền thuộc về FPT Aptech 2018</p>
    </footer>
</div>
</body>
</html>