<template>

<div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8 items-center mx-auto">
        
        <div class="sm:mx-auto sm:w-full sm:max-w-sm flex flex-col items-center">
            <Logo class="block h-9 w-auto fill-current text-gray-800" />
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">{{ title }}</h2>
        </div>
        
        <slot></slot>

    </div>
    
</template>

<script setup>

import Logo from './commons/Logo.vue';

const {title} = defineProps({
    title: String
})
</script>

<style scoped>

</style>