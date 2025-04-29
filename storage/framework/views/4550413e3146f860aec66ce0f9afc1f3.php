<!-- Modal -->
<div id="welcomeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden overflow-y-auto h-full w-full flex items-center justify-center z-50">
    <div class="relative mx-auto p-8 w-full max-w-8xl shadow-2xl rounded-xl bg-white">
        <div class="text-center">
            <h3 class="text-4xl font-bold text-gray-900 mb-8">Welcome</h3>

            <!-- Planes de Gimnasio -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plan Diario -->
                <div class="bg-white p-8 rounded-xl shadow-lg border-4 border-blue-500 transform hover:scale-105 transition-transform duration-300">
                    <h4 class="text-3xl font-bold text-blue-600 mb-3">Plan Diario</h4>
                    <div class="text-6xl font-bold mb-3">$10<span class="text-2xl">/día</span></div>
                    <div class="text-center mb-4">
                        <span class="text-3xl font-bold text-blue-600">HOURS</span>
                    </div>
                    <ul class="text-left space-y-3 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base">Sin compromiso</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base">Acceso a todas las instalaciones</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-500 text-white py-4 px-8 rounded-lg hover:bg-blue-600 transition-colors duration-300 text-xl font-bold shadow-lg" onclick="window.location.href='/payment/checkout?plan=diario&price=10'">
                        Seleccionar Plan
                    </button>
                </div>

                <!-- Plan Semanal -->
                <div class="bg-white p-8 rounded-xl shadow-2xl border-4 border-blue-500 transform hover:scale-105 transition-transform duration-300 scale-105 z-10">
                    <h4 class="text-3xl font-bold text-blue-600 mb-3 mt-2">Plan Semanal</h4>
                    <div class="text-6xl font-bold mb-3">$50<span class="text-2xl">/semana</span></div>
                    <div class="text-center mb-4">
                        <span class="text-3xl font-bold text-blue-600">1 WEEK</span>
                    </div>
                    <ul class="text-left space-y-3 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base">Ahorro del 30%</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base">Plan dietético</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-500 text-white py-4 px-8 rounded-lg hover:bg-blue-600 transition-colors duration-300 text-xl font-bold shadow-lg" onclick="window.location.href='/payment/checkout?plan=semanal&price=50'">
                        Seleccionar Plan
                    </button>
                </div>

                <!-- Plan Mensual -->
                <div class="bg-white p-8 rounded-xl shadow-lg border-4 border-blue-500 transform hover:scale-105 transition-transform duration-300">
                    <h4 class="text-3xl font-bold text-blue-600 mb-3">Plan Mensual</h4>
                    <div class="text-6xl font-bold mb-3">$150<span class="text-2xl">/mes</span></div>
                    <div class="text-center mb-4">
                        <span class="text-3xl font-bold text-blue-600">1 MONTH</span>
                    </div>
                    <ul class="text-left space-y-3 mb-6">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base">Ahorro del 50%</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-base">Todos los beneficios incluidos</span>
                        </li>
                    </ul>
                    <button class="w-full bg-blue-500 text-white py-4 px-8 rounded-lg hover:bg-blue-600 transition-colors duration-300 text-xl font-bold shadow-lg" onclick="window.location.href='/payment/checkout?plan=mensual&price=150'">
                        Seleccionar Plan
                    </button>
                </div>
            </div>

            <div class="mt-8">
                <button id="closeModal" class="px-8 py-3 bg-blue-500 text-white text-lg font-medium rounded-lg shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300" onclick="closeModal()">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div> <?php /**PATH C:\bodyskin\resources\views/components/plans-modal.blade.php ENDPATH**/ ?>