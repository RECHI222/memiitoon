import './bootstrap';
import Vue from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
new Vue({
  el: '#app',
  components: {
    ExampleComponent
  }
});