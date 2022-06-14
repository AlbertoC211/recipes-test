<template>
    <Head title="Contact Message" />

    <layout>
        <template #default>
            <div class="text-center text-gray-800 bg-gray-50 p-10 md:py-14">
                <div class="text-center text-gray-800 bg-green-50"><h1 class="font-lora text-7xl font-bold mt-0 mb-6">Your message has been sent</h1>
                <h3 class="font-lora text-4xl font-bold mb-8">Continue exploring the web!</h3>
                </div>
                <Link
                    :href="route('home')"
                    class="inline-block px-6 py-2.5 bg-yellow-400 hover:bg-yellow-300 font-bold uppercase rounded shadow-md hover:shadow-lg active:shadow-lg transition duration-500"
                >Back Home</Link
                >
            </div>

            <the-services></the-services>
        </template>
    </layout>
</template>

<style>
</style>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Layout from "@/Shared/Layout";
import TheServices from '@/Shared/TheServices';

export default defineComponent({
    components: {
        Head,
        Link,
        Layout,
        TheServices
    },
})
</script>
