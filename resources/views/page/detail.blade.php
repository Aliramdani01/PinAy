@extends('layouts.master')
@push('cssjsexternal')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content')
<section class="mt-32 mb-8">
    @csrf
    <div class="max-w-screen-md mx-auto">
        <div class="flex flex-wrap px-1 flex-container">
            <div class="w-3/5 max-[250px]:w-full">
                <div class="flex justify_-center overflow-hidden">
                    <img src="/assets/" alt="" class="w-full h-auto max-w-xl px-2" id="fotodetail">
                </div>
            </div>
            <div class="w-2/5  max-[250px]:w-full">
                <div class="flex flex-wrap items-center justify-between ">
                    <div class="flex flex-row items-center gap-2">
                        <div>
                            <img src="" class="w-10 h-10 rounded-full" alt="" id="imageUser">
                        </div>
                        <div class="flex flex-col">
                            <a href="/other-pin" class="text-md" id="username"></a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col px-2">
                    <div class="font-semibold" id="judulfoto">
                        Judul Foto
                    </div>
                    <div>
                        <small class="text-abuabu" id="deskripsifoto"> Deskripsi </small>
                    </div>
                </div>
                <div class="mt-[33px]">
                   Komentar
               </div>
               <div class="relative flex flex-col overflow-y-auto h-[200px] scrollbar-hidden" id="listkomentar">
                   
                   
               </div>
               <div class="flex gap-2 mt-2">
                   <div class="w-3/4">
                       <input name="isi_komentar" type="text" id="" class="w-full px-2 py-1 border-2 rounded-full border-slate-500">
                   </div>
                   <button class="px-4 rounded-full bg-red-800" onclick="kirimkomentar()"><span class="text-white bi bi-send"></span></button>
               </div>
           </div>
       </div>
       <div class="flex flex-wrap mt-10 flex-container">
           <div class="flex mx-auto mt-2 bg-white">
               <div class="flex flex-col px-2">
                   <a href="explore-detail.html">
                       <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                           <img src="/assets/image 9.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                       </div>
                   </a>
                   <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                       <div>
                           <div class="flex flex-col">
                               <div>
                                   Kebahagiaan
                               </div>
                               <div class="text-xs text-abuabu">
                                   15w
                               </div>
                           </div>
                       </div>
                       <div>
                           <small>40</small>
                           <span class="bi bi-chat-left-text"></span>
                           <small>14</small>
                           <span class="bi bi-heart"></span>
                       </div>
                   </div>
               </div>
           </div>
           <div class="flex mx-auto mt-2 bg-white">
               <div class="flex flex-col px-2">
                   <a href="explore-detail.html">
                       <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                           <img src="/assets/image 8.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                       </div>
                   </a>
                   <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                       <div>
                           <div class="flex flex-col">
                               <div>
                                   Kebahagiaan
                               </div>
                               <div class="text-xs text-abuabu">
                                   15w
                               </div>
                           </div>
                       </div>
                       <div>
                           <small>40</small>
                           <span class="bi bi-chat-left-text"></span>
                           <small>14</small>
                           <span class="bi bi-heart"></span>
                       </div>
                   </div>
               </div>
           </div>
           <div class="flex mx-auto mt-2 bg-white">
               <div class="flex flex-col px-2">
                   <a href="explore-detail.html">
                       <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                           <img src="/assets/image 8.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                       </div>
                   </a>
                   <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                       <div>
                           <div class="flex flex-col">
                               <div>
                                   Kebahagiaan
                               </div>
                               <div class="text-xs text-abuabu">
                                   15w
                               </div>
                           </div>
                       </div>
                       <div>
                           <small>40</small>
                           <span class="bi bi-chat-left-text"></span>
                           <small>14</small>
                           <span class="bi bi-heart"></span>
                       </div>
                   </div>
               </div>
           </div>
           <div class="flex mx-auto mt-2 bg-white">
               <div class="flex flex-col px-2">
                   <a href="explore-detail.html">
                       <div class="w-[363px] h-[192px] bg-bgcolor2 overflow-hidden">
                           <img src="/assets/image 9.png" alt="" class="w-full transition duration-300 ease-in-out hover:scale-105">
                       </div>
                   </a>
                   <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                       <div>
                           <div class="flex flex-col">
                               <div>
                                   Kebahagiaan
                               </div>
                               <div class="text-xs text-abuabu">
                                   15w
                               </div>
                           </div>
                       </div>
                       <div>
                           <small>40</small>
                           <span class="bi bi-chat-left-text"></span>
                           <small>14</small>
                           <span class="bi bi-heart"></span>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
@endsection
@push('footerjsexternal')
    <script src="/javascript/exploredetail.js"></script>
@endpush
