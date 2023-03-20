<x-app-layout>
    {{-- POST --}}
    <div class="max-w-xl mx-auto pt-4">
        <div class="p-4 border border-primary rounded-md">
            <div class="flex">
                <div class="space-y-1 flex flex-col w-full">

                    <div class="flex w-full flex items-center text-white">  
                        <h4 class="text-2xl font-bold dark:text-white">{{ $post->title }}</h4>
                    </div>

                    <div class="flex w-full flex items-center text-white">  
                        <p class="dark:text-white">{{ $post->user->name }}</p>
                    </div>

                    <div>
                    @foreach ($post->tags as $tag)
                        <div class="text-xs inline-flex items-center font-bold leading-sm uppercase px-3 py-1 bg-blue-200 text-blue-700 rounded-full w-24 h-6">
                            {{ $tag->tag}}
                        </div>
                    @endforeach
                    </div>


                    <div class="bg-gray-200 border border-gray-200 w-full h-44 py-3 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        {{$post->cont}}
                    </div>
                </div>
            </div>
    
        </div>


    {{-- COMENTARIOS --}}
    <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
        <div class="max-w-2xl mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
              <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Comentarios </h2>
          </div>

          {{-- Crear un comentario --}}
          <form class="mb-6">
              <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                  <label for="comment" class="sr-only">Tu comentario</label>
                  <textarea id="comment" rows="6"
                      class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                      placeholder="Escribir un comentario" required></textarea>
              </div>
              <button type="submit"
                  class=" p-4 border border-primary rounded-md inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800 inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                  Enviar
              </button>
          </form>



          {{-- ForEach de comentarios --}}

          @foreach ($post->comments as $comment)
          <article class="p-6 mb-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
              <footer class="flex justify-between items-center mb-2">
                  <div class="flex items-center">
                      <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                         {{ $comment->user->name }}
                        </p>
                      <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12"
                              title="March 12th, 2022">{{ $post->created_at}}</time></p>
                  </div>
                  <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                      class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                      type="button">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                              d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                          </path>
                      </svg>
                      <span class="sr-only">Comment settings</span>
                  </button>
                  <!-- Dropdown menu -->
                  <div id="dropdownComment3"
                      class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                      <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                          aria-labelledby="dropdownMenuIconHorizontalButton">
                          <li>
                              <a href="#"
                                  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                          </li>
                          <li>
                              <a href="#"
                                  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                          </li>
                          <li>
                              <a href="#"
                                  class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                          </li>
                      </ul>
                  </div>
              </footer>
              <p class="text-gray-500 dark:text-gray-400">{{ $comment->comment }}</p>
          </article>
          @endforeach

        </div>
      </section>
      
</x-app-layout>
