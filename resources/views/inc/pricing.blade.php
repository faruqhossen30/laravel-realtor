@php
    use App\Models\Package\Package;
    $packages = Package::with('service')->get();
@endphp
<section class="py-12" id="pricingsection">

    <div class="container mx-auto  space-y-4">
        <div class="flex justify-center">
            <button href="" class="text-yellow-400 border   rounded-full items-center py-1 px-8">
                OUR PRICING</button>
        </div>
        <h1 class="text-center pb-12 text-3xl font-semibold">Explore Our Pricing Plan</h1>
    </div>
    <div class="container  mx-auto  grid grid-cols-12 gap-4">

        @foreach ($packages as $package)
            <div
                class="col-span-12 lg:col-span-4 hover:bg-[#FEF6ED] bg-[#FDFAF8] space-y-6 border rounded p-5 mx-auto lg:mx-0 ">
                <h2 class="text-xl font-bold">{{ $package->name }}</h2>
                <p class="font-bold text-xl py-6"> $<span class="text-4xl font-bold">{{ $package->price }}</span>/mo</p>
                <hr>

                @foreach ($package->service as $servicename)
                    <ul class="flex space-x-2 ">

                        @if ($servicename->status == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-5 h-5 bg-[#00B67A] rounded-full text-white font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-x w-5 h-5 bg-brand rounded-full text-white font-bold" viewBox="0 0 16 16">
                                <path
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        @endif

                        <li>{{ $servicename->service }}</li>
                    </ul>
                @endforeach

                <div class="py-8">
                    <button class="text-black  flex bg-[#f0eae7] rounded items-center py-2 px-24 ">
                        <span class=" text-xl font-normal">Select package</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 text-black font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach

    </div>
</section>
