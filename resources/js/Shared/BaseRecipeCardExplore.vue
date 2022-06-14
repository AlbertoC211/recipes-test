<template>
    <Link :href="`/explore`" class="p-4 sm:w-1/2 lg:w-1/3 transition hover:-translate-y-2 duration cursor-pointer">
        <div class="h-full border border-gray-200 rounded-lg overflow-hidden shadow-md">
            <slot name="image">
                <img
                    class="lg:h-72 md:h-48 w-full object-cover object-center"
                    src="https://picsum.photos/id/326/4928/3264"
                    alt="blog"
                />
            </slot>

            <div class="bg-white p-6">
                <p class="tracking-wide font-bold font-monse text-gray-700">
                    <slot name="type">Fruits • Easy</slot>
                </p>
                <p class="text-3xl font-lora text-gray-900 my-1">
                    <slot name="recipe">Awesome Tea</slot>
                </p>
                <p class="text-gray-700 font-monse">
                    <slot name="time">30 minutes</slot>
                </p>
            </div>

            <div class="flex bg-white p-4 border-t border-gray-300 text-gray-700">
                <div class="flex-1 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                    <p><span class="text-gray-900 font-monse"><slot name="ing">3 Ingredients</slot></span></p>
                </div>
                <div class="flex-1 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    <p><span class="text-gray-900 font-monse"><slot name="people">2 Persons</slot></span></p>
                </div>
            </div>

            <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-200">
                <div class="text-xs uppercase font-monse text-gray-600 tracking-wide">
                    Creator
                </div>
                <div class="flex items-center pt-2">
                    <slot name="user-img">
                        <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://picsum.photos/id/1027/2848/4272)"></div>
                    </slot>
                    <div>
                        <p class="font-lora text-gray-900">
                            <slot name="user">Paco Barbero</slot>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </Link>
</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    components: {
        Link
    },
    props: {
        recipeId: Number
    }
});
</script>

<style></style>
