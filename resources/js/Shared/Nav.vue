<template>
    <nav class="">
        <ul class="flex list-disc space-x-4 list-inside">

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
                <NavLink href="/logout" :active="$page.Logout === 'Logout'">Logout</NavLink>
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
