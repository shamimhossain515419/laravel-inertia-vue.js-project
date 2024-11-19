<script setup>
import { usePage } from '@inertiajs/vue3';

const page = usePage();
</script>

<template>
    <div>
        <header class="bg-blue-500 text-white py-3">
            <nav class="container mx-auto flex justify-between items-center gap-2 px-4">
                <!-- Navigation Links -->
                <div class="flex items-center gap-2 text-xl">
                    <Link :href="route('home')">Home Page</Link>
                    <Link :href="route('about')">About Page</Link>
                    <Link :href="route('contact')">Contact Page</Link>
                </div>
                <!-- Authentication Links -->
                <div>
                    <template v-if="page.props.auth.user">
                        <Link :href="route('register')">Logout  {{page.props.auth.user.name}} </Link>
                    </template>
                    <template v-else>
                        <Link :href="route('register')">Sign Up/Sign In</Link>
                    </template>
                </div>
            </nav>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>

<style scoped>
/* Add styles here if needed */
</style>
