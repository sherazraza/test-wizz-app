<script>
import LogoSlider from "@/Components/LogoSlider.vue";

import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "Refund",
    components: {
        MainLayout, // ✅ Register here
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
                        class="space-md mx-auto max-w-4xl bg-white p-5 servicetext"
                    >
                        <h1 class="my-5 font-bold">Refund Policy</h1>
                        <div class="space-md">
                            <h2 class="font-semibold">1. Free Trial</h2>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    <span class="font-semibold"
                                        >BZM Graphics LLC</span
                                    >
                                    offers a free trial of our image editing
                                    services to allow potential customers to
                                    experience the quality of our work before
                                    making a purchase. The free trial includes a
                                    limited number of images or a specific
                                    duration, as outlined on our website.
                                </li>
                            </ul>
                        </div>
                        <div class="space-md">
                            <h2 class="font-semibold">
                                2. Refund Eligibility:
                            </h2>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Refunds are available for customers who have
                                    purchased our image editing services and are
                                    dissatisfied with the quality of the work
                                    provided, or if there has been an error on
                                    our part.
                                </li>
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    To be eligible for a refund, customers must
                                    contact our customer support team within 15
                                    days of receiving the completed images.
                                </li>
                            </ul>
                        </div>
                        <div class="space-md">
                            <h2 class="font-semibold">3. Refund Process:</h2>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Customers must submit a refund request via
                                    email to
                                    <a
                                        class="font-bold text-brand"
                                        href="mailto:hello@bzmgraphics.com"
                                        >hello@bzmgraphics.com</a
                                    >, providing a proper explanation of why a
                                    refund is requested.
                                </li>
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Refund requests will be reviewed by our team
                                    within 5 business days.
                                </li>
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    If the request is approved, refunds will be
                                    issued to the original method of payment
                                    within 10 business days.
                                </li>
                            </ul>
                        </div>
                        <div class="space-md">
                            <h2 class="font-semibold">
                                4. Non-Refundable Circumstances:
                            </h2>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Refunds will not be provided for
                                    dissatisfaction due to changes in personal
                                    preference or subjective opinions.
                                </li>
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Once the refund request window has passed,
                                    refunds will not be granted except in cases
                                    of errors on our part or failure to deliver
                                    the promised service.
                                </li>
                            </ul>
                        </div>
                        <div class="space-md">
                            <h2 class="font-semibold">
                                5. Cancellation Policy:
                            </h2>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Customers may cancel their subscription or
                                    service plan at any time. However, refunds
                                    will only be provided according to the terms
                                    outlined in this policy.
                                </li>
                            </ul>
                        </div>
                        <div class="space-md">
                            <h2 class="font-semibold">
                                6. Contact Information:
                            </h2>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7"
                            >
                                For any questions or refund requests, please
                                contact our customer support team at:
                            </p>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Email:
                                    <a
                                        href="mailto:hello@bzmgraphics.com"
                                        class="font-bold text-brand"
                                        >hello@bzmgraphics.com</a
                                    >
                                </li>
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    Phone:
                                    <a
                                        class="font-bold text-brand underline"
                                        href="tel:+1 737 307 3852"
                                        >+1 737 307 3852</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div class="space-md">
                            <h2 class="font-semibold">7. Legal Compliance:</h2>
                            <ul class="ml-10 list-disc space-y-3">
                                <li
                                    class="text-[14px] !leading-6 servicetext md:text-lg md:!leading-7"
                                >
                                    This refund policy is governed by the laws
                                    of the State of Texas, USA. Any disputes
                                    arising from this policy shall be resolved
                                    in accordance with the laws of Texas.
                                </li>
                            </ul>
                        </div>
                        <div class="pb-5">
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7"
                            >
                                Note: This refund policy is subject to change
                                without prior notice. Customers are encouraged
                                to review this policy periodically for updates.
                            </p>
                        </div>
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
