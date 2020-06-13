<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.jscrollpane.css')}}" media="all" />
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .checked {
        color: orange;
    }

    .hr.new {

        width: 150px;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .img-logo {
        border-radius: 15px;
    }
    </style>
</head>

<body>
    <!-- nav -->
    <section class="bg-dark text-white">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark  pt-3 sticky-top  container">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" class="img-logo"
                    width="100px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="form-inline my-4 my-lg-0">
                <input class="" type="search" placeholder="Search" aria-label="Search">
            </form>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class=""> | </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About
                            <span class=""> | </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="#">Shop
                            <span class=""> | </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Help
                            <span class=""> | </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary text-light" href="#"><i class="fa fa-cart-plus"></i>
                            YourCart

                        </a>
                    </li>
                </ul>

            </div>
        </nav>
    </section>
    <!-- e-shop -->
    <section>

        <div class="row p-4">
            <div class="col-md-3">
                <h4>Category List</h4>
                <div class="list-group">
                    @foreach($categoreis as $cate)
                    <a href="{{url('category/'.$cate->id)}}" class="list-group-item list-group-item-action">{{$cate-> name}}</a>
                    @endforeach
                  
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-columns">
                    @foreach($products as $fproduct)
                    <div class="card" >
                        <img class="card-img-top" src="{{asset('assets/images/'.$fproduct->image_url)}}"
                            alt="Card image cap">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"> <span>{{$fproduct->title}}</span>
                                    <p>Price : {{$fproduct->price}}</p>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="" class="btn btn-sm btn-danger">add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

    </section>








    <footer class="bg-dark text-white">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-4 ">
                    <img src="{{asset('assets/images/foter.jpg')}}" class="img-logo" width="100%" height="200px"
                        alt=" ddd">
                    <p>Uttakan Dhaka-1230</p>
                </div>
                <div class="col-md-2 text-center">

                    <ul style="list-style: none;">
                        <li>
                            <p>Mune</p>
                        </li>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li>
                            <a href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <ul style="list-style: none;">
                        <li>
                            <p>The Company</p>
                        </li>
                        <li>
                            <a href="#">Company</a>
                        </li>
                        <li>
                            <a href="#">Careers</a>
                        </li>
                        <li>
                            <a href="#">Press</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <ul style="list-style: none;">
                        <li>
                            <p>Discover</p>
                        </li>
                        <li>
                            <a href="#">The Team </a>
                        </li>
                        <li>
                            <a href="#">Ouers history</a>
                        </li>
                        <li>
                            <a href="#">Brand Motto</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-2 text-center">
                    <ul style="list-style: none;">
                        <li>
                            <p>Find us on</p>
                        </li>
                        <li>
                            <a href="#">Facebook</a>
                        </li>
                        <li>
                            <a href="#">Youtube</a>
                        </li>
                        <li>
                            <a href="#">Email</a>
                        </li>

                    </ul>
                </div>
            </div>
            <hr>
            <h6 class="text-center">ABC Company</h6>
        </div>

    </footer>
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.mousewheel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.contentcarousel.js')}}"></script>
    <script type="text/javascript">
    $('#ca-container').contentcarousel({
        // speed for the sliding animation
        sliderSpeed: 500,
        // easing for the sliding animation
        sliderEasing: 'easeOutExpo',
        // speed for the item animation (open / close)
        itemSpeed: 500,
        // easing for the item animation (open / close)
        itemEasing: 'easeOutExpo',
        // number of items to scroll at a time
        scroll: 3
    });
    </script>

</body>

</html>