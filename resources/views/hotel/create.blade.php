<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hotel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <p class="h3 text-center mt-3">Create Data Hotel</p>

                <form action="/hotel" method="POST">
                    @csrf
                    <div class="input-group mb-3 justify-content-center">
                        <span class="input-group-text" id="nama">Nama Hotel</span>
                        <input type="text" name="nama" class="form-control col-md-6"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <span class="input-group-text" id="alamat">Alamat</span>
                        <input type="text" name="alamat" class="form-control col-md-6"
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
