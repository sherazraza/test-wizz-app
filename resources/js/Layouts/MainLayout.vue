<template>
    <div class="homepage">
        <HeaderComponent />
        <!-- <main> -->
        <slot />
        <!-- </main> -->
        <FooterComponent />
    </div>
</template>
<script>
import HeaderComponent from "./partials/Header.vue";
import FooterComponent from "./partials/Footer.vue";
export default {
    name: "MainLayout",
    components: {
        HeaderComponent, // ✅ Register here
        FooterComponent,
    },
};
</script>
