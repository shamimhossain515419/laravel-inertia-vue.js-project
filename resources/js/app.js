import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import '../css/app.css'; // Import your CSS
import Layout from '@/Layouts/Layout.vue'; // Global Layout
// Create Inertia App
createInertiaApp({
    title: (title) => `My App - ${title}`, // Page titles formatted as "My App - Page Title"
    resolve: (name) => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true }); // Import all pages
        const page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || Layout; // Assign Layout if not specified
        return page;
    },
    setup({ el, App, props, plugin }) {
        // Create the Vue app
        createApp({ render: () => h(App, props) })
            .use(plugin) // Use Inertia plugin
            .component('Head', Head) // Register Inertia components globally
            .component('Link', Link)
            .mount(el); // Mount the app
    },
    progress: {
        color: 'red', // Progress bar color
        includeCSS: true, // Use default NProgress styles
        showSpinner: false, // Disable the spinner
    },
});
