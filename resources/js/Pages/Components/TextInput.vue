<script setup>

defineProps({
    name: {
        type: String,
        required: true
    },
    type: {
        type: String,
        default: 'text'
    },
    message: String
})
</script>

<template>
<!--    <div class=" mb-6">-->
<!--        <label for="name" class=" block text-sm">Name</label>-->
<!--        <input v-model="name" :type="type" name="name" id=""-->
<!--               class=" border border-black px-2.5 py-1  w-full block focus:border-blue-600  outline-0 rounded my-1">-->
<!--        <small class=" text-sm text-red-500" v-if="message"> {{ message }} </small>-->

<!--    </div>-->
</template>

<style scoped>

</style>
