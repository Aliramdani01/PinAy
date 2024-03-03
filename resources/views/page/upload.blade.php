@extends('layouts.master')

@section('content')
<section class="mt-32">
  <form action="/upload/store" method="post" enctype="multipart/form-data">
    @csrf
    <div>
    <div class="flex items-center justify-center">
                    <img src="/assets/image_1-removebg-preview 1.png" alt="" class="mr-1">
                    <span class="text-4xl text-red-800 font-fontutama">PinAy</span></div>
        <div class="flex justify-center gap-4 flex-wrap overflow mx-auto mt-8">
            <div class="">
      <div class="flex items-center justify-center w-full pt-8">
        <label  for="dropzone-file"
          class="flex flex-col relative items-center justify-center w-64 h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                upload</span> or drag and drop</p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
          </div>
          <input id="dropzone-file" type="file" name="url" class="hidden" />
          <img id="drop-view" alt="" class="absolute w-full h-full">
        </label>
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
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Album</label>
  <select name="album" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="">Pilih Album</option>
    @foreach($albums as $album)
    <option value="{{$album->id}}">{{$album->nama_album}}</option>
    @endforeach
  </select>
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
    <script>
      document.getElementById("dropzone-file").addEventListener("change", function(e){
        var output_image = document.getElementById("drop-view");
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById("drop-view");
          output.src = reader.result;
        }
        reader.readAsDataURL(e.target.files[0]);
      });
      </script>
@endsection