<script setup>

import {useForm} from "@inertiajs/vue3";

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
})
const submit = () => {

    form.post(route('register'), {
        onError: () => form.reset("password", "password_confirmation")
    })
}
</script>

<template>
    <Head title="register"/>
    <div class="  w-[600px] mx-auto  mt-9">
        <form @submit.prevent="submit">
            <h1> Register a new account </h1>
            <div>
                <label for="name" class=" block text-sm">Name</label>
                <input v-model="form.name" type="text" name="name" id=""
                       class=" border border-black px-2.5 py-1  w-full block focus:border-blue-600  outline-0 rounded my-1">
                <small> {{ form.errors.name }} </small>
            </div>
            <div>
                <label for="email" class=" block text-sm">Email</label>
                <input v-model="form.email" type="email" name="email" id=""
                       class=" border border-black px-2.5 py-1  w-full block focus:border-blue-600  outline-0 rounded my-1">
                <small> {{ form.errors.email }} </small>
            </div>
            <div>
                <label for="password" class=" block text-sm">Password</label>
                <input v-model="form.password" type="password" name="password" id="password"
                       class=" border border-black px-2.5 py-1  w-full block focus:border-blue-600  outline-0 rounded my-1">
                <small> {{ form.errors.password }} </small>
            </div>
            <div>
                <label for="password" class=" block text-sm">Confirm password</label>
                <input v-model="form.password_confirmation" type="password" name="password_confirmation" id="password"
                       class=" border border-black px-2.5 py-1  w-full block focus:border-blue-600  outline-0 rounded my-1">
                <small> {{ form.errors.password_confirmation }} </small>
            </div>
            <p>

            </p>
            <div class="  mt-2">
                <button class=" bg-blue-500 px-2 disabled:bg-blue-200 py-1 text-white w-full text-center rounded "
                        :disabled="form.processing"> Submit
                </button>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
