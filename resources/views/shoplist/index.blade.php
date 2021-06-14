<x-app-layout class="relative">
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-100 leading-tight">
          {{ __('Listas') }}
      </h2>
    </div>
  </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      @forelse($shopList as $list)
        <a href="{{ route('shoplist.show', $list->id) }}">
          <div class="bg-white overflow-hidden shadow-sm rounded-lg mb-4">
            <div class="p-6 bg-white border-b border-gray-200">
              <h1 class="text-2xl text-gray-900">{{ $list->title }}</h1>
              <hr class="my-4 border-dashed border-pink-300">
              <p class="text-base text-gray-400"> {{ substr($list->content, 0, 30) }}... </p>
            </div>
          </div>
        </a>
      @empty
        <h1 class="col-span-full text-2xl text-gray-50 font-bold">🦗 Cri cri... Não há nenhuma lista</h1>
      @endforelse 

    </div>
</div>

<div class="fixed bottom-4 right-6 md:bottom-12 md:right-32">
  <a href="{{ route('shoplist.create') }}" 
    class="
    bg-pink-600 
    text-gray-50
    p-2 
    flex
    justify-center
    items-center
    w-16
    h-16
    rounded-full
    hover:bg-pink-500
    shadow-md
    
    ">
    <i class="fas fa-plus"></i>
  </a>
</div>

</x-app-layout>