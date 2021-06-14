<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <a href="{{ route('shoplist.index') }}" class="font-semibold text-xl text-gray-100 leading-tight">
          Voltar
      </a>

      <div class="buttons flex">
        <a class="btn-primary mr-4 bg-blue-500" href="{{ route('shoplist.edit', $list->id) }}">
          <i class="fas fa-pen"></i>
        </a>
        <form action="{{ route('shoplist.destroy', $list->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn-primary">
            <i class="fas fa-trash"></i>
          </button>
        </form>
      </div>


    </div>
  </x-slot>

<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-2xl mb-4">{{ $list->title }}</h1>
                <hr class="border-dashed border-pink-300">
                <article class="mt-8 prose" id="shoplist">{{ $list->content }}</article>
            </div>
        </div>
    </div>
</div>

</x-app-layout>