@extends('layouts.app')
@section('content')


<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
      <div class="h-16 w-16 rounded-full ">
        <img class="bg-red-700" src="{{asset('storage/'.$feature->thumbnail)}}" alt="Image Description">
      </div>
      <!-- End Col -->

      <div class="mt-5 sm:mt-10 lg:mt-0">
        <div class="space-y-6 sm:space-y-8">
          <!-- Title -->
          <div class="space-y-2 md:space-y-4">
            <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
              {{$feature->title}}
            </h2>
            <p class="text-gray-500 dark:text-neutral-500">
                {!!$feature->description!!}
            </p>
          </div>
          <!-- End Title -->

          {{-- <!-- List -->
          <ul class="space-y-2 sm:space-y-4">
            <li class="flex space-x-3">
              <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </span>

              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                <span class="font-bold">Easy & fast</span> designing
              </span>
            </li>

            <li class="flex space-x-3">
              <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </span>

              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                Powerful <span class="font-bold">features</span>
              </span>
            </li>

            <li class="flex space-x-3">
              <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </span>

              <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                User Experience Design
              </span>
            </li>
          </ul>
          <!-- End List --> --}}
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Features -->
@endsection
