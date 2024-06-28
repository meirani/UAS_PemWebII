<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <p class="h3 text-center mt-3">Update Data Reservasi</p>

                <form action="/reservasi/{{ $reservasi->id }}" method="POST">
                    @method('put')
                    @csrf

                    <div class="input-group mb-3 justify-content-center">
                        <span class="input-group-text" id="tamu">Tamu</span>
                        <input type="text" name="tamu" value="{{ $reservasi->tamu }}"
                            class="form-control col-md-6" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <div class="form-floating">
                            <label for="hotel_id">Pilih Hotel</label>
                            <select class="form-select ml-3 mt-3" id="hotel_id" name="hotel_id"
                                aria-label="Floating label select example">
                                @foreach ($hotels as $hotel)
                                    @if (old('hotel_id', $reservasi->hotel_id) == $hotel->id)
                                        <option value="{{ $hotel->id }}" selected>{{ $hotel->nama }}
                                        </option>
                                    @else
                                        <option value="{{ $hotel->id }}">{{ $hotel->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <div class="form-floating">
                            <label for="kamar_id">Pilih Kamar</label>
                            <select class="form-select ml-3 mt-3" id="kamar_id" name="kamar_id"
                                aria-label="Floating label select example">
                                @foreach ($kamars as $kamar)
                                    @if (old('kamar_id', $reservasi->kamar_id) == $kamar->id)
                                        <option value="{{ $kamar->id }}" selected>{{ $kamar->nomor }}
                                        </option>
                                    @else
                                        <option value="{{ $kamar->id }}">{{ $kamar->nomor }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3 justify-content-center">
                        <span class="input-group-text" id="tanggal">Tanggal</span>
                        <input type="date" name="tanggal" value="{{ $reservasi->tanggal }}"
                            class="form-control col-md-6" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="flex justify-center mb-4 ml-3 d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary col-6">Create!</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>
