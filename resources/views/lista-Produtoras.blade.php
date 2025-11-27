<x-base-layout>

<!-- Team -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  
  <!-- Title -->
  <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight ">Produtoras</h2>
  </div>
  <!-- End Title -->

  <!-- Grid -->
  <div class="grid grid-cols-2 lg:grid-cols-3 gap-8 md:gap-12">

  @foreach($produtoras as $produtora)
    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
      <img src="{{$produtora->capa}}" alt="" class="w-20  grow">
      <div class="grow">
        <div>
          <a href="{{route('detalhes-produtoras', $produtora)}}">
          <h3 class="font-medium text-gray-800 dark:text-Black border rounded-full text-center"  >
            {{$produtora->nome}}
          </h3>
          </a>
        </div>

        <!-- Social Brands -->
        <div class="mt-2 sm:mt-auto space-x-2.5 ">
         
      
        </div>
        <!-- End Social Brands -->
      </div>
    </div>
    @endforeach
    <!-- End Col -->
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
</div>
<!-- End Team -->

</x-base-layout>


