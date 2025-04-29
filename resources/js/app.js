import './bootstrap';
import Alpine from 'alpinejs';
import { Livewire, Alpine as LivewireAlpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

// Archivo principal de JavaScript
// Aquí se pueden importar otros módulos según sea necesario

// Creamos un archivo separado para Bootstrap que solo se cargará en las páginas que lo necesiten
// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Eliminamos cualquier referencia a Bootstrap para volver a la apariencia original

// Inicializar Alpine
window.Alpine = Alpine;

// Inicializar Livewire
Livewire.start();

// Inicializar Alpine después de Livewire
Alpine.start();

