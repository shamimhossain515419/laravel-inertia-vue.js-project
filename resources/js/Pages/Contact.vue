<script setup>
import {Head} from "@inertiajs/vue3";

// Define props
defineProps({
    email: String,
    phone: String,
    address: String,
});
</script>

<template>
    <Head :title="'Contact Us | Shopping Gonj'"/>

    <section class="contact-page">
        <h1>Contact Us</h1>
        <p>If you have any inquiries, please reach out to us:</p>
        <ul>
            <li><strong>Email:</strong> {{ email }}</li>
            <li><strong>Phone:</strong> {{ phone }}</li>
            <li><strong>Address:</strong> {{ address }}</li>
        </ul>

        <Link class="mt-[600px] block" :href="route('contact')"  preserve-scroll> Refresh</Link>
    </section>
</template>

<style scoped>
.contact-page {
    padding: 2rem;
    color: #333;
    font-family: Arial, sans-serif;
}

h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #222;
}

ul {
    list-style-type: none;
    padding: 0;
}

ul li {
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 0.5rem;
}

strong {
    color: #0070f3;
}
</style>
