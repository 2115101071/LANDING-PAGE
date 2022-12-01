@extends('layouts.frontend')

@section('costum-style')
    <style>
        .move-vertical-animation{
            transition: 0.2s;
        }

        .move-vertical-animation:hover{
            transform: translateY(-10px);
        }
    </style>
@endsection

@section('content')
<body>       
    <!-- Main Hero Content -->
    <div
      class="container max-w-lg px-4 py-36 mx-auto text-left bg-center bg-no-repeat bg-cover md:max-w-none md:text-center"
      style="background-image: url('https://cdn.pixabay.com/photo/2016/12/26/17/28/spaghetti-1932466_960_720.jpg')">
      <h1
        class="font-mono text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-center sm:leading-none lg:text-5xl">
        <span class="inline md:block">Welcome To My Food Restaurant</span>
      </h1>
      <div class="mx-auto mt-2 text-green-50 md:text-center lg:text-lg">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta voluptatem ab necessitatibus illo praesentium
        culpa excepturi quae commodi quaerat,
      </div>
      <div class="flex flex-col items-center mt-12 text-center">
        <span class="relative inline-flex w-full md:w-auto">
          <a href="#" type="button"
            class="inline-flex items-center justify-center px-6 py-2 text-base font-bold leading-6 text-white bg-green-600 rounded-md lg:w-full md:w-auto hover:bg-green-500 focus:outline-none">
            Buy Now
          </a>
      </div>
    </div>
    <!-- End Main Hero Content -->
    <section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">OUR STORY
              </h3>
              <h2 class="text-4xl text-green-600">Welcome</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo incidunt praesentium, ipsum
                culpa minus eveniet, id nesciunt excepturi sit voluptate repudiandae. Explicabo, incidunt quia.
                Repellendus mollitia quaerat est voluptas!
              </p>
              <div class="relative flex">
                <a href="#"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  Read More
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="https://cdn.pixabay.com/photo/2017/08/03/13/30/people-2576336_960_720.jpg" />
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('public.post.aboutus')
    <section class="mt-8 bg-white">
      <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold">Our Menu</h3>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          TODAY'S SPECIALITY</h2>
      </div>
      <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6 ">
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg move-vertical-animation">
          <a href="#">
          <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2014/11/05/15/57/salmon-518032_960_720.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">grilled salmon</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
          </a>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">Rp50.000</span>
            </div>
          </div>

          
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg move-vertical-animation">
            <a href="{{route('post.detail')}}">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg"
              alt="Image" />
              <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">ahi tuna seafood</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            </a>   
            <div class="flex items-center justify-between p-4">
              <a href="{{route('post.detail')}}">
                <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
                <span class="text-xl text-green-600">Rp60.000</span>
              </a>
            </div>
          </div>


          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg move-vertical-animation">
            <a href="#">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/07/02/20/37/cup-829527_960_720.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">Tea</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Fresh Tea</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            </a>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">Rp5.000</span>
            </div>
          </div>


          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg move-vertical-animation">
            <a href="#">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/03/05/18/30/spaghetti-660748_960_720.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">Seafood</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">Spaghetti pasta shrimp</h4>
              <p class="leading-normal text-gray-700">Lorem ipsum dolor, sit amet cons ectetur adipis icing
                elit.</p>
            </div>
            </a>
            <div class="flex items-center justify-between p-4">
              <button class="px-4 py-2 bg-green-600 text-green-50">Order Now</button>
              <span class="text-xl text-green-600">Rp35.000</span>
            </div>


          </div>
        </div>
      </div>
    </section>
    <section class="pt-4 pb-12 bg-gray-50">
      <div class="my-8 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Food Gallery</h2>
        <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
      </div>
      <div class="container grid gap-4 mx-auto lg:grid-cols-3">
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="image" class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8NXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="image"  class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="image"  class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="image"  class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTF8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="image"  class="object-cover w-full h-80">
        </div>
        <div class="w-full rounded">
          <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="image"  class="object-cover w-full h-80">
        </div>
      </div>
    </section>

    <section class="pt-4 pb-12 bg-gray-800">
      <div class="my-16 text-center">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          Testimonial </h2>
        <p class="text-xl text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. soluta sapient</p>
      </div>
      <div class="items-center grid gap-2 lg:grid-cols-3">
        <div class="mx-auto max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
        <div class="mx-auto max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://cdn.pixabay.com/photo/2018/01/04/21/15/young-3061652__340.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
        <div class="mx-auto max-w-md p-4 bg-white rounded-lg shadow-lg">
          <div class="flex justify-center -mt-16 md:justify-end">
            <img class="object-cover w-20 h-20 border-2 border-green-500 rounded-full"
              src="https://cdn.pixabay.com/photo/2018/01/18/17/48/purchase-3090818__340.jpg">
          </div>
          <div>
            <h2 class="text-3xl font-semibold text-gray-800">Food</h2>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolores deserunt
              ea doloremque natus error, rerum quas odio quaerat nam ex commodi hic, suscipit in a veritatis pariatur
              minus consequuntur!</p>
          </div>
          <div class="flex justify-end mt-4">
            <a href="#" class="text-xl font-medium text-green-500">John Doe</a>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-12 pb-12 bg-gray-50">
      <div class="container flex items-center justify-center p-6 mx-auto bg-white shadow-lg sm:p-12 md:w-1/2">
        <div class="w-full">

          <h1
            class="mb-4 text-2xl font-bold text-center text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
            Order Now FREE AND FAST
          </h1>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                Your Name
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Your Name" />
            </div>
            <div class="w-full">
              <label class="block text-base">
                Your Number
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Your Number" />
            </div>
          </div>
          <div class="gap-2 mb-8 lg:flex">
            <div class="w-full">
              <label class="block text-base">
                Table Number
              </label>
              <input type="text"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Enter Table Number 1 to 12" />
            </div>
            <div class="w-full">
              <label class="block text-base">
                Booking Date
              </label>
              <input type="date"
                class="w-full px-4 py-2 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
                placeholder="Your Number" />
            </div>
          </div>
          <div class="">
            <label class="block text-base">
              Your Message
            </label>
            <textarea name="" id="" rows="8" cols="30"
              class="w-full p-3 text-base border rounded-md focus:border-green-400 focus:outline-none focus:ring-1 focus:ring-green-600"
              placeholder=""></textarea>
          </div>
          <button
            class="px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green"
            href="#">
            Book Now
          </button>

        </div>

        
      </div>
    </section>
</body>
@endsection