<script>
import LogoSlider from "@/Components/LogoSlider.vue";
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "Cookie",
    components: {
        MainLayout,
    },
};
</script>

<template>
    <MainLayout>
        <div class="flex flex-col justify-between">
            <!-- Header Section -->

            <main>
                <div class="bg-gray-400 py-0 lg:py-32">
                    <br /><br />
                    <div
                        class="space-md mx-auto max-w-4xl bg-white p-6 servicetext"
                    >
                        <h1 class="my-5"><strong>Cookies</strong></h1>
                        <p
                            class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7"
                        >
                            We employ the use of cookies. By accessing bZm
                            Graphics ltd, you agreed to use cookies in agreement
                            with the bZm Graphics ltd's Privacy Policy.
                        </p>
                        <p
                            class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7"
                        >
                            Most interactive websites use cookies to let us
                            retrieve the user's details for each visit. Cookies
                            are used by our website to enable the functionality
                            of certain areas to make it easier for people
                            visiting our website. Some of our
                            affiliate/advertising partners may also use cookies.
                        </p>
                    </div>
                    <br /><br />
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
                        ></path>
                    </svg>
                </a>
            </main>
            <!-- Footer -->
        </div>
    </MainLayout>
</template>

<style scoped>
@media (min-width: 1024px) {
    .lg-py-32 {
        padding-top: 8rem;
        padding-bottom: 8rem;
    }
}
.bg-gray-400 {
    --tw-bg-opacity: 1;
    background-color: rgb(156 163 175 / var(--tw-bg-opacity));
}
.servicessection {
    background-color: #e9f3e1;
}
.servicetext {
    font-size: 23px;
    line-height: 39px;
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
</style>
