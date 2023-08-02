<template>
    <Head title="{ title }"/>

    <header>
        <h1 class="text-4xl font-bold">Users</h1>
    </header>

    <main>
        <Nav/>

        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr class="hover:bg-gray-50" v-for="user in users.data" :key="user.id">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        <div class="text-sm">
                            <div class="font-medium text-gray-700">{{user.name}}</div>
                            <div class="text-gray-400">{{user.email}}</div>
                        </div>
                    </th>
                    <td class="px-6 py-4">
<!--                        <Link  :href="'/users/' + user.id + '/edit'"> Edit</Link>-->
                        <Link  :href="`/users/${user.id}/edit`"> Edit</Link>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

<!--        <ul>-->
<!--            <li v-for="user in users" :key="user.id" v-text="user.name"/>-->
<!--        </ul>-->

<!--paginator-->

<Pagination :links="users.links"/>

    </main>

    <footer style="margin-top:1400px">
        <p> The current time is : {{ time }}</p>
        <Link preserve-scroll href="/users" class="text-blue-500  "> Refresh</Link>
    </footer>
</template>


<script>

import {Head} from "@inertiajs/inertia-vue3"
import Layout from '../Shared/Layout.vue';
import Pagination from "../Shared/Pagination.vue";

export default {
    components: {Pagination},
    layout: Layout,
    props: {
        title: String,
        users: Object,
    },
    mounted() {
        document.title = this.title;
    },
};
</script>
