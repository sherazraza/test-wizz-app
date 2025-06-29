<template>
    <div v-if="mounted" class="my-5 container py-5">
        <p class="text-center mb-4">
            From Startups to the World’s Largest Companies
        </p>
        <swiper
            :modules="[Autoplay]"
            :slides-per-view="4"
            :space-between="20"
            :loop="true"
            :autoplay="{ delay: 2000, disableOnInteraction: false }"
            :breakpoints="{
                320: { slidesPerView: 2 },
                768: { slidesPerView: 3 },
                1024: { slidesPerView: 5 },
            }"
            class="logo-swiper"
        >
            <swiper-slide
                v-for="(logo, index) in logos"
                :key="index"
                class="d-flex justify-content-center align-items-center"
            >
                <img :src="logo" alt="Client Logo" height="30" />
            </swiper-slide>
        </swiper>
    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay } from "swiper/modules";
import { ref, onMounted } from "vue";

import "swiper/css";
import "swiper/css/autoplay";

const mounted = ref(false);
onMounted(() => {
    mounted.value = true;
});
const props = defineProps({
    logos: Array,
});
</script>

<style scoped>
.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
