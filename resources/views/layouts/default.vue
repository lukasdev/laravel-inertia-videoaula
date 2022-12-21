<script setup lang="ts">
import Content from '../components/assets/Content.vue';
import DefaultButton from '../components/assets/DefaultButton.vue';
import NavMenu from '../components/assets/nav/NavMenu.vue';
import NavItem from '../components/assets/nav/NavItem.vue';
</script>

<template>
	<header class="flex w-full flex-wrap">
        <section class="flex w-full justify-center bg-[#101010] p-4 text-white">
            <Content class="justify-between items-center">
                <div class="logo">
                    MeuBlog
                </div>

                <div>
                    <DefaultButton path="/auth/login">Login</DefaultButton>
                </div>
            </Content>
        </section>

        <NavMenu>
            <NavItem path="/">Home</NavItem>
            <NavItem>Sobre</NavItem>
            <NavItem path="/news">Noticias</NavItem>
            <NavItem path="/contact">Contato</NavItem>
        </NavMenu>   
    </header>
    <section class="flex flex-wrap justify-center w-full py-4 bg-[#ebebeb]">
        <Content>
            <slot />
        </Content>
    </section>
</template>


<style scoped>
.logo {
    @apply text-white text-xl font-bold;
    background-image: linear-gradient(to right, #52eaa3, rgb(14 116 144));
    background-clip:text;
    -webkit-text-fill-color:transparent;
}
</style>