<x-filament-panels::page>
    {{-- <style>
        .fi-header-heading {
            display: none;
        }
    </style> --}}
    {{-- Page content --}}
    <p>Product ID: {{ $this->record->id }}</p>
    <p>Product Name: {{ $this->record->name }}</p>
    <p>Product Description: {{ $this->record->description }}</p>
    <p>Product Price: RM{{ $this->record->price }}</p>
    <p>Created At: {{ $this->record->created_at }}</p>
    <p>Updated At: {{ $this->record->updated_at }}</p>

    {{-- <h1 class="text-xl font-bold mt-6 mb-4">Kategori Aktif</h1>
    <ul>
        @foreach($this->categories as $cat)
        <li>{{ $cat->name }}</li>
        @endforeach
    </ul> --}}
</x-filament-panels::page>