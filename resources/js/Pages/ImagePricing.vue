<script>
import LogoSlider from "@/Components/LogoSlider.vue";

import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "ImagePricing",
    components: {
        MainLayout, // ✅ Register here
    },
    props: {
        pricing: Object,
        services: Array,
    },
};
</script>

<template>
    <MainLayout>
        <main>
            <!-- Header Section -->

            <!-- Hero Section -->
            <div
                class="relative w-full h-[30vh] md:h-[40vh] bg-gray-700 md:min-h-[350px]"
            >
                <img
                    class="bg-cover object-cover object-top imgcover grayscale-[70%]"
                    sizes="(max-width: 768px) 50%, 33%"
                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1718022963%2Fimages%2Fbg-images%2Fimage-editing-pricing_2_r6bake.png&w=1920&q=100"
                    style="
                        height: 100%;
                        width: 100%;
                        inset: 0px;
                        color: transparent;
                    "
                />
                <div
                    class="absolute inset-0 flex w-full bg-black bg-opacity-40 mx-auto h-full items-center justify-center px-4"
                >
                    <div
                        class="wrapper-container grid !max-w-full gap-5 text-center 2xl:!max-w-7xl !text-start"
                    >
                        <h1
                            class="md:leading-relaxe text-3xl text-white lg:text-6xl"
                        >
                            Image Editing<span
                                class="font-semibold uppercase text-brand"
                            >
                                PRICING
                            </span>
                        </h1>
                        <p
                            class="mx-auto max-w-3xl text-center text-sm text-white 2xl:text-lg"
                        ></p>
                    </div>
                </div>
            </div>
            <div
                class="bg-right bg-no-repeat lg:bg-[url('/shape/shape-8.svg')]"
            >
                <div
                    class="wrapper-container mx-auto !max-w-full !py-0 2xl:!max-w-7xl"
                >
                    <p
                        class="text-sm !leading-6 md:text-lg lg:!leading-7 py-10 text-center font-semibold lg:py-14"
                    >
                        {{ pricing?.description }}
                    </p>
                    <div
                        class="grid grid-cols-1 gap-10 bg-white p-4 py-10 md:gap-0 md:p-10 lg:grid-cols-2 lg:p-10"
                        style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 4px 2px"
                    >
                        <div
                            class="order-1 flex flex-col justify-center border-[#BDBDBD] md:order-1 lg:border-r lg:pr-20"
                        >
                            <div class="flex w-full flex-col justify-between">
                                <p
                                    class="text-sm !leading-6 md:text-lg lg:!leading-7 mb-8 font-semibold !text-[#909090]"
                                >
                                    <span class="border-b-2 border-brand pb-2"
                                        >Select Services</span
                                    >
                                </p>
                                <li
                                    v-for="(service, index) in services"
                                    :key="index"
                                    class="mb-4 flex !w-full items-center justify-between gap-2"
                                >
                                    <button class="flex items-center gap-2">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                            class="size-6 rounded-full border border-brand fill-brand"
                                        >
                                            <path
                                                d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"
                                            ></path>
                                        </svg>
                                        <p
                                            class="text-sm !leading-6 md:text-lg lg:!leading-7"
                                        >
                                            {{ service.name }}
                                        </p>
                                    </button>
                                    <p
                                        class="text-sm !leading-6 md:text-lg lg:!leading-7 text-gray-600"
                                    >
                                        ${{ service.price }}
                                    </p>
                                </li>
                            </div>

                            <div
                                class="space-md mt-10 flex flex-col items-center justify-center lg:mt-0 d-lg-none"
                            >
                                <div class="text-center">
                                    <h2 class="text-xl font-semibold">
                                        Total price image
                                    </h2>
                                    <span
                                        class="text-3xl font-bold text-brand lg:text-6xl"
                                        >${{ pricing?.base_price }}</span
                                    >
                                </div>
                                <div class="pt-2">
                                    <a
                                        target="_blank"
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
                                            >Get Started</span
                                        ></a
                                    >
                                </div>
                                <p class="text-center italic text-gray-600">
                                    For customizing pricing, please
                                    <span
                                        ><a
                                            class="hover:underline"
                                            target="_blank"
                                            href="/contact"
                                            >contact us!</a
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                        <div
                            class="order-2 pt-0 md:order-2 md:pt-8 px-3 lg:pl-20"
                        >
                            <div class="lg:pb-10">
                                <h2 class="text-2xl">
                                    Base price
                                    <span
                                        class="text-3xl font-semibold text-brand"
                                        >${{ pricing?.base_price }}</span
                                    >
                                </h2>
                                <p
                                    class="text-color5 mt-2 !leading-normal fs-5"
                                >
                                    Includes
                                    <span
                                        ><a
                                            class="hover:underline"
                                            target="_blank"
                                            href="/service/background-remove"
                                            >Background removal
                                        </a></span
                                    >{{ pricing?.base_price_description }}
                                </p>
                            </div>
                            <div
                                class="space-md hidden flex-col mt-5 items-center justify-center lg:flex"
                            >
                                <div class="text-center">
                                    <h2 class="text-xl font-semibold my-2">
                                        Total price image
                                    </h2>
                                    <span
                                        class="text-3xl font-bold text-brand lg:text-6xl"
                                        >${{ pricing?.base_price }}</span
                                    >
                                </div>
                                <div class="pt-2 mt-3">
                                    <a
                                        target="_blank"
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
                                            >Get Started</span
                                        ></a
                                    >
                                </div>
                                <p
                                    class="text-center italic text-gray-600 mt-4"
                                >
                                    For customizing pricing, please
                                    <span
                                        ><a
                                            class="hover:underline"
                                            target="_blank"
                                            href="/contact"
                                            >contact us!</a
                                        ></span
                                    >
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto">
                <div
                    class="wrapper-container mx-auto py-5 my-5 grid !max-w-7xl mt-5 grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3"
                >
                    <!-- Card 1 -->
                    <div
                        class="border bg-white hover:border-brand"
                        style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 4px 2px"
                    >
                        <a target="_self" href="/service/editorial-retouching">
                            <div
                                class="flex flex-col items-center justify-center gap-5 p-8"
                            >
                                <div class="relative size-24">
                                    <img
                                        alt="icons"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class="object-contain"
                                        src="https://www.bzmgraphics.com/icons/editorial-retouching.svg"
                                        style="
                                            position: absolute;
                                            height: 100%;
                                            width: 100%;
                                            inset: 0px;
                                            color: transparent;
                                        "
                                    />
                                </div>
                                <h2 class="text-base font-semibold">
                                    Editorial Retouching
                                </h2>
                            </div>
                        </a>
                        <div class="flex justify-center pb-4">
                            <a
                                target="_blank"
                                href="https://upload.bzmgraphics.com/sign-up"
                                class="h-9 px-5 py-2.5 text-xl font-semibold text-brand transition hover:border hover:bg-brand hover:text-white"
                                >Ask For Quote</a
                            >
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="border bg-white hover:border-brand"
                        style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 4px 2px"
                    >
                        <a target="_self" href="/service/jewelry-retouching">
                            <div
                                class="flex flex-col items-center justify-center gap-5 p-8"
                            >
                                <div class="relative size-24">
                                    <img
                                        alt="icons"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class="object-contain"
                                        src="https://www.bzmgraphics.com/icons/jewelry-retouching.svg"
                                        style="
                                            position: absolute;
                                            height: 100%;
                                            width: 100%;
                                            inset: 0px;
                                            color: transparent;
                                        "
                                    />
                                </div>
                                <h2 class="text-base font-semibold">
                                    Jewelry Retouching
                                </h2>
                            </div>
                        </a>
                        <div class="flex justify-center pb-4">
                            <a
                                target="_blank"
                                href="https://upload.bzmgraphics.com/sign-up"
                                class="h-9 px-5 py-2.5 text-xl font-semibold text-brand transition hover:border hover:bg-brand hover:text-white"
                                >Ask For Quote</a
                            >
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="border bg-white hover:border-brand"
                        style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 4px 2px"
                    >
                        <a target="_self" href="/service/automotive-retouching">
                            <div
                                class="flex flex-col items-center justify-center gap-5 p-8"
                            >
                                <div class="relative size-24">
                                    <img
                                        alt="icons"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class="object-contain"
                                        src="https://www.bzmgraphics.com/icons/automotive-retouching.svg"
                                        style="
                                            position: absolute;
                                            height: 100%;
                                            width: 100%;
                                            inset: 0px;
                                            color: transparent;
                                        "
                                    />
                                </div>
                                <h2 class="text-base font-semibold">
                                    Automotive Retouching
                                </h2>
                            </div>
                        </a>
                        <div class="flex justify-center pb-4">
                            <a
                                target="_blank"
                                href="https://upload.bzmgraphics.com/sign-up"
                                class="h-9 px-5 py-2.5 text-xl font-semibold text-brand transition hover:border hover:bg-brand hover:text-white"
                                >Ask For Quote</a
                            >
                        </div>
                    </div>
                </div>

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

                <div class="wrapper-container !py-0">
                    <div
                        class="grid place-items-center gap-10 lg:h-[600px] lg:grid-cols-2"
                    >
                        <div class="relative h-[345px] w-full lg:h-[500px]">
                            <img
                                alt="pricing enterprise banner"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="pointer-events-none absolute z-10 w-full object-contain"
                                sizes="100%"
                                src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1717653199%2Fimages%2Fbanner%2Fsolution-partner-banner_f6gxn0.png&w=1920&q=75"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <div class="space-lg flex-1" style="margin-top: -100px">
                            <h2 class="text-2xl font-medium text-4xl">
                                Solution Partner For High <br />
                                Volume Image Editing.
                            </h2>
                            <p
                                class="text-sm fs-5 my-4 lg:!leading-7 !text-xl text-brand"
                            >
                                ENTERPRICE AND SOLUTION PARTNER
                            </p>
                            <p
                                class="text-sm !leading-6 fs-5"
                                style="line-height: 35px !important"
                            >
                                We approach selected number of team members
                                depends on your monthly image volume, and for
                                solution partner we provide cutting edges
                                technology to make the service more efficient.
                                There has lots of freedom to customize the
                                instruction of the requirements.
                            </p>
                            <div>
                                <a
                                    target=""
                                    rel="noopener noreferrer"
                                    class="group relative inline-flex mt-5 w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                    href="/book-a-meeting"
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
                                        >Book a Meeting</span
                                    ></a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
</style>
