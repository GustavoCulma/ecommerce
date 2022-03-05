<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">

            {{-- Imagenes y descripcion del producto --}}
            <div>
                <div class="flexslider">
                    <ul class="slides">
                        @foreach ($product->images as $image)
                            <li data-thumb=" {{ Storage::url($image->url) }}">
                                <img src=" {{ Storage::url($image->url) }}" />
                            </li>
                        @endforeach

                    </ul>
                </div>

                <div class="-mt-10 text-gray-700">
                    <h2 class="font-bold text-lg">Descripción</h2>

                </div>
            </div>

            {{-- marca, precio y carrito  de compras --}}
            <div>
                <h1 class="text-xl font-bold text-trueGray-700"></h1>
                <div class="flex">
                    <p class="text-gray-700">Marca: <a class="underline capitalize hover:text-orange-500"
                            href="">{{ $product->brand->name }}</a></p>
                    <p class="text-gray-700 mx-6">5 <i class="fas fa-star text-sm text-yellow-400"></i></p>
                    <a class="text-orange-500 hover:text-orange-600 underline" href="">39 reseñas</a>
                </div>

                <p class="text-2xl font-semibold text-gray-700 my-4">$ {{ $product->price }} </p>

                <div class="bg-white rounded-lg shadow-lg mb-6">
                    <div class="p-4 flex items-center">
                        <span class="flex items-center justify-center h-10 w-10 rounded-full bg-cyan-500">
                            <i class="fas fa-truck text-sm text-white"></i>
                        </span>

                        <div class="ml-4">
                            <p class="text-lg font-semibold text-greenLime-600">Envíos a toda Colombia.</p>
                            <p>Recibelo el {{ Date::now()->addDay(8)->locale('es')->format('l j F') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @push('script')
            <script>
                $(document).ready(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            </script>
        @endpush
</x-app-layout>
