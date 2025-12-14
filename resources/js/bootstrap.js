import axios from 'axios';
window.axios = axios;
import Echo from "laravel-echo";
import { ReverbConnector } from "laravel-reverb";

window.Echo = new Echo({
    broadcaster: ReverbConnector,
    wsHost: window.location.hostname,
    wsPort: 8080,
    forceTLS: false,
});

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

import './echo';
