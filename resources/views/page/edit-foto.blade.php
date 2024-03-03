@extends('layouts.master')

@section('content')
<section class="mt-32">
  <form action="/upload/store" method="post" enctype="multipart/form-data">
    @csrf
    <div>
    <div class="flex items-center justify-center">
                    <img src="/assets/image_1-removebg-preview 1.png" alt="" class="mr-1">
                    <span class="text-4xl text-red-800 font-fontutama">PinAy</span></div>
        </div>
    </div>
    <div class="flex justify-center gap-4 mb-8 mt-5">
        <div>
          <div class="flex flex-col gap-4 flax-warp">
            <div class="">
              <span class="text-sm mt-5 mb-1"> Judul</span>
              <input type="judul" id="judul" name="judul_foto"
                   class="bg-gray-50 border border-black text-gray-900 text-sm text-left rounded-lg block w-full p-2.5 place px-20 py-2"
                   placeholder="Tambahkan Judul " required />
            </div>
            <div class="" >
                <span class="text-sm mt-5 mb-1">Deskripsi</span>
                <input type="deskripsi" id="deskripsi" name="deskripsi_foto"
                     class="bg-gray-50 border border-black text-gray-900 text-sm rounded-lg block w-full p-2.5 place py-8 "
                     placeholder="Tambahkan deskripsi terperinci" required />
            </div>
         
              
               
                     <button type="submit"
                     class="mt-5 text-white font-fontpopins bg-red-800 hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-red-300 font-medium rounded-xl text-sm w-[100px] ml-[235px] sm:w-28 px-2 py-3 text-center dark:bg-red-800 dark:hover:bg-red-700 dark:focus:ring-red-800">
                       Upload
                  </button>
                  </form>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section>
@endsection