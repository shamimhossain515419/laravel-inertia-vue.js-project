<script setup>

</script>

<template>
    <div class=" ">
        <header class=" bg-red-500 text-white py-3">
            <nav class="  container mx-auto flex justify-between  items-center gap-2 px-4">
                <div class=" flex items-center gap-2 text-xl">
                    <Link :href="route('home')">Home Page</Link>
                    <Link :href="route('about')">About Page</Link>
                    <Link :href="route('contact')">Contact Page</Link>
                    <Link :href="route('dashboard')">Dashboard</Link>

                </div>
                <div>
                    <Link :href="route('register')">Sign/signup</Link>
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
