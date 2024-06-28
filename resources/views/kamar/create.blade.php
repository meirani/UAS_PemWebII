<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kamar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <p class="h3 text-center mt-3">Create Data Kamar</p>

                <form action="/kamar" method="POST">
                    @csrf
                    <div class="input-group mb-3 justify-content-center">
                        <div class="form-floating">
                            <label for="hotel_id">Pilih Hotel</label>
                            <select class="form-select ml-3 mt-3" id="hotel_id" name="hotel_id"
                                aria-label="Floating label select example">
                                @foreach ($hotels as $hotel)
                                    <option value="{{ $hotel->id }}">{{ $hotel->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <span class="input-group-text" id="nomor">Nomor</span>
                        <input type="text" name="nomor" class="form-control col-md-6"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="flex justify-center mb-4 ml-3 d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary col-6">Create!</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
