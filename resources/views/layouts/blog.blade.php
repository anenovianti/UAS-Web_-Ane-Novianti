<div class="flex flex-col space-y-5 justify-center items-center">
    <span class="text-white bg-black py-3 px-5 rounded-full text-center">Blog</span>
    <h3 class="text-5xl font-bold max-w-2xl">
      From Our Blog
    </h3>
  </div>
  
  <div class="flex flex-wrap mt-10">
    @foreach ($blogs as $blog)
    <div class="w-full md:w-1/3 relative px-2 mb-6">
      <img src="{{ asset($blog->image) }}" class="h-64 w-full object-cover" alt="{{ asset($blog->image) }}">
      <div class="mt-3 space-y-2">
        <div class="space-y-1">
          <p class="font-bold text-xl">{{$blog->title}}</p>
          <p class="text-lg text-gray-500">{{$blog->content}}</p>
          <span class="text-gray-500">September 6, 2022</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
