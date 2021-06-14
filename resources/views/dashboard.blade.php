<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
          <h2 class="font-semibold text-xl text-gray-100 leading-tight">
              {{ __('Início') }}
          </h2>
        </div>
    </x-slot>

    <section class="py-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-7xl mx-auto px-2 md:px-6 lg:px-8">

          <div class="action-card">
              <h3 class="text-gray-50 text-xl"><a href="{{ route('shoplist.index') }}">Ver suas listas</a></h3>
              <i class="fas fa-list-ul text-6xl text-white text-opacity-10"></i>
          </div>

          <div class="action-card">
            <h3 class="text-gray-50 text-xl"><a href="{{ route('shoplist.create') }}">Criar nova list</a>a</h3>
            <i class="fas fa-list-ul text-6xl text-white text-opacity-10"></i>
          </div>

          <div class="opacity-0">
            <div class="rounded-t-lg bg-gray-200 p-6">
              <h2 class="text-lg text-gray-800 mb-2">Última lista adicionada</h2>
              <p class="text-md text-gray-500">Há 15 minutos</p>
            </div>
            <div class="bg-white overflow-hidden shadow-sm rounded-b-lg mb-4">
              <div class="p-6 bgj-white border-b border-gray-200">
                <h1 class="text-2xl text-gray-800 font-bold"> ULTIMA LISTA</h1>
                <p class="text-base text-gray-400"> LISTA</p>
              </div>
            </div>
          </div>

      </div>
    </section>

</x-app-layout>
