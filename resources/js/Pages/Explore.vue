<template>
    <Head title="Explore" />

    <layout>
        <template #default>
            <div class="text-center text-gray-800 p-5 md:pt-14">
                <h1 class="font-lora text-7xl font-bold mt-0 mb-6">Explore</h1>
                <h3 class="font-lora text-4xl font-bold mb-8">See what you can discover</h3>
            </div>

            <base-three-grid>
                <template #header>
                    Look at these examples
                </template>
                <template #default>
                    <base-recipe-card-explore></base-recipe-card-explore>

                    <base-recipe-card-explore color="bg-gray-100">
                        <template #image>
                            <img
                                class="lg:h-72 md:h-48 w-full object-cover object-center"
                                src="https://picsum.photos/id/425/959/635"
                                alt="blog"
                            />
                        </template>
                        <template #type>Drinks • Easy</template>
                        <template #recipe>Creative Coffee</template>
                        <template #time>10 minutes</template>

                        <template #ing>2 Ingredients</template>
                        <template #people>1 Person</template>

                        <template #user-img>
                            <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://picsum.photos/id/433/4752/3168)"></div>
                        </template>
                        <template #user>Fernando Domingo</template>
                    </base-recipe-card-explore>

                    <base-recipe-card-explore>
                        <template #image>
                            <img
                                class="lg:h-72 md:h-48 w-full object-cover object-center"
                                src="https://picsum.photos/id/488/1772/1181"
                                alt="blog"
                            />
                        </template>
                        <template #type>Fast Food • Medium</template>
                        <template #recipe>Vegetarian Bowl</template>
                        <template #time>15 minutes</template>

                        <template #ing>5 Ingredients</template>
                        <template #people>2 Persons</template>

                        <template #user-img>
                            <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://picsum.photos/id/447/1280/853)"></div>
                        </template>
                        <template #user>Carlos Fuentes</template>
                    </base-recipe-card-explore>
                </template>
            </base-three-grid>
        </template>
    </layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import BaseThreeGrid from "@/Shared/BaseThreeGrid";
import BaseRecipeCardExplore from "@/Shared/BaseRecipeCardExplore";
import Layout from "@/Shared/Layout";

export default defineComponent({
    components: {
        Head,
        Link,
        BaseThreeGrid,
        BaseRecipeCardExplore,
        Layout,
    },
});
</script>

<style></style>
