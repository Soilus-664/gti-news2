<x-baseHome>

<!-- drawer init e show com Alpine.js -->
<div class="text-center" x-data="{ drawerOpen: true }">
   <button 
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
      type="button"
      @click="drawerOpen = !drawerOpen"
      :aria-expanded="drawerOpen.toString()"
      :aria-controls="'drawer-form'"
    >
      Mostra a tela
   </button>


   <!-- drawer component -->
   <div 
      id="drawer-form" 
      x-show="drawerOpen" 
      x-transition:enter="transform transition ease-in-out duration-300"
      x-transition:enter-start="-translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transform transition ease-in-out duration-300"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="-translate-x-full"
      x-cloak
      class="fixed top-[55px] left-0 z-40 h-screen p-4 overflow-y-auto bg-white w-80 dark:bg-black"
      tabindex="-1"
      @click.away="drawerOpen = false"
      aria-labelledby="drawer-form-label"
    >
      <h5 id="drawer-label" class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
        Editar Noticia
      </h5>
      <button type="button" @click="drawerOpen = false" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close menu</span>
      </button>
      
      <form class="mb-6" method="post" action="{{route('alteraNoticia', $noticia)}}">
      @csrf
        <div class="mb-6">
          <label for="capa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capa</label>
          <input type="text" id="capa" name="capa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite o link [Url]" value="{{$noticia->capa}}" required />
        </div>
        <div class="mb-6">
          <label for="Titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo</label>
          <input type="text" id="Titulo" name="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite o Titulo" value="{{$noticia->Titulo}}" required />
        </div>
        <div class="mb-6">
          <label for="resumo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resumo</label>
          <input type="text" id="resumo" name="resumo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite o Resumo" value="{{$noticia->resumo}}" required />
        </div>
        <div class="mb-6">
          <label for="conteudo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conteudo</label>
          <textarea id="conteudo" rows="4" name="conteudo" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Conteudo...">{{$noticia->conteudo}}</textarea>
        </div>
        <button type="submit" class="text-white justify-center flex items-center bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        <a href="{{route('gerenciaNoticias')}}">Criar Notícia</a>  
        </button>
      </form>
    </div>
</div>

</x-baseHome>
