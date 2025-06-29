<template>
    <div class="position-relative bg-white d-flex p-0">
        <SidebarComponent />
        <div class="content">
            <HeaderComponent />
            <!-- <main> -->
            <slot />
        </div>
        <!-- </main> -->
    </div>
</template>
<script>
import HeaderComponent from "./partials/Header.vue";
import SidebarComponent from "./partials/Sidebar.vue";
export default {
    name: "MainLayout",
    components: {
        HeaderComponent, // ✅ Register here
        SidebarComponent,
    },
};
</script>
