<script setup>

import Demo from "@/Layouts/Demo.vue";

defineOptions({ layout: Demo })
</script>

<template>
    <!-- Navbar -->
    <header class="bg-gray-900 text-white py-6 shadow-md">
        <nav class="container mx-auto flex justify-between items-center">
            <div class="text-2xl font-bold">
                <a href="#">Loredaop</a>
            </div>
            <ul class="flex gap-6">
                <li><a href="#home" class="hover:text-blue-400">Home</a></li>
                <li><a href="#about" class="hover:text-blue-400">About</a></li>
                <li><a href="#projects" class="hover:text-blue-400">Projects</a></li>
                <li><a href="#contact" class="hover:text-blue-400">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-blue-900 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Hi, I'm Loredaop</h1>
            <p class="text-lg md:text-2xl mb-8">A passionate web developer & designer</p>
            <a href="#contact" class="bg-yellow-400 text-black px-6 py-3 rounded-full text-lg">Contact Me</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6">About Me</h2>
            <p class="text-lg md:text-xl max-w-4xl mx-auto text-gray-700">I am a web developer with a focus on building
                beautiful, responsive websites and web applications. My skills include HTML, CSS, JavaScript, and React,
                among others. I enjoy solving problems and creating seamless user experiences.</p>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6">My Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <!-- Project 1 -->
                <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400" alt="Project 1" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Project Title 1</h3>
                        <p class="text-gray-300">A description of the project goes here. It's a brief overview of what
                            the project is about and the technologies used.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400" alt="Project 2" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Project Title 2</h3>
                        <p class="text-gray-300">A description of the project goes here. It's a brief overview of what
                            the project is about and the technologies used.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/400" alt="Project 3" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-4">Project Title 3</h3>
                        <p class="text-gray-300">A description of the project goes here. It's a brief overview of what
                            the project is about and the technologies used A description of the project goes here. It's
                            a brief overview of what the project is about and the technologies usedA description of the
                            project goes here. It's a brief overview of what the project is about and the technologies
                            usedA description of the project goes here. It's a brief overview of what the project is
                            about and the technologies usedA description of the project goes here. It's a brief overview
                            of what the project is about and the technologies used.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-blue-900 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold mb-6">Get in Touch</h2>
            <p class="text-lg mb-8">I'd love to hear from you! Whether it's a new project or just a friendly hello, feel
                free to reach out.</p>
            <a href="mailto:loredaop@example.com" class="bg-yellow-400 text-black px-6 py-3 rounded-full text-lg">Email
                Me</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-6 text-center">
        <p>&copy; 2024 Loredaop. All rights reserved.</p>
    </footer>

</template>

<style scoped></style>
