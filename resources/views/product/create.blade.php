<x-app-layout>
  @section('title', __('Create product'))
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Create product') }}
      </h2>
    </x-slot>
    <x-container>
      <form action="{{route('products.store')}}" method="POST">
        @if ($errors->any())
          <div class="block w-full pl-3 pr-4 py-2 text-left text-base font-medium text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50">
            <h2 class="text-2xl">Opps... we just found some errors</h2>
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
          </div>
        @endif
        @csrf
        <div class="grid grid-cols-2 gap-4">
          <div>
            <x-input-label for="code">{{__('Code')}}</x-input-label>
            <x-text-input class="w-full" id="code" name="code" type="text"></x-text-input>
          </div>
          <div>
            <x-input-label for="name">{{__('Name')}}</x-input-label>
            <x-text-input class="w-full" id="name" name="name" type="text"></x-text-input>
          </div>
          <div>
            <x-input-label for="bar_code">{{__('Barcode')}}</x-input-label>
            <x-text-input class="w-full" id="bar_code" name="bar_code" type="text"></x-text-input>
          </div>
          <div>
            <x-input-label for="sku">{{__('SKU')}}</x-input-label>
            <x-text-input class="w-full" id="sku" name="sku" type="text"></x-text-input>
          </div>
          <div>
            <x-input-label for="price">{{__('Price')}}</x-input-label>
            <x-text-input class="w-full" id="price" name="price" type="text"></x-text-input>
          </div>
        </div>
        <x-primary-button>
          Submit
        </x-primary-button>
      </form>
    </x-container>
</x-app-layout>