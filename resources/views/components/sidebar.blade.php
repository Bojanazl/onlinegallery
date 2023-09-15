
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
        <div class="w-full bg-white shadow flex flex-col my-4 p-6">
            <p class="text-xl font-semibold pb-5">{{ \App\Models\TextWidget::getTitle('about-me') }}</p>
            <p class="pb-2">{!!\App\Models\TextWidget::getContent('about-me') !!}</p>
            <a href="#" class="w-full bg-gray-800 text-white font-bold text-sm uppercase rounded hover:bg-green-700 flex items-center justify-center px-2 py-3 mt-4">
                Read more
            </a>
        </div>
      </aside>