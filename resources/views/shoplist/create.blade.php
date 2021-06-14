<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-100 leading-tight">
          Crie sua lista
      </h2>
    </div>
  </x-slot>

<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white sm:rounded-lg shadow-md">
            <div class="p-6 border-b border-gray-200">

                <form action="{{ route('shoplist.store') }}" method="POST">
                  @csrf
                  @method('POST')
                  <input 
                    class="focus:border-transparent focus:ring-2 
                    focus:ring-pink-500 rounded-md border-gray-300 w-full"
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    placeholder="Título"
                    >

                  @error('title')
                    <small class="text-red-600 font-bold">
                      {{ $message }}
                    </small>
                  @enderror

                  <textarea 
                  class="focus:border-transparent focus:ring-2 
                  focus:ring-pink-500 mt-4 w-full h-80
                  border-gray-300 rounded-md" 
                  name="content"
                  id="content"
                  value="{{ old('content') }}"
                  placeholder="Conteúdo"
                  ></textarea>

                  @error('content')
                    <small class="text-red-600 font-bold">
                      {{ $message }}
                    </small>
                  @enderror

                  <button class="btn-primary mt-4 w-full" type="submit">Enviar</button>
                </form>

            </div>
        </div>
    </div>
</div>

</x-app-layout>