@php
    use App\Models\Blog;
    $blogs = Blog::get();
@endphp
<!-------------blog section -------------->
<section>

    <div class="container mx-auto  space-y-4">
        <div class="flex justify-center">
            <button href="" class="text-yellow-400 border   rounded-full items-center py-1 px-8">
                read our blog</button>
        </div>
        <h1 class="text-center pb-12 text-3xl font-semibold">Read Our Latest Blogs</h1>
    </div>
    <div class=" container mx-auto grid grid-cols-12 gap-6">
        @foreach ($blogs as $blog)
        <div class="col-span-12 lg:col-span-4 border rounded p-5 space-y-3">


                <img src="{{ asset('storage/' . $blog->thumbnail) }}" class="w-full" />
                <p>By Admin 8 min</p>
                <a href="{{route('blog.page',$blog->slug)}}" class="text-3xl font-bold">{{$blog->title}}</a>
                <a href="{{route('blog.page',$blog->slug)}}"
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
<!-------------blog section -------------->

