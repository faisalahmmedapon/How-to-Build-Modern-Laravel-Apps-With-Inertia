<script>
//
import Nav from '../Shared/Nav.vue';
import {Link} from "@inertiajs/inertia-vue3";
export default {
    components: {Nav,Link},
    props: {time: String},
}

</script>


<template>
  <header>
    <h1 class="text-4xl font-bold">Home</h1>
  </header>

  <main>
    <Nav/>
  </main>

  <footer style="margin-top:1400px">
<p> The current time is : {{ time }}</p>
      <Link preserve-scroll href="/" class="text-blue-500  "> Refresh </Link>
  </footer>
</template>


