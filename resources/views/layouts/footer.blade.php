@php
    use App\Models\Setting\WebsiteSetting;
    $site = WebsiteSetting::first();
@endphp
<!--------Footer Section---------->
<footer class="bg-[#025248]">
    <div class="container mx-auto pt-24  justify-center">
        <div class="flex justify-between items-center  border rounded p-6 bg-brand -mt-40 space-x-6">
            <div class="flex  items-center space-x-5  ">
                <h2 class="text-5xl font-bold text-white py-4">LET’S TALK</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
            </div>

            <button class="text-white  flex bg-[#171B2A] rounded-full items-center py-3 px-5 ">
                <span class="font-bold">Send Now </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-4 text-white font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

        </div>
    </div>
    <div class=" container mx-auto grid grid-cols-12 bg-[#025248] py-24">

        <div class="lg:col-span-3 col-span-12 px-10 space-y-4 ">
            <div class=" flex space-x-2">
                <a href="{{ route('homepage') }}" class="flex items-center space-x-3">
                    <img src="{{ asset('storage/' . $site->logo) }}" class="h-10 w-auto" alt="thumbnail">
                </a>
            </div>

            <p class="text-white">{{ $site->info }}</p>

            <div class="flex space-x-3  font-bold  text-2xl py-6">
                <div class=" border-2 rounded-full text-4xl bg-brand  w-10 h-10 flex justify-center items-center">
                    <svg class="w-8 h-8 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                            clip-rule="evenodd" />
                    </svg>

                </div>

                <div class=" border-2 rounded-full border-green-600 w-10 h-10 flex justify-center items-center">

                    <svg class=" text-white dark:text-white w-6 h-6 m-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd"
                            d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <div class=" border-2 rounded-full border-green-600 w-10 h-10 flex justify-center items-center">

                    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                    </svg>
                </div>

                <div  class=" border-2 rounded-full border-green-600  w-10 h-10 flex justify-center items-center">

                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z"
                            clip-rule="evenodd" />
                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                    </svg>
                </div>



            </div>
        </div>
        <div class="lg:col-span-3 hidden lg:block col-span-6">
            <ul class=" space-y-3">
                <li><a href="#" class="text-2xl font-bold text-white ">Our Company</a></li>
                <li><a href="#" class="hover:text-brand text-white">Trems of Use</a></li>
                <li><a href="#" class="hover:text-brand text-white">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-brand text-white">Pricing Plan</a></li>
                <li><a href="#" class="hover:text-brand text-white">Our Services</a></li>
                <li><a href="#" class="hover:text-brand text-white">Contact</a></li>
                <li><a href="#" class="hover:text-brand text-white">Careers</a></li>
                <li><a href="#" class="hover:text-brand text-white">FAQS</a></li>
            </ul>
        </div>
        <div class="lg:col-span-3 hidden lg:block col-span-6 ">

            <ul class=" space-y-3 ">
                <li><a href="#" class="text-2xl font-bold text-white ">Discover Cities</a></li>
                <li><a href="#" class="hover:text-brand text-white">Chicago</a></li>
                <li><a href="#" class="hover:text-brand text-white">Los Angeles</a></li>
                <li><a href="#" class="hover:text-brand text-white">New Jersey</a></li>
                <li><a href="#" class="hover:text-brand text-white">Russia</a></li>
                <li><a href="#" class="hover:text-brand text-white">South Africa</a></li>
                <li><a href="#" class="hover:text-brand text-white">Canada</a></li>
                <li><a href="#" class="hover:text-brand text-white">Germany</a></li>
            </ul>
        </div>


        <div class="lg:col-span-3  col-span-12 space-y-6 px-6 py-12 ">
            <h2 class="text-2xl font-bold text-white">Subscribe Now !</h2>
            <form>
                <label for="search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <input type="search" id="search"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Your Email" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-black hover:bg-brand focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-6 h-6 text-white">
                            <path fill-rule="evenodd"
                                d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>
            <div class="flex space-x-3 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
                <p>{{ $site->address }}</p>
            </div>
        </div>
    </div>
    <div class="  flex justify-center pb-6">

        <p class="text-gray-300">Copyright © <span class="text-white">Realtor</span> {{ date('Y') }} All rights reserved.</p>
    </div>
</footer>
<!--------Footer Section---------->
