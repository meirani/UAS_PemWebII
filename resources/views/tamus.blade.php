<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tamu') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">



            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <p class="h3 text-center mt-3">Daftar Tamu</p>

                <div class="p-6 text-gray-900">
                    <!-- Table -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <table class="w-full divide-y divide-gray-200">
                            <tr>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                    Hotel</th>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                    Tamu</th>
                                <th
                                    class="px-6 py-3 text-center text-s font-large text-gray-500 uppercase tracking-wider table-primary">
                                    Tanggal</th>
                            </tr>
                            @foreach ($reservasis as $reservasi)
                                <tr>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $reservasi->hotel->nama }}
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $reservasi->tamu }}</td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">{{ $reservasi->tanggal }}</td>
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
