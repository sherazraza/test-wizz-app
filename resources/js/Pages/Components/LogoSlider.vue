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

const logos = [
    "https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711965534%2Fimages%2Fbzm-clients%2Fhudsons-bay.png&w=1920&q=75",
    "https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711965535%2Fimages%2Fbzm-clients%2Fsaks-fifth-avenue.png&w=1920&q=75",
    "https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087629%2Fimages%2Fbzm-clients%2Flord-taylor.png&w=1920&q=75",
    "https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711965535%2Fimages%2Fbzm-clients%2Fsaks-fifth-avenue.png&w=1920&q=75",
    "https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087621%2Fimages%2Fbzm-clients%2Fjr-dunn.png&w=1920&q=75",
    "https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087621%2Fimages%2Fbzm-clients%2Fgindi-photography.png&w=1920&q=75",
];
</script>

<style scoped>
.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
