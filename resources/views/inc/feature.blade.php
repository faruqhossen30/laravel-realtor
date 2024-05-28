@php
    use App\Models\Feature\Feature;
    $featutes = Feature::get();
@endphp


<section>
    <div class="container mx-auto">
        <p class="text-center pt-3 font-thin py-4">Top Features</p>
        <h1 class="text-center pb-12 text-3xl font-semibold">Explore Our Market Top <br> Rated Features</h1>
    </div>


    <div class="container mx-auto grid grid-cols-12 gap-6 space-x-3 lg:space-x-0">
        @foreach ($featutes as $featute)
            <div
                class="col-span-12 lg:col-span-4 space-y-4  lg:px-6 py-10 border hover:shadow-none lg:hover:shadow-2xl lg:hover:border-none hover:border  rounded-lg   px-3 ">
                <div class=" bg-brand   h-16 w-16 flex items-center justify-center rounded-full">
                    <img src="{{ asset('storage/' . $featute->thumbnail) }}"  class=" h-14 w-14 rounded-full" />
                </div>
                <h3 class="text-xl py-3 font-bold">{{ $featute->title }}</h3>
                {{-- <p>{!!$featute->description!!}</p> --}}
                <?php echo substr($featute->description, 0, 200); ?>
                <a href="{{ route('feature.page', $featute->id) }}"
                    class="py-3 text-[#012924] flex items-center text-xl underline underline-offset-8 ">Learn more
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-4 text-blac font-bold">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        @endforeach

    </div>
</section>
