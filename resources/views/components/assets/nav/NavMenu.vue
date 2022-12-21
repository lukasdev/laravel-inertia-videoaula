<script setup>
import Content from '../Content.vue';
</script>

<template>
    <section class="flex w-full justify-center bg-gray-600 text-white border-solid border-t-[1px] border-t-black">
        <Content class="items-center">
            <ul class="flex w-full">
                <slot />
            </ul>            
        </Content>
    </section>
</template>