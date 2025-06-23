<script>
import LogoSlider from "@/Components/LogoSlider.vue";

import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "Home",
    components: {
        MainLayout, // ✅ Register here
    },
};
</script>

<template>
    <MainLayout>
        <main>
            <!-- Header Section -->

            <!-- Hero Section -->

            <section class="outter hero-video top-margin bg-black">
                <section class="video-container">
                    <video autoplay="true" loop="true">
                        <source
                            src="https://res.cloudinary.com/dnroxwdfm/video/upload/v1709722702/video-editing_qpvxqg.mp4"
                            type="video/mp4"
                        />
                    </video>
                    <div class="callout">
                        <div
                            class="te space-md flex h-[40vh] flex-col items-center justify-center px-4 text-center lg:px-0"
                        >
                            <h1
                                class="text-3xl font-semibold leading-tight lg:text-6xl"
                            >
                                <span class="text-white">Video Editing</span>
                                <span class="text-brand">Price</span>
                            </h1>
                            <p
                                class="text-sm leading-7 md:text-lg lg:!leading-7 mx-auto max-w-2xl text-white"
                            >
                                Don't let your budget stop you from creating
                                something Great. Contact us for a tailored
                                price.
                            </p>
                        </div>
                    </div>
                </section>
            </section>

            <div class="wrapper-container space-xl">
                <div class="space-lg text-center">
                    <h2
                        class="text-3xl font-bold leading-tight my-4 lg:text-5xl"
                    >
                        <span>Our </span>
                        <span class="text-brand">Packages</span>
                    </h2>
                    <p
                        class="fs-4 my-5 leading-7 md:text-lg lg:!leading-7 mx-auto max-w-2xl"
                    >
                        We offer affordable video editing services that won't
                        compromise quality. We make high-quality editing
                        possible within your budget. For a custom package,
                        simply contact us or try our free trial! We'll provide a
                        personalized quote to fit your budget.
                    </p>
                </div>
                <div
                    class="grid grid-cols-1 mt-5 gap-6 md:grid-cols-2 lg:grid-cols-3"
                >
                    <div
                        class="h-min text-center shadow transition hover:shadow-lg"
                    >
                        <div class="bg-brand py-3">
                            <h2 class="fs-4 font-bold text-white">BASIC</h2>
                            <p class="text-base font-semibold">
                                Starting from <span class="font-bold">*</span>
                            </p>
                        </div>
                        <div class="border-b py-3">
                            <h3
                                class="text-2xl font-semibold leading-tight text-brand lg:text-3xl"
                            >
                                $<span>4.00</span>
                            </h3>
                        </div>
                        <div class="px-8 py-4 text-start lg:px-16">
                            <div>
                                <ul class="space-sm list-disc pl-8">
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Sizing
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Cropping
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        White Balance/Temperature Adjustment
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Skin Redness Removal
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Adding Video Transitions (Fade-in,
                                        Fade-outs, Fade to logo)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pb-8 pt-4">
                            <a
                                target=""
                                rel="noopener noreferrer"
                                class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                href="https://upload.bzmgraphics.com/sign-up"
                                ><span
                                    class="absolute bottom-0 left-0 h-full w-1 bg-brand transition-all duration-300 ease-in-out group-hover:w-full"
                                ></span
                                ><span
                                    class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="absolute left-0 -translate-x-12 pl-2.5 duration-200 ease-out group-hover:translate-x-0"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="relative uppercase transition-colors duration-200 ease-in-out"
                                    >Free Trial</span
                                ></a
                            >
                        </div>
                    </div>
                    <div
                        class="h-min text-center shadow transition hover:shadow-lg"
                    >
                        <div class="bg-brand py-3">
                            <h2
                                class="text-xl font-bold leading-tight text-white lg:text-2xl"
                            >
                                INTERMEDIATE
                            </h2>
                            <p class="text-base font-semibold lg:text-lg">
                                Starting from <span class="font-bold">*</span>
                            </p>
                        </div>
                        <div class="border-b py-3">
                            <h3
                                class="text-2xl font-semibold leading-tight text-brand lg:text-3xl"
                            >
                                $<span>8.49</span>
                            </h3>
                        </div>
                        <div class="px-8 py-4 text-start lg:px-16">
                            <div>
                                <ul class="space-sm list-disc pl-8">
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Combining Clips
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Sizing
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Cropping
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Adjusting Video Speed/Frame Rate
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        White Balance/Temperature Adjustment
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Background Knockout
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Basic Color Correction (Brightness,
                                        Contrast Adjustment)
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Adding Video Transitions (Fade-in,
                                        Fade-outs, Fade to logo)
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Logo Insert
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Audio Insert
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pb-8 pt-4">
                            <a
                                target=""
                                rel="noopener noreferrer"
                                class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                href="https://upload.bzmgraphics.com/sign-up"
                                ><span
                                    class="absolute bottom-0 left-0 h-full w-1 bg-brand transition-all duration-300 ease-in-out group-hover:w-full"
                                ></span
                                ><span
                                    class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="absolute left-0 -translate-x-12 pl-2.5 duration-200 ease-out group-hover:translate-x-0"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="relative uppercase transition-colors duration-200 ease-in-out"
                                    >Free Trial</span
                                ></a
                            >
                        </div>
                    </div>
                    <div
                        class="h-min text-center shadow transition hover:shadow-lg"
                    >
                        <div class="bg-brand py-3">
                            <h2
                                class="text-xl font-bold leading-tight text-white lg:text-2xl"
                            >
                                ADVANCED
                            </h2>
                            <p class="text-base font-semibold lg:text-lg">
                                Starting from <span class="font-bold">*</span>
                            </p>
                        </div>
                        <div class="border-b py-3">
                            <h3
                                class="text-2xl font-semibold leading-tight text-brand lg:text-3xl"
                            >
                                $<span>10.49</span>
                            </h3>
                        </div>
                        <div class="px-8 py-4 text-start lg:px-16">
                            <div>
                                <ul class="space-sm list-disc pl-8">
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Sizing
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Cropping
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Padding
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Adjusting Video Speed/Frame Rate
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        White Balance/Temperature Adjustment
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Background Knockout
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Rotoscopy
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Compositing
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Text Overlay
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Title Animation
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Chroma Key
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Advanced Color Correction (Brightness,
                                        Contrast Adjustment, and Match to
                                        Reference)
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Hair &amp; Skin Color Correction
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Adding Video Transitions (Fade-in,
                                        Fade-outs, Fade to logo)
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Logo Insert
                                    </li>
                                    <li
                                        class="text-[14px] leading-7 md:text-lg md:!leading-7"
                                    >
                                        Audio Insert
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pb-8 pt-4 mb-4">
                            <a
                                target=""
                                rel="noopener noreferrer"
                                class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                href="https://upload.bzmgraphics.com/sign-up"
                                ><span
                                    class="absolute bottom-0 left-0 h-full w-1 bg-brand transition-all duration-300 ease-in-out group-hover:w-full"
                                ></span
                                ><span
                                    class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="absolute left-0 -translate-x-12 pl-2.5 duration-200 ease-out group-hover:translate-x-0"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="relative uppercase transition-colors duration-200 ease-in-out"
                                    >Free Trial</span
                                ></a
                            >
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row d-md-flex">
                    <div class="col-md-6 px-5 bg-color-3">
                        <div class="my-5">
                            <span class="flex items-center gap-x-6"
                                ><h2
                                    class="text-3xl font-medium leading-none lg:text-5xl"
                                >
                                    Competitive
                                </h2>
                                <p
                                    class="text-sm md:text-lg lg:!leading-7 font-color-3 max-w-40 !text-sm"
                                >
                                    We Don't Over Promise and Under Deliver
                                </p></span
                            >
                        </div>
                        <div class="my-5">
                            <span class="flex items-center gap-x-6">
                                <p
                                    class="font-color-3 max-w-32 text-sm md:text-right"
                                >
                                    We Don't keep any hidden charges
                                </p>
                                <h2
                                    class="text-3xl font-medium leading-none lg:text-5xl"
                                >
                                    Transparent
                                </h2>
                            </span>
                        </div>
                        <div class="my-5">
                            <span class="flex items-center gap-x-6"
                                ><h2
                                    class="text-3xl font-medium leading-none lg:text-5xl"
                                >
                                    Competitive
                                </h2>
                                <p class="font-color-3 max-w-28 text-sm">
                                    We smile when You smile
                                </p></span
                            >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img
                            alt="picture"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="object-cover"
                            src="https://www.bzmgraphics.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fmodel-smile.016f843c.jpg&w=1920&q=75"
                            style=""
                        />
                    </div>
                </div>

                <div class="row" style="height: 500px">
                    <div
                        class="col-md-3 relative col-span-1 h-full bg-[#7B7B7B]"
                    >
                        <img
                            alt="picture"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="object-contain object-bottom"
                            sizes="(max-width: 768px) 50%, 33%"
                            src="https://www.bzmgraphics.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fphotographer.c668073c.png&w=1920&q=75"
                            style="
                                height: 100%;
                                width: 100%;
                                inset: 0px;
                                color: transparent;
                            "
                        />
                    </div>
                    <div class="col-md-3 bg-color-5">
                        <p
                            class="text-sm !leading-6 md:text-lg lg:!leading-7 font-color-5"
                        >
                            We help our customers to create and enhance short
                            but storytelling videos which puts a long lasting
                            impression to the final audience.
                        </p>
                        <div class="pb-3 lg:pt-10">
                            <a
                                target=""
                                rel="noopener noreferrer"
                                class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                href="https://upload.bzmgraphics.com/sign-up"
                                ><span
                                    class="absolute bottom-0 left-0 h-full w-1 bg-brand transition-all duration-300 ease-in-out group-hover:w-full"
                                ></span
                                ><span
                                    class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="absolute left-0 -translate-x-12 pl-2.5 duration-200 ease-out group-hover:translate-x-0"
                                    ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path></svg></span
                                ><span
                                    class="relative uppercase transition-colors duration-200 ease-in-out"
                                    >Free Trial</span
                                ></a
                            >
                        </div>
                    </div>
                    <div
                        class="col-md-3 bg-color-3 space-lg col-span-1 border-r border-[#D9D9D9] p-4 lg:p-10"
                    >
                        <div class="flex mt-4">
                            <span class="bg-color-2 h-8 w-8 rounded-full"></span
                            ><span
                                class="bg-color-2 h-8 w-8 rounded-full"
                            ></span>
                        </div>
                        <p
                            class="!leading-6 md:text-lg lg:!leading-7 font-color-5 max-w-52 text-base font-medium"
                        >
                            Remember, your are not alone in this journey.
                        </p>
                    </div>
                    <div
                        class="col-md-3 bg-color-4 space-lg col-span-1 p-4 lg:p-10"
                    >
                        <h2 class="font-color-4 text-2xl font-semibold">
                            Our Approach
                        </h2>
                        <p
                            class="text-sm !leading-6 md:text-lg lg:!leading-7 font-color-5"
                        >
                            We make sure you don't have to worry about what
                            happens to the videos you just shot and you can
                            prepare yourself for the next shoot on your
                            schedule.
                        </p>
                    </div>
                </div>
            </div>

            <div class="wrapper-container space-xl my-5">
                <div class="space-lg text-center">
                    <h2 class="text-3xl font-bold leading-tight lg:text-5xl">
                        <span class="text-brand">Video Editing </span>
                        <span>Services</span>
                    </h2>
                    <p
                        class="text-sm !leading-6 mt-3 md:text-lg lg:!leading-7 mx-auto max-w-3xl"
                    >
                        We Simplify the process of creating beautiful, Creative
                        and engaging Videos. With our industry knowledge and
                        very skilled Video Editors we are capable to support you
                        with all your video editing needs.
                    </p>
                </div>
                <div
                    class="grid gap-5 md:grid-cols-2 lg:grid-cols-3 my-5 2xl:grid-cols-4"
                >
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/cropping.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold">Trimming/Cutting</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Removing unwanted parts of the footage to enhance
                            pacing and flow.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/white-balance.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">
                            White Balance/Temperature Adjustment
                        </h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Stabilize shaky footage to improve visual quality
                            and stability.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/bg-remove.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Background Knockout</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Enhance focus and better presentation by
                            removing/adding backgrounds.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/color-correction.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">
                            Advanced Color Correction
                        </h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Correcting and balancing white balance to ensure
                            accurate representation.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/adjusting-frame-rate.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Adjusting Frame Rate</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Adjust the playback speed of clips for dramatic
                            effect or fit specific timing.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/title-animation.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Title Animation</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Adding text, titles, captions, and graphics to
                            enhance storytelling and attract viewers.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/hair-skin-color-correction.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">
                            Hair &amp; Skin Color Correction
                        </h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Achieve a cinematic look with our advanced color
                            grading service.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/audio-insert.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Audio Insert</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Adjust volume, add background music, noise
                            reduction, and sync audio with video.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/adding-video-transitions.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">
                            Adding Video Transitions
                        </h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Adding smooth transitions between clips to create
                            seamless transitions.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/padding.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Padding</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Adapting the video to different aspect ratios for
                            various platforms or devices.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/noise-reduction.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Noise Reduction</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Noisy video distracts viewers, usually caused by
                            low-light conditions.
                        </p>
                    </div>
                    <div
                        class="space-md flex flex-col items-center justify-center p-10 text-center shadow transition hover:shadow-lg"
                    >
                        <div class="relative h-[80px] w-[80px]">
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                src="https://www.bzmgraphics.com/icons/effects.svg"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <h3 class="font-semibold my-4">Effects</h3>
                        <p class="text-sm !leading-6 md:text-lg lg:!leading-7">
                            Visual effects, overlays, and animations enhance the
                            aesthetic of the video.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <div
                    class="wrapper-container flex w-full flex-col space-y-8 py-10 text-center lg:py-20 !pt-0"
                >
                    <h2
                        class="mx-auto max-w-lg text-2xl !leading-tight lg:text-4xl"
                    >
                        <span
                            >From Startups to the World's Largest
                            Companies</span
                        >
                    </h2>
                    <p
                        class="text-sm !leading-6 md:text-lg lg:!leading-7 mx-auto max-w-3xl font-light"
                    >
                        We help Create engaging &amp; high-performing visual
                        content for eCommerce and Brands.
                    </p>
                    <div class="lg:mx-auto lg:max-w-7xl">
                        <div
                            class="grid grid-cols-2 gap-x-10 gap-y-5 md:grid-cols-4"
                        >
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711965534%2Fimages%2Fbzm-clients%2Fhudsons-bay.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711965535%2Fimages%2Fbzm-clients%2Fsaks-fifth-avenue.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087629%2Fimages%2Fbzm-clients%2Flord-taylor.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087621%2Fimages%2Fbzm-clients%2Fjr-dunn.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087621%2Fimages%2Fbzm-clients%2Fgindi-photography.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711965535%2Fimages%2Fbzm-clients%2Fthredup.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087624%2Fimages%2Fbzm-clients%2Fhome-outfitters.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div
                                class="relative mx-auto h-[80px] w-full transition duration-300 ease-in-out hover:opacity-100 lg:h-[90px] lg:w-[250px] lg:opacity-40"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain object-center"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711087625%2Fimages%2Fbzm-clients%2Fa-plus-creative.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
        </main>
    </MainLayout>
