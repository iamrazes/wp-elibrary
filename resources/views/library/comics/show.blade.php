@extends('layouts.website')

@section('content')


<div>
    <div class="rounded-t-lg shadow-md mx-32 bg-white">
            <div class="my-3 pl-3 border-b">
                <h1 class="text-xl pt-2 pl-2 pb-2">Comic Details</h1>
            </div>
        <div >
            <div class="flex flex-row px-10 pt-5 pb-8 justify-center">

                <div class="h-[42rem] w-[32rem]">
                    <img src="{{ asset('storage/ComicCoverImages/' . $comic->cover) }}"
                    class="rounded-xl w-full object-cover h-full"
                    alt="">
                </div>

                <div class="flex flex-col gap-2 pl-10">
                    <div class="font-bold text-3xl">
                        <h1>"{{$comic->title}}"</h1>
                    </div>
                    <div class="pt-3 text-xl font-semibold">
                        <h1>{{$comic->author}}</h1>
                    </div>
                    <div class="w-[32rem]">
                        <h1>Synopsis :</h1>
                        <p>{{$comic->synopsis}}</p>
                    </div>
                    <div class="pt-3">
                        <p>The Comics are : {{$comic->status}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
