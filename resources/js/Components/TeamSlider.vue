<template>
    <div v-if="mounted" class="my-5 container">
        <!-- <p class="text-center mb-4">
            From Startups to the World’s Largest Companies
        </p> -->
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
                v-for="(member, index) in items"
                :key="index"
                class="d-flex justify-content-center align-items-center"
            >
                <div>
                    <div class="relative h-[250px] w-[200px] min-w-[200px]">
                        <img
                            alt="CEO"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="rounded-md object-cover"
                            sizes="(max-width: 768px) 50%, 33%"
                            src="https://www.bzmgraphics.com/_next/image?url=%2Fceo_1.2.png&w=1920&q=75"
                            style="
                                position: absolute;
                                height: 100%;
                                width: 100%;
                                inset: 0px;
                                color: transparent;
                            "
                        />
                    </div>
                    <p class="mt-3 text-lg font-semibold">
                        {{ member?.name }}
                    </p>
                    <p class="font-medium text-brand">
                        {{ member?.designation }}
                    </p>
                </div>
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
    items: Array,
});
</script>

<style scoped>
.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}
.text-brand {
    --tw-text-opacity: 1;
    color: rgb(146 196 106 / var(--tw-text-opacity));
}
</style>
