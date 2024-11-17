<script setup>
import {Link, Head} from "@inertiajs/vue3"
</script>

<template>

    <div class=" ">
        <header class=" bg-blue-500 text-white py-3">
            <nav class="  container mx-auto">
                <div class=" flex items-center gap-2 text-xl">
                    <Link href="/">Home Page</Link>
                    <Link href="/about">About Page</Link>
                    <Link href="/contact">Contact Page</Link>
                </div>
            </nav>
        </header>
        <main>
            <slot/>
        </main>
    </div>
</template>

<style scoped>

</style>
