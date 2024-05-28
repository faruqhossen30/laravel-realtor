@php
use App\Models\Setting\WebsiteSetting;
 $site = WebsiteSetting::first();
@endphp
   <!-------map-sections-------->
    <section>
        <div class="container mx-auto grid grid-cols-12 gap-6 py-24 ">

            <div class="col-span-12 lg:col-span-6 bg-[#FDFAF8] p-6">
                <h2 class=" text-3xl font-bold">Contact Us Right Now</h2>
                <p class="py-3">Required fields are marked *</p>

                <form action="{{route('contact.send')}}" method="POST" class=" space-y-3">

                    @csrf
                    <div class="flex space-x-3">
                        <input type="text" name="name"
                            class="bg-gray-50 border border-brand text-gray-900 sm:text-sm rounded-lg focus:ring-brand focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-brand dark:focus:border-brand"
                            placeholder="Your name" required="">

                        <input type="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="your email " required="">
                    </div>


                    <div class="flex space-x-3">
                        <input type="text" name="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your Phone" required="">

                        <select id="countries" name="subject"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Subject</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                        </select>
                    </div>


                    <textarea id="message" rows="8" name="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-brand focus:border-brand dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Type massage here"></textarea>


                    <button class="text-white  flex bg-brand rounded-full items-center py-3 px-5 ">
                        <span class="font-bold">Send Now </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-4 text-white font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </form>

            </div>
            <div class="col-span-12 lg:col-span-6 px-6 rounded">
                <iframe src="{{$site->map}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

    </section>
    <!-------map-sections-------->
