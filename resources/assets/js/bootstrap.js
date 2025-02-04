import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import '../vendor/bootstrap/dist/js/bootstrap.bundle.min.js';
import './front/swiperSlider.js'
import './functions.js';
import './darkMode.js';

import.meta.glob(['../assets/images/**']);




