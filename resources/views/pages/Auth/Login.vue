<script setup>
import {useForm} from '@inertiajs/inertia-vue3';
import DefaultButton from '../../components/assets/DefaultButton.vue';
import BaseInput from '../../components/assets/Form/BaseInput.vue';


const form = useForm({
    email: undefined,
    password: undefined
});

function login() {
    form.post('/auth/login');
}
</script>

<template>
    <section class="flex justify-center w-full">
        <section class="flex flex-wrap w-[400px] p-3">
            <pre class="text-slate-700">
                {{ form }}
            </pre>

            <div 
                v-if="Object.entries(form.errors).length > 0" 
                class="p-3 bg-red-200 text-red-500">
                {{ Object.values(form.errors)[0] }}
            </div>
            <form class="w-full" @submit.prevent="login">
                <BaseInput 
                    type="email"
                    label="Email" 
                    v-model="form.email"
                />

                <BaseInput
                    type="password" 
                    maxlength="5"
                    label="Senha" 
                    v-model="form.password"
                />


                <DefaultButton :isDisabled="form.processing">Entrar</DefaultButton>
            </form>
        </section>
    </section>
    
</template>