<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['userDetails']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['userDetails']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Sección de Informe -->
        <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">INFORME</h3>
            
            <!-- Estadísticas -->
            <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600"><?php echo e($userDetails->ejercicios ?? 0); ?></div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">ejercicios</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600"><?php echo e($userDetails->kcal ?? 0); ?></div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">kcal</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600"><?php echo e($userDetails->minutos ?? 0); ?></div>
                    <div class="text-sm text-gray-600 dark:text-gray-400">Minutos</div>
                </div>
            </div>

            <!-- Historial -->
            <div class="mb-6">
                <h4 class="text-lg font-semibold mb-4 text-gray-900 dark:text-white">Historial</h4>
                <div class="grid grid-cols-7 gap-2">
                    <?php for($i = 0; $i < 7; $i++): ?>
                        <div class="aspect-square rounded-lg <?php echo e($i == 4 ? 'bg-blue-500 text-white' : 'bg-gray-200 dark:bg-gray-600'); ?> flex items-center justify-center text-sm">
                            <?php echo e($i + 1); ?>

                        </div>
                    <?php endfor; ?>
                </div>
                <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                    <span class="inline-block w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                    Días de racha
                </div>
            </div>

            <!-- Seguimiento de Peso -->
            <div>
                <div class="flex justify-between items-center mb-4">
                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Peso</h4>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg text-sm">Registrar</button>
                </div>
                
                <div class="bg-white dark:bg-gray-600 p-4 rounded-lg">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm text-gray-600 dark:text-gray-400">Actual</span>
                        <span class="text-lg font-bold"><?php echo e($userDetails->peso ?? '0'); ?> kg</span>
                    </div>
                    
                    <!-- Gráfico simplificado de peso -->
                    <div class="h-24 relative">
                        <div class="absolute inset-0 flex items-end">
                            <div class="w-full bg-blue-100 dark:bg-blue-900 rounded-lg overflow-hidden">
                                <div class="h-1/2 bg-blue-500 rounded-lg"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between mt-2">
                        <div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Peso meta</div>
                            <div class="font-bold"><?php echo e($userDetails->peso_meta ?? '0'); ?> kg</div>
                        </div>
                        <div>
                            <div class="text-sm text-gray-600 dark:text-gray-400">Peso inicial</div>
                            <div class="font-bold"><?php echo e($userDetails->peso_inicial ?? '0'); ?> kg</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Estado de Salud -->
        <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
            <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Estado de Salud</h3>
            
            <?php
                $peso = floatval($userDetails->peso ?? 0);
                $peso_meta = floatval($userDetails->peso_meta ?? 0);
                $altura = floatval($userDetails->talla ?? 0) / 100; // convertir cm a m
                $imc = $altura > 0 ? $peso / ($altura * $altura) : 0;
                
                $estadoSalud = match(true) {
                    $imc < 18.5 => ['estado' => 'Bajo peso', 'color' => 'yellow'],
                    $imc < 25 => ['estado' => 'Peso normal', 'color' => 'green'],
                    $imc < 30 => ['estado' => 'Sobrepeso', 'color' => 'yellow'],
                    default => ['estado' => 'Obesidad', 'color' => 'red'],
                };

                // Calculate weight difference
                $diferencia_peso = $peso - $peso_meta;
                $necesita_ganar = $diferencia_peso < 0;
                $necesita_perder = $diferencia_peso > 0;
            ?>

            <div class="mb-6">
                <div class="text-lg font-semibold mb-2">IMC (Índice de Masa Corporal)</div>
                <div class="text-3xl font-bold text-<?php echo e($estadoSalud['color']); ?>-500"><?php echo e(number_format($imc, 1)); ?></div>
                <div class="text-lg text-<?php echo e($estadoSalud['color']); ?>-500"><?php echo e($estadoSalud['estado']); ?></div>
            </div>

            <!-- Recomendaciones -->
            <div class="space-y-4">
                <h4 class="text-lg font-semibold">Recomendaciones</h4>
                <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-400">
                    <?php if($necesita_ganar): ?>
                        <li>Aumenta tu ingesta calórica de manera saludable (necesitas ganar <?php echo e(abs(number_format($diferencia_peso, 1))); ?> kg)</li>
                        <li>Incluye más proteínas y carbohidratos complejos en tu dieta</li>
                        <li>Realiza ejercicios de fuerza para ganar masa muscular</li>
                        <li>Considera consumir 5-6 comidas pequeñas al día</li>
                        <li>Incluye batidos proteicos y snacks saludables entre comidas</li>
                    <?php elseif($necesita_perder): ?>
                        <li>Reduce tu ingesta calórica de manera gradual (necesitas perder <?php echo e(number_format($diferencia_peso, 1)); ?> kg)</li>
                        <li>Aumenta el consumo de vegetales y proteínas magras</li>
                        <li>Combina ejercicio cardiovascular con entrenamiento de fuerza</li>
                        <li>Limita el consumo de azúcares y grasas saturadas</li>
                        <li>Mantén un registro de tu ingesta calórica diaria</li>
                    <?php else: ?>
                        <li>¡Felicitaciones! Estás en tu peso objetivo</li>
                        <li>Mantén tu rutina actual de ejercicios</li>
                        <li>Continúa con una dieta balanceada</li>
                        <li>Realiza chequeos regulares de salud</li>
                        <li>Considera establecer nuevos objetivos de acondicionamiento físico</li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Próxima Meta -->
            <div class="mt-6">
                <h4 class="text-lg font-semibold mb-2">Próxima Meta</h4>
                <div class="bg-white dark:bg-gray-600 p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <span>Progreso hacia peso ideal</span>
                        <span class="font-bold">75%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mt-2">
                        <div class="bg-blue-500 h-2.5 rounded-full" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <?php /**PATH C:\bodyskin\resources\views/components/health-report.blade.php ENDPATH**/ ?>