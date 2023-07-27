<x-app-layout>
    @section('title', __('Products'))
    <x-slot name="header">
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Products') }}
        </h2>
        <x-primary-link href="{{ route('products.create') }}">
          {{ __('Create product') }}
        </x-primary-link>
      </div>
    </x-slot>
    <x-container>
      <x-partials.flash-messages />
      @if ($products->count() == 0)
          <p class="text-center">{{ __('No data to show') }}</p>
      @endif
      <x-data.responsive-table>
        <x-slot name="headers">
          <x-data.th>Name</x-data.th>
          <x-data.th>Price</x-data.th>
          <x-data.th>#Actions</x-data.th>
        </x-slot>
        <x-slot name="body">
          @foreach ($products as $product)
            <x-data.tr>
              <x-data.td>{{ $product->name }}</x-data.td>
              <x-data.td>{{ $product->price }}</x-data.td>
              <x-data.td class="px-6 py-4">
                <div class="flex justify-end gap-4">
                  <a x-data="{ tooltip: 'Delete' }" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                  </a>
                    <a x-data="{ tooltip: 'Edite' }" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                      </svg>
                    </a>
                </div>
              </x-data.td>
            </x-data.tr>
          @endforeach
        </x-slot>
      </x-data.responsive-table>
    </x-container>
</x-app-layout>
