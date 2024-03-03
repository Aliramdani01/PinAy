@extends('layouts.master')
@section('content')


    <section class="mt-[40px]">
        <div>
            <a href="/album"><button class="px-3 py-1 bg-slate-200 rounded-md ml-8"><-</button></a>
        </div>

        <div class="items-center max-w-screen-md mx-auto ">
            <h3 class="text-[40px] text-center font-fontutama">Buat Album</h3>
        </div>
    </section>
    <form action="/buat-album" method="POST" enctype="multipart/form-data">
        @csrf
    <section class="mt-10">
        <div class="max-w-screen-md mx-auto flex justify-center">
                <div class="w-2/5  max-[480px]:w-full px-2">
                    <div class="flex flex-col flex-wrap">
                        <h3>Nama Album</h3>
                        <input type="text" name="nama_album" id="" class="py-1 rounded-full border border-slate-500">
                        <h3 class="mt-4">Deskripsi</h3>
                        <textarea name="deskripsi" id="" cols="30" rows="10"
                            class="w-full h-24 mb-2 border border-slate-500 rounded-xl"></textarea>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-black" for="file_input">Upload file</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" name="foto" id="file_input" type="file">
                        <button type="submit" class="px-6 py-1 mt-4 text-white rounded-md bg-red-800">Buat Album</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    @endsection
