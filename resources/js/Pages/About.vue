<template>
    <Head title="{ title }" />
    <Nav/>
    <header>
        <h1 class="text-4xl font-bold">About</h1>
    </header>

    <main>
        <Nav/>
    </main>


</template>


<script>

import {Head} from "@inertiajs/inertia-vue3"
import Layout from '../Shared/Layout.vue';

export default {
    layout: Layout,
    props: {
        title: String,
    },
    mounted() {
        document.title = this.title;
    },
}
</script>
