  <x-app-layout>
  
  <!-- Posts Section -->
  <section class="w-full md:w-2/3 flex flex-col items-center px-3 content-center">

 
    @foreach($posts as $post)
    <x-post-item :post="$post"></x-post-item>
    @endforeach


    <!-- Pagination --> 
    {{$posts->onEachSide(6)->links()}}

</section>

</x-app-layout>