</template>

<style scoped>
.marquee {
    overflow: hidden;
    white-space: nowrap;
    /* position: relative; */
}

.marquee-track {
    animation: marquee 30s linear infinite;
}

@keyframes marquee {
    from {
        transform: translateX(100%);
    }
    to {
        transform: translateX(-100%);
    }
}
.servicessection {
    background-color: #e9f3e1;
}
.servicetext {
    font-size: 23px;
}
.sameheight {
    height: 400px;
}
.boxwidth {
    width: 90%;
}
.text-brand {
    --tw-text-opacity: 1;
    color: rgb(146 196 106 / var(--tw-text-opacity));
}
.ease-in-out {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
.bg-brand {
    --tw-bg-opacity: 1;
    background-color: rgb(146 196 106 / var(--tw-bg-opacity));
}
.bg-opacity-40 {
    opacity: 0.6;
}
.stroke-brand {
    stroke: #92c46a;
}
.imgcover {
    filter: grayscale(70%);
}
.border-brand {
    --tw-border-opacity: 1;
    border-color: rgb(146 196 106 / var(--tw-border-opacity));
    height: 40px;
    width: 40px;
}
.fill-brand {
    fill: #92c46a;
}
.lg\:border-r {
    border-right-width: 1px;
    padding-right: 30px;
}
.hover\:bg-brand:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(146 196 106 / var(--tw-bg-opacity));
}
.hover\:text-white:hover {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.hover\:border:hover {
    border-width: 1px;
    padding-bottom: 39px;
}
.py-2\.5 {
    padding-top: 0.625rem;
    padding-bottom: 0.625rem;
}
@media (min-width: 1024px) {
    .text-2xl {
        font-size: 2.25rem !important;
        line-height: 2.5rem !important;
    }
}
.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
}

