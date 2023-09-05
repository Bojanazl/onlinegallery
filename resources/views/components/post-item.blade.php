
<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

div.border {
    border:1px solid gray;
    border-top: 0;
}

div.background {
    background-color: gray;
}

article.shadow {
    box-shadow: 0 4px 8px 0 rgba(1, 17, 12, 0.655);
}

  </style>

<article class="flex flex-col shadow my-6">
    <!-- Article Image -->
    <div class="content-center background">
        <a href="#" class="hover:opacity-75" >
            <img src="{{$post->getThumbnail()}}"> 
        </a>       
    </div>
    
    <div class="bg-white flex flex-col justify-start p-6 border">

            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                {{$post->category->title ?? ''}}
        </a>

        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
        <p href="#" class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->getFormattedDate() ?? ''}}
        </p>
        <a href="#" class="pb-6">{{$post->shortBody()}}</a>
        <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>



