@extends('layouts.master')
@section('content')
    <nav class=" fixed top-0 z-20 w-full text-red-800 bg-cyan-500 shadow-2xl mx-auto">
      <div class="flex items-center justify-between max-w-screen-md container p-1 mx-auto">
        <div class="flex items-center">
              <img src="/assets/image_1-removebg-preview 1.png" alt="" class="mr-3 w-8 h-7">
            <h2 class="text-3xl font-fontutama">PinAy</h2>
        </div>
        <div>
          <button type="submit" 
          class="px-4 text-white font-fontpopins bg-red-800 rounded-full">
          <a href="login">Login</a></button>
          <button type="submit" 
          class=" px-4 text-black font-fontpopins bg-gray-300 rounded-full">
          <a href="register">Register</a></button>
        </div>
    </div>
    </nav>
    <section class="mt-10">
        <h1 class="text-[40px] text-center text-black font-fontyelowtail">Welcome To PinAy</h1>
    </section>

    <!-- section gambar-->
    <section>
      <div class="grid min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
        <div class="grid grid-cols-2 gap-2">
        <div>
          <img src="/assets/Upin ipin 1.png" alt="" class="object-cover object-center w-full h-40 max-w-full rounded-lg" />
        </div>
        <div>
          <img src="/assets/img-13.jpg" alt="" class="object-cover object-center w-full h-40 max-w-full rounded-lg" />
        </div>
        <div>
          <img src="/assets/img-14.jpg" alt="" class="object-cover object-center w-full h-40 max-w-full rounded-lg" />
        </div>
        <div>
          <img src="/assets/img-15.jpg" alt="" class="object-cover object-center w-full h-40 max-w-full rounded-lg" />
        </div>
        <div>
          <img src="/assets/img-12.jpg" alt="" class="object-cover object-center w-full h-40 max-w-full rounded-lg" />
        </div>
        <div>
          <img src="/assets/img-11.jpg" alt="" class="object-cover object-center w-full h-40 max-w-full rounded-lg" />
        </div>
      </div>
    </section>
    <!-- end section gambar-->
  @endsection