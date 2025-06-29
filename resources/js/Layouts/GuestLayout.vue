<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();

// current route ka name ya path lelo
const currentRoute = page.url;
</script>

<template>
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
    >
        <div>
            <Link href="/">
                <ApplicationLogo class="fill-current text-gray-500" />
            </Link>
        </div>

        <!-- <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div> -->

        <div
            :class="[
                'w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg',
                currentRoute === '/login' || currentRoute === '/register'
                    ? ''
                    : 'sm:max-w-md',
            ]"
        >
            <slot />
        </div>
    </div>
</template>
