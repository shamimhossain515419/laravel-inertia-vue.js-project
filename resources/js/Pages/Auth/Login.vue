<script setup>

import {useForm} from "@inertiajs/vue3";
import TextInput from "@/Pages/Components/TextInput.vue";

const form = useForm({
    email: null,
    password: null,
})
const submit = () => {

    form.post(route('login'), {
        onError: () => form.reset("password")
    })
}
</script>

<template>
    <Head title="register"/>
    <div class="  w-[600px] mx-auto  mt-9">
        <form @submit.prevent="submit">
            <h1> Login to your account </h1>
            <TextInput name="Email" v-model="form.email" :message="form.errors.email"/>

            <div>
                <label for="password" class=" block text-sm">Password</label>
                <input v-model="form.password" type="password" name="password" id="password"
                       class=" border border-black px-2.5 py-1  w-full block focus:border-blue-600  outline-0 rounded my-1">
                <small class="text-red-500 text-sm"> {{ form.errors.password }} </small>
            </div>
            <p> Need an account
                <Link :href="route('register')" class="text-blue-600">
                    Register
                </Link>
            </p>
            <div class="mt-2 relative">
                <button
                    class="bg-blue-500 px-2 disabled:bg-blue-200 py-1 text-white w-full text-center rounded flex items-center justify-center"
                    :disabled="form.processing">
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
