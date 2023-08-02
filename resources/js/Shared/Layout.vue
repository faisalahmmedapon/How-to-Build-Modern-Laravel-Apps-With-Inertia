<template>
    <section class="p-6 bg-gray-200">
        <header class="flex justify-between">
            <div class=" flex items-center">
                <h3 class="font-bold- text-lg">My App</h3>
                <p class="text-sm ml-4"> Welcome Back : {{ username }}</p>
            </div>
            <Nav/>
        </header>
    </section>
    <section class="p-6">
        <div class="max-w-3xl mx-auto">

            <iframe class="mb-6" width="560" height="315" src="https://www.youtube.com/embed/k_QdEJB1zRQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

            <slot/>
        </div>
    </section>
</template>

<script>
import Nav from "./Nav.vue";

export default {
    components: {Nav},
    computed: {
        username() {
            return this.$page.props.auth.user.username
        }
    }
}
</script>
