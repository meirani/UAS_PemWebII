<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hotel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <p class="h3 text-center mt-3">Daftar Hotel</p>

                <div class="p-6 text-gray-900">
                    <!-- Button to add data -->
                    <div class="flex justify-center mb-4 ml-3">
                        <a href="/hotel/create">
                            <button class="btn btn-primary">
                                Tambah Data
                            </button>
                        </a>
                    </div>

                    <!-- Table -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <table class="w-full divide-y divide-gray-200">
                            <tr>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                </th>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                    Nama Hotel</th>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                    Alamat</th>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                    Actions</th>
                            </tr>
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        <div class="flex space-x-2 justify-content-center">
                                            <a href="#">
                                                <button type="button" class="btn btn-primary mr-2">
                                                    Book
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $hotel->nama }}</td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $hotel->alamat }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-2 justify-content-center">
                                            <a href="/hotel/{{ $hotel->id }}/edit">
                                                <button type="button" class="btn btn-secondary btn-sm mr-2">
                                                    Edit
                                                </button>
                                            </a>
                                            <form action="/hotel/{{ $hotel->id }}" method="POST"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-secondary btn-sm">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- {{ route('data.destroy', $item->id) }} 
     {{ route('data.edit', $item->id) }}
      {{ route('data.create') }}
--}}
