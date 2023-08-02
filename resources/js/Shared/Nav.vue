<template>
    <nav class="">
        <ul class="flex space-x-6">

            <!--dynamic navber-->

            <li>
                <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
            </li>
            <li>
                <NavLink href="/about" :active="$page.component === 'About' ">About</NavLink>
            </li>
            <li>
                <NavLink href="/contact" :active="$page.component === 'Contact'">Contact
                </NavLink>
            </li>
            <li>
                <NavLink href="/service" :active="$page.component === 'Service'">Service
                </NavLink>
            </li>
            <li>
                <NavLink href="/blog" :active="$page.component === 'Blog'">Blog</NavLink>
            </li>
            <li>
                <NavLink href="/users" :active="$page.component === 'Users'">Users</NavLink>
            </li>

            <li>
                <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
            </li>
            <li>
                <NavLink href="/logout" method="post" :data="{ foo: 'bar' }" :active="$page.Logout === 'Logout'">Logout</NavLink>
            </li>

            <!--            in page navber-->

            <!--            <li>-->
            <!--                <Link class="text-blue-500 hover:underline" href="/" :class="{'font-bold underline': $page.url === '/' }">Home</Link>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <Link class="text-blue-500 hover:underline" href="/about" :class="{'font-bold underline': $page.url === '/about' }">About</Link>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <Link class="text-blue-500 hover:underline" href="/contact" :class="{'font-bold underline': $page.url === '/contact'}">Contact</Link>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <Link class="text-blue-500 hover:underline" href="/service" :class="{'font-bold underline': $page.component === 'Service'}">Service</Link>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <Link class="text-blue-500 hover:underline" href="/blog?foo=bar&baz=buz" :class="{'font-bold underline': $page.url.startsWith('/blog')}">Blog</Link>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <Link class="text-blue-500 hover:underline" href="/logout" method="post" :data="{ foo: 'bar' }"-->
            <!--                      as="button" :class="{'font-bold underline': $page.url === '/logout'}">Logout-->
            <!--                </Link>-->
            <!--            </li>-->
        </ul>
    </nav>
</template>

<script>
// import {Link} from '@inertiajs/inertia-vue3';
import NavLink from "./NavLink.vue";

export default {
    components: {NavLink},
}
</script>
