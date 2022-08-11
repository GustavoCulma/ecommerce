{{-- alpine --}}
<div x-data>

    {{-- cantidad de productos --}}
    <p class="text-gray-700 mb-4">
        <span class="font-semibold text-lg">Stock disponible:</span> {{ $quantity }}
    </p>

    <div class="flex">
        <div class="mr-4">
            {{-- Boton --}}
            <x-jet-secondary-button disabled x-bind:disabled="$wire.qty <= 1" wire:loading.attr="disabled"
                wire:target="decrement" wire:click="decrement">
                -
            </x-jet-secondary-button>

            {{-- contador --}}
            <span class="mx-2 text-gray-700">{{ $qty }}</span>

            {{-- Boton --}}
            <x-jet-secondary-button x-bind:disabled="$wire.qty >= $wire.quantity" wire:loading.attr="disabled"
                wire:target="increment" wire:click="increment">
                +
            </x-jet-secondary-button>
        </div>

        {{-- Boton de agregar --}}
        <div class="flex-1">
            <x-button color="cyan" class="w-full" wire:click="addItem" wire:loading.attr="disabled"
                wire:target="addItem">
                Agregar al carrito de compras
            </x-button>
        </div>
    </div>
</div>
