<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PANEL DE CONTROL') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Mensajes de sesión -->
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-bold mb-4">Información Personal</h3>
                    <ul class="list-disc pl-5 space-y-2">
                        <li><strong>Nombre Completo:</strong> {{ auth()->user()->name }}</li>
                        <li><strong>Correo Electrónico:</strong> {{ auth()->user()->email }}</li>
                    </ul>

                    <!-- Botón Plan -->
                    <div class="mt-4">
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="openModal()">
                            Plan
                        </button>
                    </div>

                    <!-- Modal de Planes -->
                    @include('components.plans-modal')

                    <!-- Formulario para añadir datos -->
                    @if(!$userDetails->count())
                    <form method="POST" action="{{ route('user_details.store') }}" class="mt-8">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="nombre_completo" :value="__('Nombre Completo')" />
                                <x-text-input id="nombre_completo" name="nombre_completo" type="text" class="block mt-1 w-full" required />
                            </div>
                            <div>
                                <x-input-label for="edad" :value="__('Edad')" />
                                <x-text-input id="edad" name="edad" type="number" class="block mt-1 w-full" required />
                            </div>
                            <div>
                                <x-input-label for="peso" :value="__('Peso (kg)')" />
                                <x-text-input id="peso" name="peso" type="number" step="0.1" class="block mt-1 w-full" required />
                            </div>
                            <div>
                                <x-input-label for="talla" :value="__('Talla (cm)')" />
                                <x-text-input id="talla" name="talla" type="number" step="0.1" class="block mt-1 w-full" required />
                            </div>
                            <div>
                                <x-input-label for="membresia" :value="__('Membresía')" />
                                <x-text-input id="membresia" name="membresia" type="text" class="block mt-1 w-full" required />
                            </div>
                            <div>
                                <x-input-label for="peso_meta" :value="__('Meta de Peso (kg)')" />
                                <x-text-input id="peso_meta" name="peso_meta" type="number" step="0.1" class="block mt-1 w-full" />
                            </div>
                        </div>
                        <div class="flex justify-end mt-4">
                            <x-primary-button>
                                {{ __('Guardar Datos') }}
                            </x-primary-button>
                        </div>
                    </form>
                    @else
                    <!-- Informe de Salud -->
                    <div class="mt-8">
                        <x-health-report :userDetails="$userDetails->first()" />
                    </div>

                    <!-- Botón para mostrar el formulario de edición -->
                    <div class="mt-4">
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="document.getElementById('edit-section').classList.toggle('hidden')">
                            Editar Datos
                        </button>
                    </div>

                    <!-- Sección para modificar datos -->
                    <div id="edit-section" class="hidden mt-8">
                        <h3 class="text-lg font-bold mb-4">Modificar Datos</h3>
                        <form method="POST" action="{{ route('user_details.update', $userDetails->first()->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <x-input-label for="nombre_completo_edit" :value="__('Nombre Completo')" />
                                    <x-text-input id="nombre_completo_edit" name="nombre_completo" type="text" class="block mt-1 w-full" value="{{ $userDetails->first()->nombre_completo }}" required />
                                </div>
                                <div>
                                    <x-input-label for="edad_edit" :value="__('Edad')" />
                                    <x-text-input id="edad_edit" name="edad" type="number" class="block mt-1 w-full" value="{{ $userDetails->first()->edad }}" required />
                                </div>
                                <div>
                                    <x-input-label for="peso_edit" :value="__('Peso (kg)')" />
                                    <x-text-input id="peso_edit" name="peso" type="number" step="0.1" class="block mt-1 w-full" value="{{ $userDetails->first()->peso }}" required />
                                </div>
                                <div>
                                    <x-input-label for="talla_edit" :value="__('Talla (cm)')" />
                                    <x-text-input id="talla_edit" name="talla" type="number" step="0.1" class="block mt-1 w-full" value="{{ $userDetails->first()->talla }}" required />
                                </div>
                                <div>
                                    <x-input-label for="membresia_edit" :value="__('Membresía')" />
                                    <x-text-input id="membresia_edit" name="membresia" type="text" class="block mt-1 w-full" value="{{ $userDetails->first()->membresia }}" required />
                                </div>
                                <div>
                                    <x-input-label for="peso_inicial_edit" :value="__('Peso Inicial (kg)')" />
                                    <x-text-input id="peso_inicial_edit" name="peso_inicial" type="number" step="0.1" class="block mt-1 w-full" value="{{ $userDetails->first()->peso_inicial }}" required />
                                </div>
                                <div>
                                    <x-input-label for="peso_meta_edit" :value="__('Meta de Peso (kg)')" />
                                    <x-text-input id="peso_meta_edit" name="peso_meta" type="number" step="0.1" class="block mt-1 w-full" value="{{ $userDetails->first()->peso_meta }}" required />
                                </div>
                            </div>
                            <div class="flex justify-end mt-4">
                                <x-primary-button>
                                    {{ __('Actualizar') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById('welcomeModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('welcomeModal').classList.add('hidden');
        }

        // Cerrar el modal si se hace clic fuera de él
        document.getElementById('welcomeModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</x-app-layout>
