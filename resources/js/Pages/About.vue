<script>
  //
  import Layout from '../Shared/Layout.vue';
  import {Link} from "@inertiajs/inertia-vue3";
  export default {
      components: {Layout,Link},
      props: {time: String},
  }
</script>

<template>

    <Layout>

        <header>
            <h1 class="text-4xl font-bold">About</h1>
        </header>

        <main>
            <Nav/>
        </main>

        <footer style="margin-top:1400px">
            <p> The current time is : {{ time }}</p>
            <Link preserve-scroll href="/about" class="text-blue-500  "> Refresh </Link>
        </footer>
    </Layout>
</template>
