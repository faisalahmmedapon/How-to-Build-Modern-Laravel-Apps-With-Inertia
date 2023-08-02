<template>


    <header>
        <h1 class="text-4xl font-bold">Users</h1>
    </header>

    <main>
        <Nav/>
    </main>

    <footer style="margin-top:1400px">
        <p> The current time is : {{ time }}</p>
        <Link preserve-scroll href="/users" class="text-blue-500  "> Refresh</Link>
    </footer>
</template>
<script>
//
import Layout from '../Shared/Layout.vue';

// if i import manually elase go to app.js and edit resolve option

export default {
    layout: Layout,
    props:{
        time:String
    }
}
</script>
