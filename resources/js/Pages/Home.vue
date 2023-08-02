<script>
//
import Layout from '../Shared/Layout.vue';

export default {
    components: {Layout},
    props: {
        username: String,
    }
}

</script>


<template>

    <Layout :username="username">
        <Nav/>
        <header>
            <h1 class="text-4xl font-bold">Home</h1>
        </header>

        <main>
            <Nav/>
        </main>


    </Layout>

</template>