.hero-video .video-container {
    height: 100%;
    width: 100%;
    position: relative;
    overflow: hidden;
}
.hero-video .video-container video {
    -o-object-fit: cover;
    object-fit: cover;
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
}
.hero-video .callout {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100%;
    text-align: center;
    background-color: black;
    width: 100% !important;
    opacity: 0.8;
    position: relative;
    z-index: 10;
    /* width: 70%; */
    margin: auto;
}
.bg-black {
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1)) !important;
}
.wrapper-container {
    margin-left: auto;
    margin-right: auto;
    padding: 2.5rem 1rem;
}
.list-disc {
    list-style-type: disc;
}
.leading-7 {
    line-height: 2.5rem !important;
}
.bg-color-3 {
    --tw-bg-opacity: 1;
    background-color: rgb(250 250 250 / var(--tw-bg-opacity));
}
.bg-\[\#7B7B7B\] {
    --tw-bg-opacity: 1;
    background-color: rgb(123 123 123 / var(--tw-bg-opacity));
}
.bg-color-5 {
    background-color: #e6f1c752;
}
.font-color-5 {
    color: #292d32c2;
    line-height: 39px !important;
    padding: 50px 40px;
    font-size: 1.5rem;
}
.bg-color-2 {
    --tw-bg-opacity: 1;
    background-color: rgb(217 217 217 / var(--tw-bg-opacity));
}
.rounded-full {
    border-radius: 9999px;
}
.bg-color-4 {
    background-color: #ffedd63d;
}
</style>
