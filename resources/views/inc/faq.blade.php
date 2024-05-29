@php
    use App\Models\Faq\Faq;
    $faqs = Faq::all();
@endphp

<section>
    <div class=" Container mx-auto grid grid-cols-12 py-12">
        <div class="col-span-12 lg:col-span-6 p-12 space-y-3 ">

            {{-- <div id="accordion-collapse" data-accordion="collapse">

                @foreach ($faqs as $faq)
                    <h2 id="accordion-collapse-heading-{{ $faq->id }}">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-collapse-body-{{ $faq->id }}" aria-expanded="false"
                            aria-controls="accordion-collapse-body-{{ $faq->id }}">
                            <span>{{ $faq->question }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2.5" stroke="currentColor"
                                class="w-8 h-8  border rounded-full p-2 text-brand">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-{{ $faq->id }}" class="hidden"
                        aria-labelledby="accordion-collapse-heading-{{ $faq->id }}">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach



            </div> --}}


            <div id="accordion-collapse" data-accordion="collapse" class=" space-x-1">

                @foreach ($faqs as $faq)
                    <div id="accordion-collapse-heading-{{$faq->id}}" class=" flex justify-between border rounded-xl px-3 py-3 bg-[#FFF8F0] "
                        data-accordion-target="#accordion-collapse-body-{{$faq->id}}" aria-expanded="false"
                        aria-controls="accordion-collapse-body-{{$faq->id}}"  >

                        <P>{{$faq->question}}</P>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-8 h-8  border rounded-full p-2 text-brand">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>

                    </div>
                    <div id="accordion-collapse-body-{{$faq->id}}" class="hidden " aria-labelledby="accordion-collapse-heading-{{$faq->id}}">
                        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $faq->answer }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            {{--
            <div class=" shadow-lg w-full lg:w-2/3 mx-auto mt-4">
                <div class=" overflow-hidden border-t">
                    <label>
                        <input class=" absolute opacity-0 peer" type="checkbox" />
                        <p class="p-5 inline-block">Lable one</p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-8 h-8  inline-block border rounded-full peer-checked:rotate-45 peef p-2 text-brand float-right mt-5 mr-2  bottom-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <div class=" bg-gray-300 max-h-0 peer-checked:max-h-screen">
                            <p class="p-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime corporis
                                non
                                voluptatibus
                                temporibus perferendis dolorum minus aliquam quam odio soluta, laborum eveniet iusto
                                aliquid
                                libero voluptas distinctio eius rem veniam consectetur praesentium aperiam at excepturi
                                animi. Odio numquam autem facilis a, enim vitae modi ratione amet eos ullam quae
                                eligendi.
                            </p>
                        </div>

                    </label>
                </div>
                <div></div>
                <div></div>
            </div> --}}


        </div>
        <div class="col-span-12 lg:col-span-6">
            <div class="px-6 space-y-10">
                <a href=""
                    class="text-yellow-300 border font-bold border-yellow-400  rounded-full items-center py-2 px-8 ">
                    Read our FAQs</a>

                <h1 class="text-4xl font-bold ">Explore Our Featured <br> Properties</h1>

                <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in
                    hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetu.</p>

                <img src="{{ asset('img/client/faqimage.png') }}" />

                <div class=" flex space-x-3">
                    <h2 class="text-xl font-bold">Let's Chat</h2>
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-wechat text-brand" viewBox="0 0 16 16">
                            <path
                                d="M11.176 14.429c-2.665 0-4.826-1.8-4.826-4.018 0-2.22 2.159-4.02 4.824-4.02S16 8.191 16 10.411c0 1.21-.65 2.301-1.666 3.036a.32.32 0 0 0-.12.366l.218.81a.6.6 0 0 1 .029.117.166.166 0 0 1-.162.162.2.2 0 0 1-.092-.03l-1.057-.61a.5.5 0 0 0-.256-.074.5.5 0 0 0-.142.021 5.7 5.7 0 0 1-1.576.22M9.064 9.542a.647.647 0 1 0 .557-1 .645.645 0 0 0-.646.647.6.6 0 0 0 .09.353Zm3.232.001a.646.646 0 1 0 .546-1 .645.645 0 0 0-.644.644.63.63 0 0 0 .098.356" />
                            <path
                                d="M0 6.826c0 1.455.781 2.765 2.001 3.656a.385.385 0 0 1 .143.439l-.161.6-.1.373a.5.5 0 0 0-.032.14.19.19 0 0 0 .193.193q.06 0 .111-.029l1.268-.733a.6.6 0 0 1 .308-.088q.088 0 .171.025a6.8 6.8 0 0 0 1.625.26 4.5 4.5 0 0 1-.177-1.251c0-2.936 2.785-5.02 5.824-5.02l.15.002C10.587 3.429 8.392 2 5.796 2 2.596 2 0 4.16 0 6.826m4.632-1.555a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0m3.875 0a.77.77 0 1 1-1.54 0 .77.77 0 0 1 1.54 0" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
