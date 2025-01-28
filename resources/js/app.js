import './bootstrap';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import focus from '@alpinejs/focus';
import mask from '@alpinejs/mask';
import Chart from 'chart.js/auto';

Alpine.plugin(collapse);
Alpine.plugin(focus);
Alpine.plugin(mask);

window.Alpine = Alpine;
window.Chart = Chart;

Alpine.start();
