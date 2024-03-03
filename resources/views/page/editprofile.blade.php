@extends('layouts.master')

@section('content')
<section class="mt-10">
    <h1 class="text-[40px] text-center text-red-800 font-fontutama">PinAy</h1>
</section>
<section class="mt-[50px] lg:px-80 py-4 flex flex-col lg:flex-row">
  <div class="flex flex-col mx-auto">
    <div class="lg:w-[280px] w-full h-[200px] rounded-xl bg-[#ffffff]" style="box-shadow: 0px 4px 4px 0 rgba(0,0,0,0.25);">
      <div class="flex justify-center items-center py-7">
        <img src="/assets/Upin ipin 1.png" alt="" class="rounded-full w-24 h-24 hover tra">
      </div>
      <input type="file" class="ml-10">
    </div>
  </div>
      <div class="w-3/5 max-[364px]:w-full">
         <div class="w-[364px] bg-white rounded-3xl shadow-2xl mx-auto px-9 py-9">
          <h5 class="font-fontpopins">Nama Lengkap</h5>
          <input type="text" class="w-[290px] h-[33px] rounded-md border border-black" style="filter: drop-shadow(0px 4px 4px rgba(0,0,0,0.25));">
          <h5 class="font-fontpopins">No Telpon</h5>
          <input type="text" class="w-[290px] h-[33px] rounded-md border border-black" style="filter: drop-shadow(0px 4px 4px rgba(0,0,0,0.25));">
          <h5 class="font-fontpopins">No Alamat</h5>
          <textarea type="text"   class="w-[290px] h-24 rounded-md border border-black" style="filter: drop-shadow(0px 4px 4px rgba(0,0,0,0.25));">
          </textarea>
          <h5 class="font-fontpopins">Deskripsi</h5>
          <textarea type="text"   class="w-[290px] h-24 rounded-md border border-black" style="filter: drop-shadow(0px 4px 4px rgba(0,0,0,0.25));">
            </textarea>
             <!-- button --> 
        <div class="mt-5 flex flex-wrap justify-between text-center">
           <div class=" text-white font-fontpopins bg-red-800 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-xl text-sm w-[152px] ml-[250px] sm:w-28 px-2 py-3 text-center dark:bg-red-800 dark:hover:bg-red-700 dark:focus:ring-red-800">
              <button type="submit"><a href="/src/profil.html">PERBAHARUI</a></button>
              
          </div>
          </div>
       
       <!-- end -->
              </div>
          </div>
      </div>
  </div>
</section>
@endsection