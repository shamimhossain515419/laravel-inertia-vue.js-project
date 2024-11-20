<script setup>
import {useForm} from "@inertiajs/vue3";
import TextInput from "@/Pages/Components/TextInput.vue";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    avatar: null,
    avatar_profile: "https://i.ibb.co/PxnhyF0/istockphoto-1495088043-612x612.jpg", // Default avatar image
});

const onchange = (e) => {
    const file = e.target.files?.[0];
    if (file) {
        form.avatar = file;
        const reader = new FileReader();
        reader.onload = (event) => {
            form.avatar_profile = event.target.result; // Update profile preview
        };
        reader.readAsDataURL(file);
    }
};

const submit = () => {
    form.post(route("register"), {
        onError: () => form.reset("password", "password_confirmation"),
    });
};
</script>


<template>
    <Head title="register"/>
    <div class="w-[600px] mx-auto mt-9">
        <form @submit.prevent="submit">
            <h1 class="text-5xl text-center font-black my-8">Register a new account</h1>
            <div class="mb-4">
                <label class="block text-sm" for="avatar">Avatar</label>
                <!-- Preview Image -->
                <img
                    :src="form.avatar_profile"
                    class="w-[50px] h-[50px] border border-gray-600 rounded-full object-cover my-2"
                    alt="Avatar Preview"
                />
                <!-- File Input -->
                <input
                    class="my-1"
                    type="file"
                    id="avatar"
                    accept="image/*"
                    @input="onchange"
                />
                <small class="text-red-500 text-sm block">{{ form.errors.avatar }}</small>
            </div>

            <TextInput name="Your name" v-model="form.name" :message="form.errors.name"/>
            <TextInput name="Email" v-model="form.email" :message="form.errors.email"/>

            <div>
                <label for="password" class="block text-sm">Password</label>
                <input
                    v-model="form.password"
                    type="password"
                    name="password"
                    id="password"
                    class="border border-black px-2.5 py-1 w-full block focus:border-blue-600 outline-0 rounded my-1"
                />
                <small class="text-red-500 text-sm">{{ form.errors.password }}</small>
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm">Confirm password</label>
                <input
                    v-model="form.password_confirmation"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="border border-black px-2.5 py-1 w-full block focus:border-blue-600 outline-0 rounded my-1"
                />
                <small class="text-red-500 text-sm">{{ form.errors.password_confirmation }}</small>
            </div>

            <p>
                Already have an account?
                <Link :href="route('login')" class="text-blue-600">Login</Link>
            </p>

            <div class="mt-2 relative">
                <button
                    class="bg-blue-500 px-2 disabled:bg-blue-200 py-1 text-white w-full text-center rounded flex items-center justify-center"
                    :disabled="form.processing"
                >
                    <span v-if="form.processing" class="loader mr-2"></span>
                    Submit
                </button>
            </div>
        </form>
    </div>
</template>


<style>
/* Spinner Styles */
.loader {
    border: 2px solid #f3f3f3;
    border-top: 2px solid #3498db;
    border-radius: 50%;
    width: 16px;
    height: 16px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
