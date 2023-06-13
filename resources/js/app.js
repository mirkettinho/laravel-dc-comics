import './bootstrap';

// FONTAWESOME
import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';

// Importiamo il nostro stile custom
import '~resources/scss/app.scss';

// Importiamo la parte JS di Bootstrap
import * as bootstrap from 'bootstrap';

// Istruiamo Vite e Blade affinchè processino correttamente i nostri assets
import.meta.glob([
    '../img/**'
]);
