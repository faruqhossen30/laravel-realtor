@extends('layouts.app')
@section('content')


<section>
    <div class="max-w-[800px] mx-auto py-6">


        <div class="flex justify-center">

            <div class="  space-y-2  lg:px-6 py-10 border hover:shadow-lg lg:hover:border z-10 border-gray-100 hover:border  rounded-lg   px-3 ">
                <div class="  h-20 w-20 flex items-center justify-center rounded-full">
                    <img src="{{ asset('storage/' . $feature->thumbnail) }}" class="  rounded-full" />
                </div>
                <h3 class="text-xl text-primary font-bold py-3 ">{!! $feature->title !!}</h3>
                {{-- <p>{!!$feature->description!!}</p> --}}
                <p class=" item text-primary">{!!$feature->description!!}</p>
            </div>
        </div>
    </div>
</section>
    <!-- Features -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">

        </div>
        <!-- End Grid -->
    </div>
    <!-- End Features -->
@endsection
