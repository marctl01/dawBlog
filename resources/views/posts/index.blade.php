<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            POSTS
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 inline-block">
                    @foreach ($posts as $post)

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <div>
                        @foreach ($post->tags as $tag)
                            <p  class="inline-block px-3 h-6">{{ $tag->tag}}</p>
                        @endforeach
                        </div>
                       
                        <div>
                            <a href="{{route('posts.show', $post)}}">
                                <h5 class="mb-2 text-3xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400"> {{ $post->cont }}</p>
                        </div>
                    </div>
                    
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
