<script>
import LogoSlider from "@/Components/LogoSlider.vue";
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "Contact",
    components: {
        MainLayout,
        LogoSlider,
    },
    props: {
        portfolios: Array,
        categories: Array,
        home: Object,
    },
    data() {
        return {
            selectedCategoryId: null, // null means "All"
        };
    },
    computed: {
        filteredPortfolios() {
            if (!this.selectedCategoryId) {
                return this.portfolios;
            }
            return this.portfolios.filter(
                (p) => p.category_id === this.selectedCategoryId
            );
        },
    },
};
</script>

<template>
    <MainLayout>
        <main>
            <div class="top-margin space-y-10">
                <div
                    class="wrapper-container !max-w-4xl space-y-10 !pb-0 text-center"
                >
                    <h2
                        class="text-4xl font-bold md:text-5xl"
                        style="line-height: revert"
                    >
                        Our Showcase.
                        <!-- -->
                        <!-- -->
                        A
                        <!-- -->

                        <span class="text-brand my-2"> Highlights</span>
                        <br />
                        <!-- -->
                        of Our Work
                    </h2>
                    <p class="servicetext">
                        We differentiate ourselves from other image editing
                        companies with our unique approach to split the editing
                        process into objective and subjective steps.
                    </p>
                </div>
                <div class="px-4 md:px-10">
                    <div
                        class="mb-10 flex flex-wrap justify-center gap-y-4 py-7 text-center"
                    >
                        <!-- All Button -->
                        <button
                            class="mx-2 rounded border border-brand px-4 py-2 font-semibold capitalize bg-brand text-white"
                            :class="{
                                'bg-brand text-white': !selectedCategoryId,
                            }"
                            @click="selectedCategoryId = null"
                        >
                            All
                        </button>

                        <!-- Category Buttons -->
                        <button
                            v-for="(item, index) in categories"
                            :key="index"
                            class="mx-2 rounded border border-brand px-4 py-2 font-semibold capitalize"
                            :class="{
                                'bg-brand text-white':
                                    selectedCategoryId === item.id,
                            }"
                            @click="selectedCategoryId = item.id"
                        >
                            {{ item?.name }}
                        </button>
                    </div>
                    <div
                        class="columns-1 gap-5 md:columns-2 lg:columns-3 lg:gap-10 2xl:columns-4 [&amp;&gt;div:not(:first-child)]:mt-5 lg:[&amp;&gt;div:not(:first-child)]:mt-10"
                    >
                        <div
                            v-for="(portfolio, ind) in filteredPortfolios"
                            :key="ind"
                            class="cursor-zoom-in transition hover:brightness-[.85]"
                        >
                            <!-- 👇 Image -->
                            <img
                                v-if="
                                    /\.(jpg|jpeg|png|gif|webp)$/i.test(
                                        portfolio.portfolio_image
                                    )
                                "
                                :src="portfolio.portfolio_image"
                                alt="portfolio image"
                                class="h-auto w-full"
                                loading="lazy"
                            />

                            <!-- 👇 Video -->
                            <video
                                v-else-if="
                                    /\.(mp4|webm|ogg)$/i.test(
                                        portfolio.portfolio_image
                                    )
                                "
                                controls
                                class="h-auto w-full"
                            >
                                <source
                                    :src="portfolio.portfolio_image"
                                    type="video/mp4"
                                />
                                Your browser does not support the video tag.
                            </video>

                            <!-- 👇 Fallback (optional) -->
                            <span v-else>No preview available</span>
                        </div>
                    </div>
                </div>
                <div class="pb-16">
                    <div
                        class="wrapper-container flex w-full flex-col space-y-8 py-10 text-center lg:py-20 wrapper-container"
                    >
                        <section class="container text-center my-5">
                            <h1 class="text-4xl">
                                {{ home?.client_title ?? "" }}
                            </h1>
                            <p>
                                {{ home?.client_description ?? "" }}
                            </p>

                            <div class="">
                                <LogoSlider :logos="home?.client_images" />
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <noscript
                ><iframe
                    src="https://www.googletagmanager.com/ns.html?id=GTM-NFJJ8KVG"
                    height="0"
                    width="0"
                    style="display: none; visibility: hidden"
                ></iframe></noscript
            ><a
                class="fixed bottom-5 right-5 z-[1000] rounded-full bg-brand p-3 text-white shadow-lg"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Chat on WhatsApp"
                href="https://wa.me/+971585718686"
                ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 32 32"
                    width="32"
                    height="32"
                >
                    <path
                        fill="currentColor"
                        d="M16 0C7.164 0 0 7.163 0 16c0 2.837.736 5.532 2.135 7.922L.008 32l8.317-2.107A15.915 15.915 0 0 0 16 32C24.836 32 32 24.837 32 16S24.836 0 16 0zm6.7 22.98c-.264.742-1.522 1.361-2.144 1.454-.57.085-1.272.122-2.04-.133-.47-.145-1.084-.35-1.872-.68-3.302-1.376-5.445-4.565-5.608-4.775-.162-.21-1.34-1.787-1.34-3.4 0-1.614.84-2.406 1.14-2.75.285-.33.632-.42.84-.42.21 0 .42.003.6.012.196.01.448-.07.7.54.27.642.918 2.215.996 2.38.081.165.132.364.024.574-.115.226-.21.33-.39.528-.188.208-.33.332-.498.536-.162.198-.342.412-.152.764.18.344.796 1.287 1.707 2.08 1.177 1.04 2.163 1.354 2.516 1.497.254.107.57.083.742-.12.228-.267.513-.69.804-1.042.263-.31.554-.35.888-.24.335.11 2.126 1.005 2.49 1.185.37.18.618.28.708.44.088.154.088.854-.176 1.597z"
                    ></path></svg
            ></a>
        </main>
    </MainLayout>
</template>

<style scoped>
.border-brand {
    --tw-border-opacity: 1;
    border-color: rgb(146 196 106 / var(--tw-border-opacity)) !important;
}
.servicessection {
    background-color: #e9f3e1;
}
.servicetext {
    font-size: 23px;
    line-height: 40px;
}
.sameheight {
    height: 400px;
}
.bg-opacity-40 {
    opacity: 0.5;
}
.wrapper-container {
    margin-left: auto;
    margin-right: auto;
    padding: 2.5rem 1rem;
}

.bg-brand\/90 {
    background-color: hsla(93, 43%, 59%, 0.9);
}
.bg-brand {
    --tw-bg-opacity: 1;
    background-color: rgb(146 196 106 / var(--tw-bg-opacity));
}
.text-brand {
    --tw-text-opacity: 1;
    color: rgb(146 196 106 / var(--tw-text-opacity));
}
.text-lg {
    font-size: 1.125rem /* 18px */;
    line-height: 1.75rem /* 28px */;
}
.textfont {
    font-size: 19px;
}

.transition {
    transition-property: color, background-color, border-color,
        text-decoration-color, fill, stroke, opacity, box-shadow, transform,
        filter, -webkit-backdrop-filter;
    transition-property: color, background-color, border-color,
        text-decoration-color, fill, stroke, opacity, box-shadow, transform,
        filter, backdrop-filter;
    transition-property: color, background-color, border-color,
        text-decoration-color, fill, stroke, opacity, box-shadow, transform,
        filter, backdrop-filter, -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 0.15s;
}
.cursor-zoom-in {
    cursor: zoom-in !important;
}
</style>
