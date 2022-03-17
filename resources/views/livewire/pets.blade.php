<div>
    <div class="w-full flex flex-wrap">

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0">
        </div>

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">
            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <p class="text-4xl"><b>Mascota</b></p>
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">

                <form class="w-full max-w-lg">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="Nombre" value="{{ __('Nombre*') }}" />
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-200 focus:border-indigo-200 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="TipoAnimal" value="{{ __('Tipo Animal*') }}" />
                            <select
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-200 focus:border-indigo-200 sm:text-sm"
                                wire:model=selectedSpecie>
                                @foreach ($species as $specie)
                                    <option value="{{ $specie->id }}">{{ $specie->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        @if (!is_null($races))
                            <div class="col-span-6 sm:col-span-3">
                                <x-jet-label for="Raza" value="{{ __('Raza*') }}" />
                                <select
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-200 focus:border-indigo-200 sm:text-sm"
                                    wire:model=selectedRace>
                                    @foreach ($races as $race)
                                        <option value="{{ $race->id }}">{{ $race->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="FechaNacimiento" value="{{ __('Fecha Nacimiento*') }}" />
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                class="mt-1 focus:ring-indigo-200 focus:border-indigo-200 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-jet-label for="NombreHumano" value="{{ __('Nombre Humano*') }}" />
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                class="mt-1 focus:ring-indigo-200 focus:border-indigo-200 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6">
                            <x-jet-label for="Descripción" value="{{ __('Descripción*') }}" />
                            <textarea class="form-control w-full" rows="6">
                            </textarea>
                        </div>
                    </div>
                    <div class="py-3">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-200">
                            Guardar
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-200">
                            Cancelar
                        </button>
                    </div>
            </div>


            </form>


        </div>

    </div>


</div>
</div>
