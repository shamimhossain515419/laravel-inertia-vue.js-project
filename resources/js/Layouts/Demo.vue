<script setup>

</script>

<template>
    <div class=" ">
        <header class=" bg-red-500 text-white py-3">
            <nav class="  container mx-auto">
                <div class=" flex items-center gap-2 text-xl">
                    <a href="/">Home Page</a>
                    <a href="/about">About Page</a>
                    <a href="/contact">Contact Page</a>
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
