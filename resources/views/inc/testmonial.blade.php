@php
    use App\Models\Testmonial\Testmonial;
    $testmonials = Testmonial::get();
@endphp

<section class="bg-[#FFF6EB] py-12" id="reviewSection">
    <div class="container mx-auto  space-y-4 ">
        <div class="flex justify-center">
            <button href="" class="text-yellow-400 border-2 border-[#F1E2D1]  uppercase tracking-widest  rounded-full items-center py-1 px-8">
                Testimonials</button>
        </div>
        <h1 class="text-center pb-12 text-5xl font-semibold text-primary">Our Real Life Customer <br>Testimonials</h1>
    </div>
    <div id="testmonialslider"  class="owl-theme owl-carousel container mx-auto grid grid-cols-12 lg:gap-6 ">

        @foreach ($testmonials as $testmonial)
            <div class="col-span-12 lg:col-span-4 py-10 px-2">

                <div class=" bg-[#FFFFFF] border rounded space-y-8 px-3 py-24">
                    <div class="flex justify-center  -mt-32 ">
                        <div class="bg-brand p-4 inline-block rounded-full text-cente z-auto ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-quote rotate-180 text-white  " viewBox="0 0 13 13">
                                <path
                                    d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex ">
                        @for ($i = 1; $i <=$testmonial->review; $i++)
                            <svg class="size-5 text-brand dark:text-neutral-200" width="51" height="51"
                                viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.0352 1.6307L33.9181 16.3633C34.2173 16.6768 34.5166 16.9903 34.8158 16.9903L50.0779 19.1845C50.9757 19.1845 51.275 20.4383 50.6764 21.0652L39.604 32.3498C39.3047 32.6632 39.3047 32.9767 39.3047 33.2901L41.998 49.2766C42.2973 50.217 41.1002 50.8439 40.5017 50.5304L26.4367 43.3208C26.1375 43.3208 25.8382 43.3208 25.539 43.3208L11.7732 50.8439C10.8754 51.1573 9.97763 50.5304 10.2769 49.59L12.9702 33.6036C12.9702 33.2901 12.9702 32.9767 12.671 32.6632L1.29923 21.0652C0.700724 20.4383 0.999979 19.4979 1.89775 19.4979L17.1598 17.3037C17.459 17.3037 17.7583 16.9903 18.0575 16.6768L24.9404 1.6307C25.539 0.69032 26.736 0.69032 27.0352 1.6307Z"
                                    fill="currentColor" />
                            </svg>
                        @endfor
                    </div>
                    <p class="text-xl">
                        <?php echo substr($testmonial->description, 0, 400); ?>
                    </p>


                    <div class="flex items-center gap-x-4 ">
                        <div class="">
                            <img class="rounded-full size-18 " src="{{ asset('storage/' . $testmonial->thumbnail) }}"
                                alt="Image Description">
                        </div>
                        <div class="grow">
                            <h3 class="font-bold text-gray-800 dark:text-neutral-200 text-xl">
                                {{ $testmonial->name }}
                            </h3>
                            <p class="text-xs uppercase text-gray-600 dark:text-neutral-500">
                                {{ $testmonial->designation }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
