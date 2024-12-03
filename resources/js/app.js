import { createApp } from 'vue';
import App from './App.vue'; // Archivo raíz de Vue
import router from './router'; // Archivo de configuración de rutas

const app = createApp(App);

app.use(router);
app.mount('#app');
