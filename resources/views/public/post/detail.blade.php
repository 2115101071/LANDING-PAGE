@extends('layouts.frontend')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta data-n-head="ssr" name="viewport" content="width=device-width, initial-scale=1">
    <title>My Food Checkout</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/GrayGrids/LineIcons/LineIcons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/lib/modal-video.min.css">
    <link rel="stylesheet" href="assets/css/stylesheets/screen.css ">
</head>

<body>

    <!-- main wrapper start -->
    <div class="main-wrapper ">
        <!-- menu section start -->
        <section class="menu-wrapper mt-5 lg:my-16">
            <div class="container mx-auto">

                <div class="flex flex-wrap relative">
                    <!-- <div class=""> -->
                    <div class="w-full lg:w-1/2 flex items-center">
                        <div class="inner p-3">

                            <h1 class="font-bold text-shadow-light text-4xl text-gray-800 tracking-wide leading-tight">Ahi Tuna Seafood</h1>

                            <!-- reviews-block -->
                            <div class="reviews-block mt-2">
                                <div class="rating tracking-widest text-xl">
                                    <a href="#"> <span class="text-base tracking-normal text-gray-700"> (0) </span> <span class="star">☆</span><span class="star">☆</span><span class="star">☆</span><span class="star">☆</span><span class="star">☆</span></a>
                                </div>
                            </div>
                            <!-- reviews-block end -->


                            <div class="info mt-10 mr-10">
                                <div class="flex">
                                    <div class="w-1/3 flex">
                                        <div class="inner py-3 flex justify-between mx-auto">
                                            <div class="label text-sm text-shadow-light text-gray-700 tracking-wider flex items-center">Price</div>
                                            <div class="text-shadow-light uppercase text-3xl font-semibold text-gray-800 mx-auto flex ml-3"><span>Rp</span><span>40.000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- info end -->

                            <div class="order-block mt-10">
                                <div class="flex">
                                    <div class="w-auto">
                                        <a href="" class="px-4 rounded bg-black text-white hover:text-black hover:bg-white transition inline-block p-1 py-2 border border-black text-lg text-semibold tracking-wide text-shadow-light">Order Now</a>
                                    </div>
                                    <div class="w-auto ml-auto lg:ml-0 flex items-center justify-center">
                                        <span class="ml-5 text-4xl hover:text-red-500 text-gray-700 lni-heart cursor-pointer"></span>
                                    </div>  
                                </div>
                                <!-- single menu category start -->
                                 <div class="category-block mt-10">
                                     <span class="font-semibold uppercase text-base tracking-wider">Menu:</span>
                                         <span class=" ml-2 font-semibold text-gray-700 text-sm capitalize tracking-wider">
                                            <a href="" class="border-b inline-block border-transparent hover:border-gray-500">seafood</a>
                                             </span>
                                 </div>
                                 <!-- single menu category end -->
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 lg:mt-0 mt-5">
                        <div class="inner p-3">
                            <div class="single-image rounded overflow-hidden transition hover:shadow-2xl cursor-pointer">
                                <img src="https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg" alt="" class="w-full block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- hr line -->
            <div class="container mx-auto lg:p-0 p-3">
                <hr class="bg-1 bg-gray-300 w-full my-2 mt-5 lg:my-16">
            </div>
            <!-- hr line -->

            <div class="container mx-auto lg:p-0 p-3">
                <!-- single info start -->
                <div class="single-info">
                    <div class="inner content text-base leading-normal text-gray-800">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, excepturi perferendis? Fuga quae ut natus, cum voluptatum excepturi nostrum exercitationem perferendis omnis tempora hic ipsam eos suscipit, fugiat, architecto inventore.
                            ipsum dolor sit amet consectetur adipisicing elit. Et suscipit architecto molestiae ex. Laborum consequuntur adipisci quasi voluptatum, eaque voluptate, dicta repudiandae, illo quas sapiente ut consequatur! Eum, impedit consectetur.</p>
                        <p>fugiat, architecto inventore. ipsum dolor sit amet consectetur adipisicing elit. Et suscipit architecto molestiae ex. Laborum consequuntur adipisci quasi voluptatum, eaque voluptate, dicta repudiandae, illo quas sapiente ut consequatur!
                            Eum, impedit consectetur.</p>
                    </div>
                </div>
                <!-- single info end -->


            </div>

        </section>
        <!-- menu section end -->

        


    </div>
    <!-- main wrapper end -->
</body>
</html>
@endsection