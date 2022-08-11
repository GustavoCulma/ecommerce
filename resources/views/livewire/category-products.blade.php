<div wire:init="loadPosts">
    {{-- mostrandoel spinner en else --}}
    @if (count($products))
        <div class="glider-contain">
            {{-- Recuperar el id --}}
            <div class="glider-{{ $category->id }}">
                @foreach ($products as $product)
                    <ul>
                        <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'sm:mr-4' }}">
                            <article>
                                <figure>
                                    <img class="h-48 w-full object-cover object-center"
                                        src="{{ Storage::url($product->images->first()->url) }}" alt="">
                                </figure>

                                <div class="py-4 px-6">
                                    <h1 class="text-lg font-semibold">
                                        <a href="{{ route('products.show', $product) }}">
                                            {{ Str::limit($product->name, 10) }}
                                        </a>
                                    </h1>
                                    <p class="font-bold text-gray-700">COP $ {{ $product->price }}</p>
                                </div>
                            </article>
                        </li>
                    </ul>
                @endforeach
            </div>
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>
    @else
        <div class="mb-4 h-48 flex justify-center items-center bg-white shadow-xl border border-gray-100 rounded-lg">
            <div class="rounded animate-spin ease duration-300 w-10 h-10 border-2 border-orange-500"></div>
        </div>
    @endif
</div>
