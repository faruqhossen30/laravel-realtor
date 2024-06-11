@php
    use App\Models\Feature\Feature;
    $featutes = Feature::get();
@endphp


<section class="py-12">
    <div class="container mx-auto ">
        <div class="flex items-center justify-center py-10">
            <p class="text-center text-brand text-sm uppercase  font-semibold  border-2  border-[#F1E2D1] rounded-full px-6 ">Top Features</p>
        </div>
        <h1 class="text-center text-primary text-5xl font-semibold">Explore Our Market Top <br> Rated Features</h1>
    </div>


    <div id="featureOwlSlider" class="owl-theme owl-carousel container mx-auto grid grid-cols-12 lg:gap-6 space-x-3 lg:space-x-0 py-10  ">
        @foreach ($featutes as $featute)
            <div class="space-y-2  lg:px-6 py-10 border hover:shadow-lg lg:hover:border z-10 border-gray-100 hover:border  rounded-lg   px-3 ">
                <div class="  h-20 w-20 flex items-center justify-center rounded-full">
                    <img src="{{ asset('storage/' . $featute->thumbnail) }}" class="  rounded-full" />
                </div>
                <h3 class="text-xl text-primary font-bold py-3 ">{{ $featute->title }}</h3>
                {{-- <p>{!!$featute->description!!}</p> --}}
                <p class=" item text-primary"><?php echo substr($featute->description, 0, 200); ?></p>


                <a href="{{ route('feature.page', $featute->id) }}" class="py-1 item text-primary inline-block text-xl border-b-2 border-gray-400 hover:border-brand  hover:text-brand">
                    <div class="flex items-center group">
                        <span >Learn More </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-4  text-primary font-bold group-hover:text-brand">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>

                    </div>
                </a>

            </div>
        @endforeach

    </div>
</section>
