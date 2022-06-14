<template>
    <div>
        <Head title="Create Recipe" />
        <h1 class="mb-8 text-3xl font-lora">
            <Link class="text-indigo-300 hover:text-white" href="/dashboard/recipes">Recipes</Link>
            <span class="text-indigo-300"> /</span> Create
        </h1>
        <div class="max-w-3xl bg-slate-800 rounded-md shadow overflow-hidden">
            <form @submit.prevent="store">
                <div class="flex flex-wrap -mb-8 -mr-6 p-8">
                    <text-input v-model="form.name" :error="form.errors.name" class="pb-8 pr-6 w-full lg:w-1/2" label="Name" />
                    <text-input v-model="form.description" :error="form.errors.description" class="pb-8 pr-6 w-full lg:w-1/2" label="Description" />
                    <select-input v-model="form.time" :error="form.errors.time" class="pb-8 pr-6 w-full lg:w-1/2" label="Time">
                        <option v-for="tm in time" :key="tm.id" :value="tm.id">{{ tm.time }} {{ tm.time == 1 ? 'minute' : 'minutes' }}</option>
                    </select-input>
                    <select-input v-model="form.difficulty" :error="form.errors.difficulty" class="pb-8 pr-6 w-full lg:w-1/2" label="Difficulty">
                        <option v-for="diff in difficulty" :key="diff.id" :value="diff.id">{{ diff.difficulty }}</option>
                    </select-input>
                    <select-input v-model="form.persons" :error="form.errors.persons" class="pb-8 pr-6 w-full lg:w-1/2" label="Persons">
                        <option v-for="per in persons" :key="per.id" :value="per.id">{{ per.persons }}</option>
                    </select-input>
                    <select-input v-model="form.type" :error="form.errors.type" class="pb-8 pr-6 w-full lg:w-1/2" label="Type">
                        <option v-for="tp in type" :key="tp.id" :value="tp.id">{{ tp.type }}</option>
                    </select-input>
                    <file-input-photo v-model="form.photo" :error="form.errors.photo" class="pb-8 pr-6 w-full lg:w-1/2" type="file" accept="image/*" label="Photo" id="photo" />
                    <select-input multiple v-model="form.ingredients" :error="form.errors.ingredients" class="pb-8 pr-6 w-full lg:w-1/2" label="Ingredients" name="ingredients[]">
                        <option v-for="ingredient in ingredients" :key="ingredient.id" :value="ingredient.name">{{ ingredient.name }}</option>
                    </select-input>
                </div>
                <div class="flex items-center justify-end px-8 py-4 bg-slate-800 border-t border-gray-100 font-lora">
                    <loading-button :loading="form.processing" class="px-4 py-2 ml-auto rounded text-black bg-yellow-400 hover:bg-yellow-300 transition duration-500" type="submit">Create Recipe</loading-button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Shared/AppLayout.vue';
import TextInput from '@/Shared/TextInput.vue';
import FileInput from '@/Shared/FileInput.vue';
import FileInputPhoto from '@/Shared/FileInputPhoto.vue';
import LoadingButton from '@/Shared/LoadingButton.vue';
import SelectInput from '@/Shared/SelectInput';

export default {
    components: {
        FileInput,
        Head,
        Link,
        LoadingButton,
        TextInput,
        SelectInput,
        FileInputPhoto,
    },
    props: {
        difficulty: Array,
        persons: Array,
        type: Array,
        time: Array,
        ingredients: Array
    },
    layout: AppLayout,
    remember: 'form',
    data() {
        return {
            form: this.$inertia.form({
                name: '',
                description: '',
                time: '',
                difficulty: '',
                persons: '',
                type: '',
                photo: null,
                ingredients: ''
            }),
        }
    },
    methods: {
        store() {
            this.form.post('/dashboard/recipes')
        },
    },
}
</script>
