<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <Link class="text-blue-500 hover:underline" href="/" :class="{'font-bold underline': $page.url === '/' }">Home</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/about" :class="{'font-bold underline': $page.url === '/about' }">About</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/contact" :class="{'font-bold underline': $page.url === '/contact'}">Contact</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/service" :class="{'font-bold underline': $page.component === 'Service'}">Service</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/blog?foo=bar&baz=buz" :class="{'font-bold underline': $page.url.startsWith('/blog')}">Blog</Link>
            </li>
            <li>
                <Link class="text-blue-500 hover:underline" href="/logout" method="post" :data="{ foo: 'bar' }"
                      as="button" :class="{'font-bold underline': $page.url === '/logout'}">Logout
                </Link>
            </li>
        </ul>
    </nav>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    components: {Link},
}
</script>
