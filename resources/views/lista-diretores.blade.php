<x-base-layout>
    <!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($diretores as $diretores)
    <!-- Card -->
    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-2xs rounded-xl ">
      <div class="h-52 flex flex-col justify-center items-center bg-blue-600 rounded-t-xl">
        <img class="h-52 w-full rounded-t-xl object-cover" src="{{$diretores->foto}}" alt="">
      </div>
      <div class="p-4 md:p-6">
        <span class="block mb-1 text-xs font-semibold uppercase text-blue-600 ">
          Diretor(a)
        </span>
        <h3 class="text-xl font-semibold text-gray-800  ">
          {{$diretores->nome}}
        </h3>
      </div>
      <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-b-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none " href="{{route('detalhes-diretores', $diretores)}}">
          Ver detalhes
        </a>
        
      </div>
    </div>
    <!-- End Card -->
    @endforeach
  <!-- End Grid -->
</div>
<!-- End Card Blog -->
</x-base-layout>


