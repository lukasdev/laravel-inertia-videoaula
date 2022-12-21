<script setup>
import {Link} from '@inertiajs/inertia-vue3';

defineProps({
    path: {
        type: String,
        default: undefined
    },
    isDisabled: {
        type: Boolean,
        default: false
    }
})
</script>

<template>
    <button 
        v-if="!path" 
        :disabled="isDisabled"
        class="py-2 px-4 text-white bg-[#42b883] hover:bg-[#4ad695] rounded-md disabled:bg-slate-400">
        <slot />
    </button>

    <Link v-if="path" :href="path" class="py-2 px-4 text-white bg-[#42b883] hover:bg-[#4ad695] rounded-md">
        <slot />
    </Link>
</template>