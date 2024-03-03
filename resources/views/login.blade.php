<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/css/build.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Yellowtail&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

</head>
<body>
     <nav class="text-red-800 bg-cyan-500 shadow-2xl mx-auto">
          <div class="flex items-center justify-between max-w-screen-md container p-1 mx-auto">
               <div class="flex items-center">
                    <img src="/assets/image_1-removebg-preview 1.png" alt="" class="mr-3 w-8 h-7">
                  <h2 class="text-3xl font-fontutama">PinAy</h2>
              </div>
            <div>
                <button type="submit" class="px-4 text-white font-fontpopins bg-red-800 rounded-full">Login</button>
                <button type="submit" class="px-4 text-black font-fontpopins bg-gray-300 rounded-full">
                    <a href="register">Register</a></button>
            </div>
        </div>
    </nav>
    
    <form action="/auth" method="post">
     @csrf
    <div>
         <section class="mt-[40px]">
             <div class="w-[364px] bg-white rounded-3xl shadow-2xl mx-auto px-9 py-9">
                  <div class="flex flex-col">
                       <!-- header login -->
                       <div class="flex items-center justify-center">
                         <img src="/assets/image_1-removebg-preview 1.png" alt="" class="mr-3">
                         <span class="text-4xl text-red-800 font-fontutama">PinAy</span></div>
                         @if ($message = Session::get('error'))
                         <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="text-sm font-medium ms-3">
                         {{ $message }}
                    </div>
                      <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                  </div>
                  @endif
                       <!-- end -->
                       <!-- input login -->
                       <span class="text-sm mt-5 mb-1">Email</span>
                       <input type="email" id="email"
                            class="bg-gray-50 border border-black text-gray-900 text-sm rounded-xl block w-full p-2.5" name="email"/>
                            @error ('email')
                            <small class="italic text-red-800">{{ $message }}</small>
                            @enderror
                       <span class="text-sm mt-4 mb-1">Password</span>
                       <input type="password" id="password"
                            class="bg-gray-50 border border-black text-gray-900 text-sm rounded-xl block w-full p-2.5" name="password"/>
                            @error ('password')
                            <small class="italic text-red-800">{{ $message }}</small>
                            @enderror
                       <!-- button -->
                       <button type="submit" class="mt-7 text-white font-fontpopins bg-red-800 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                   
                       <span class="mt-3 text-center text-sm font-fonttimana">Belum punya account? Silahkan daftar
                            <a href="/register" class="underline text-sky-500 font-fonttimana">disini</a></span>
                       <!-- end -->
                  </div>
             </div>
        </section>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

   
  </h1>
</body>
</html>