<script>
import LogoSlider from "@/Components/LogoSlider.vue";

import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "ImageService",
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
                <div
                    class="container mx-auto h-full justify-between gap-10 pt-10 lg:flex lg:px-20 lg:pt-20"
                >
                    <div
                        class="space-lg flex flex-1 flex-col justify-center px-4 lg:text-start"
                    >
                        <h1
                            class="flex flex-col text-3xl mt-3 font-medium !leading-tight md:text-6xl lg:max-w-lg"
                        >
                            <span class="whitespace-nowrap">Background</span>
                            <span class="text-brand">Removal Services</span>
                        </h1>
                        <p
                            class="text-sm !leading-6 my-5 md:text-lg lg:!leading-7 font-semibold"
                        >
                            Outsource your image background removal to experts
                        </p>
                        <p
                            class="text-sm !leading-6 mb-3 md:text-lg lg:!leading-7"
                        >
                            Get fast, precise, and tailored background removal
                            services designed to boost your e-commerce and
                            creative projects. Get flawless images that capture
                            attention and drive sales.
                        </p>
                        <div class="py-4">
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
                                    >Free Trial</span
                                ></a
                            >
                        </div>
                    </div>
                    <div class="relative min-h-[400px] w-full flex-1">
                        <img
                            alt="Service Image"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="object-contain py-10"
                            sizes="(max-width: 768px) 50%, 33%"
                            src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2F1.png&w=1920&q=75"
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

                <div class="wrapper-container space-xl mt-5">
                    <div class="space-lg text-center">
                        <h2
                            class="text-2xl font-bold leading-tight lg:text-6xl"
                        >
                            <span class="text-brand"> Professional</span>
                            <span class="mb-4"
                                >&nbsp; Background Removal Services</span
                            >
                        </h2>
                        <p
                            class="text-sm servicetext !leading-6 my-5 md:text-lg lg:!leading-7 mx-auto max-w-2xl font-medium"
                        >
                            No more unwanted backgrounds. We will remove any
                            background from any photo, no matter how complex or
                            challenging it is. We can also replace the
                            background with a new one of your choice, or make it
                            transparent.
                        </p>
                    </div>
                    <div
                        class="grid grid-cols-1 mx-5 gap-y-10 lg:grid-cols-3 lg:gap-20"
                    >
                        <div
                            class="space-lg col-span-1 flex flex-col justify-around"
                        >
                            <div class="space-md">
                                <a
                                    class="transition hover:underline"
                                    href="/details/transparent-background"
                                    ><h3 class="text-xl font-semibold my-4">
                                        Transparent Background
                                    </h3></a
                                >
                                <p
                                    class="text-sm servicetext !leading-6 md:text-lg lg:!leading-7"
                                >
                                    It's never easy to get the shot perfect. The
                                    background of your picture might be ugly or
                                    too pretty, It distracts from the main
                                    focus. No matter how complicated or detailed
                                    the image is, We make backgrounds
                                    transparent professionally.
                                </p>
                            </div>
                            <div class="space-md">
                                <a
                                    class="transition hover:underline my-4"
                                    href="/details/white-or-colored-background"
                                    ><h3 class="text-xl font-semibold my-4">
                                        White or Colored Background
                                    </h3></a
                                >
                                <p
                                    class="text-sm servicetext !leading-6 md:text-lg lg:!leading-7"
                                >
                                    A solid color background can help you make
                                    the subject the main focus. This gives your
                                    photos a clean and professional look. Our
                                    professional background removal services can
                                    change the background color of any image.
                                </p>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <div class="relative h-[376px] lg:h-[664px]">
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2F2.jpg&w=1920&q=75"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                        </div>
                        <div
                            class="space-lg col-span-1 flex flex-col justify-around"
                        >
                            <div class="space-md">
                                <a
                                    class="transition hover:underline"
                                    href="/details/shadow-removal"
                                    ><h3 class="text-xl font-semibold my-4">
                                        Shadow Removal
                                    </h3></a
                                >
                                <p
                                    class="text-sm servicetext !leading-6 md:text-lg lg:!leading-7"
                                >
                                    Unwanted shadows can make your photos look
                                    unprofessional. They can distract the viewer
                                    or create unwanted contrast. We can remove
                                    the shadows from your pictures and make them
                                    clearer and distraction-free.
                                </p>
                            </div>
                            <div class="space-md">
                                <a
                                    class="transition hover:underline"
                                    href="/details/remove-unwanted-object"
                                    ><h3 class="text-xl font-semibold my-4">
                                        Remove Unwanted Object
                                    </h3></a
                                >
                                <p
                                    class="text-sm servicetext !leading-6 md:text-lg lg:!leading-7"
                                >
                                    Unwanted objects in an image can steal
                                    attention from the main subject. Remove any
                                    unwanted objects from your photos and make
                                    them disappear. This helps you focus on the
                                    main subject of your photos.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-container mx-5">
                    <div
                        class="grid place-items-center items-center gap-10 md:gap-16 xl:grid-cols-2"
                    >
                        <div class="space-lg flex flex-col justify-center">
                            <h2
                                class="my-4 text-2xl font-bold !leading-tight lg:text-start lg:text-6xl"
                            >
                                Why Use Photo Background Removal Services for
                                eCommerce?
                            </h2>
                            <p
                                class="text-sm servicetext md:text-lg lg:text-start"
                            >
                                Ever visited an online store with blurry, messy
                                product photos? Yeah, not a good look. Our
                                professional photo background removal services
                                deliver clean, consistent product images that
                                grab attention, and ultimately drive sales. We
                                can help you remove unwanted backgrounds from
                                your images and make them flawless. It's the
                                difference between blending in and standing out.
                            </p>
                            <div class="lg:mx-0 mt-4">
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
                                        >Free Trial</span
                                    ></a
                                >
                            </div>
                        </div>
                        <div class="max-w-fit bg-gray-50 p-6 md:p-10 lg:p-0">
                            <div
                                aria-label="Compare Slider"
                                data-rcs="root"
                                style="
                                    position: relative;
                                    display: flex;
                                    overflow: hidden;
                                    touch-action: pan-y;
                                    user-select: none;
                                    width: 100%;
                                    height: 100%;
                                "
                            >
                                <img
                                    alt="Before"
                                    draggable="false"
                                    loading="lazy"
                                    width="500"
                                    height="500"
                                    decoding="async"
                                    data-nimg="1"
                                    class=""
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fbefore.jpg&w=1920&q=75"
                                    style="color: transparent"
                                />
                                <div
                                    data-rcs="clip-item"
                                    style="
                                        position: absolute;
                                        top: 0px;
                                        left: 0px;
                                        width: 100%;
                                        height: 100%;
                                        user-select: none;
                                        will-change: clip-path, transition;
                                        clip-path: inset(0px 0px 0px 50%);
                                    "
                                >
                                    <img
                                        alt="After"
                                        draggable="false"
                                        loading="lazy"
                                        width="500"
                                        height="500"
                                        decoding="async"
                                        data-nimg="1"
                                        class=""
                                        sizes="(max-width: 768px) 50%, 33%"
                                        srcset="
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=16&amp;q=75     16w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=32&amp;q=75     32w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=48&amp;q=75     48w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=64&amp;q=75     64w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=96&amp;q=75     96w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=128&amp;q=75   128w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=256&amp;q=75   256w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=384&amp;q=75   384w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=640&amp;q=75   640w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=750&amp;q=75   750w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=828&amp;q=75   828w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=1080&amp;q=75 1080w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=1200&amp;q=75 1200w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=1920&amp;q=75 1920w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=2048&amp;q=75 2048w,
                                            /_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=3840&amp;q=75 3840w
                                        "
                                        src="/_next/image?url=%2Fimages%2Fbackground-remove%2F3%2Fafter.jpg&amp;w=3840&amp;q=75"
                                        style="color: transparent"
                                    />
                                </div>
                                <button
                                    aria-orientation="horizontal"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                    aria-valuenow="50"
                                    data-rcs="handle-container"
                                    role="slider"
                                    style="
                                        position: absolute;
                                        top: 0px;
                                        height: 100%;
                                        background: none;
                                        border: 0px;
                                        padding: 0px;
                                        pointer-events: all;
                                        appearance: none;
                                        outline: 0px;
                                        transform: translate3d(-50%, 0px, 0px);
                                        left: 50%;
                                    "
                                >
                                    <div
                                        aria-label="Drag to move"
                                        class="__rcs-handle-root"
                                        style="
                                            display: flex;
                                            flex-direction: column;
                                            place-items: center;
                                            height: 100%;
                                            cursor: ew-resize;
                                            pointer-events: none;
                                            color: rgb(255, 255, 255);
                                        "
                                    >
                                        <div
                                            class="__rcs-handle-line"
                                            style="
                                                flex-grow: 1;
                                                height: 100%;
                                                width: 4px;
                                                background-color: currentcolor;
                                                pointer-events: auto;
                                                box-shadow: rgba(0, 0, 0, 0.5)
                                                    0px 0px 4px;
                                            "
                                        ></div>
                                        <div
                                            class="__rcs-handle-button"
                                            style="
                                                display: grid;
                                                grid-auto-flow: column;
                                                gap: 8px;
                                                place-content: center;
                                                flex-shrink: 0;
                                                width: 56px;
                                                height: 56px;
                                                border-radius: 50%;
                                                border: 4px solid white;
                                                pointer-events: auto;
                                                backdrop-filter: none;
                                                background-color: rgba(
                                                    0,
                                                    0,
                                                    0,
                                                    0.125
                                                );
                                                box-shadow: none;
                                            "
                                        >
                                            <div
                                                class="__rcs-handle-arrow"
                                                style="
                                                    width: 0px;
                                                    height: 0px;
                                                    border-top: 8px solid
                                                        transparent;
                                                    border-right: 10px solid;
                                                    border-bottom: 8px solid
                                                        transparent;
                                                "
                                            ></div>
                                            <div
                                                class="__rcs-handle-arrow"
                                                style="
                                                    width: 0px;
                                                    height: 0px;
                                                    border-top: 8px solid
                                                        transparent;
                                                    border-right: 10px solid;
                                                    border-bottom: 8px solid
                                                        transparent;
                                                    transform: rotate(180deg);
                                                "
                                            ></div>
                                        </div>
                                        <div
                                            class="__rcs-handle-line"
                                            style="
                                                flex-grow: 1;
                                                height: 100%;
                                                width: 4px;
                                                background-color: currentcolor;
                                                pointer-events: auto;
                                                box-shadow: rgba(0, 0, 0, 0.5)
                                                    0px 0px 4px;
                                            "
                                        ></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-color-13 mx-auto grid max-w-[2000px] grid-cols-1 lg:grid-cols-2"
                >
                    <div
                        class="wrapper-container space-lg max-w-xl place-self-center"
                    >
                        <h2
                            class="flex flex-col leading-tight lg:text-start lg-text-sizt"
                        >
                            <span class="!text-white">Dependable</span
                            ><span class="!text-white p-4">Innovative</span
                            ><span class="text-brand">Experienced</span>
                        </h2>
                        <p
                            class="text-sm !leading-6 mt-5 servicetext md:text-lg lg:!leading-7 !text-white lg:ml-[25%] lg:text-start"
                        >
                            Every time, we provide a high-quality background
                            removal service. Removing the distracting background
                            from a product photo focuses all attention on the
                            selling product.
                        </p>
                    </div>
                    <div>
                        <div style="width: 100%">
                            <div
                                style="font-family: Inter"
                                class="cld-video-player cld-fluid video-js vjs-controls-disabled vjs-workinghover vjs-v8 vjs-fluid v1712059669-dimensions cld-video-player-v1712059669 cld-video-player-skin-dark vjs-contextmenu vjs-context-menu vjs-vtt-thumbnails vjs-http-source-selector vjs-has-started vjs-user-inactive vjs-playing"
                                id="v1712059669"
                                tabindex="-1"
                                role="region"
                                lang="en"
                                translate="no"
                                aria-label="Video Player"
                            >
                                <video
                                    id="v1712059669_html5_api"
                                    class="vjs-tech"
                                    style="font-family: Inter"
                                    tabindex="-1"
                                    role="application"
                                    preload="auto"
                                    loop=""
                                    muted="muted"
                                    autoplay=""
                                    poster="https://res.cloudinary.com/dnroxwdfm/video/upload/c_limit,h_700,w_700/v1//videos/black-dress-model_ntzewo.jpg"
                                    src="https://res.cloudinary.com/dnroxwdfm/video/upload/q_auto/f_auto:video/v1//videos/black-dress-model_ntzewo?_s=vp-1.11.1"
                                ></video>

                                <div class="vjs-title-bar vjs-hidden">
                                    <div
                                        class="vjs-title-bar-title"
                                        style="display: none"
                                    ></div>
                                    <div
                                        class="vjs-title-bar-subtitle"
                                        style="display: none"
                                    ></div>
                                </div>
                                <div
                                    class="vjs-text-track-display"
                                    translate="yes"
                                    aria-live="off"
                                    aria-atomic="true"
                                >
                                    <div
                                        style="
                                            position: absolute;
                                            inset: 0px;
                                            margin: 1.5%;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-container space-xl my-5" id="image-editing">
                    <div class="space-lg">
                        <h2
                            class="text-center text-4xl font-bold uppercase leading-tight lg:text-[65px]"
                        >
                            <span class="">SEE OUR</span>
                            <span class="text-brand">WORK</span>
                        </h2>
                        <p
                            class="text-sm !leading-6 servicetext my-4 md:text-lg lg:!leading-7 mx-auto max-w-2xl text-center font-medium"
                        >
                            Look at some of our work and witness our image
                            editing mastery. We can remove backgrounds, shadows,
                            or anything you don't want. We can do it fast and
                            charge less. Try us today.
                        </p>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-20 md:grid-cols-3 my-4 2xl:grid-cols-3"
                    >
                        <div class="space-lg">
                            <div>
                                <div
                                    class="max-w-fit bg-gray-50 p-6 md:p-10 lg:p-0"
                                >
                                    <div
                                        aria-label="Compare Slider"
                                        data-rcs="root"
                                        style="
                                            position: relative;
                                            display: flex;
                                            overflow: hidden;
                                            touch-action: pan-y;
                                            user-select: none;
                                            width: 100%;
                                            height: 100%;
                                        "
                                    >
                                        <img
                                            alt="Before"
                                            draggable="false"
                                            loading="lazy"
                                            width="500"
                                            height="500"
                                            decoding="async"
                                            data-nimg="1"
                                            class=""
                                            sizes="(max-width: 768px) 50%, 33%"
                                            src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2Fcompare%2F1%2Fbefore.jpg&w=1920&q=75"
                                            style="color: transparent"
                                        />
                                        <div
                                            data-rcs="clip-item"
                                            style="
                                                position: absolute;
                                                top: 0px;
                                                left: 0px;
                                                width: 100%;
                                                height: 100%;
                                                user-select: none;
                                                will-change: clip-path,
                                                    transition;
                                                clip-path: inset(
                                                    0px 0px 0px 50%
                                                );
                                            "
                                        >
                                            <img
                                                alt="After"
                                                draggable="false"
                                                loading="lazy"
                                                width="500"
                                                height="500"
                                                decoding="async"
                                                data-nimg="1"
                                                class=""
                                                sizes="(max-width: 768px) 50%, 33%"
                                                src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2Fcompare%2F1%2Fafter.jpg&w=1920&q=75"
                                                style="color: transparent"
                                            />
                                        </div>
                                        <button
                                            aria-orientation="horizontal"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            aria-valuenow="50"
                                            data-rcs="handle-container"
                                            role="slider"
                                            style="
                                                position: absolute;
                                                top: 0px;
                                                height: 100%;
                                                background: none;
                                                border: 0px;
                                                padding: 0px;
                                                pointer-events: all;
                                                appearance: none;
                                                outline: 0px;
                                                transform: translate3d(
                                                    -50%,
                                                    0px,
                                                    0px
                                                );
                                                left: 50%;
                                            "
                                        >
                                            <div
                                                aria-label="Drag to move"
                                                class="__rcs-handle-root"
                                                style="
                                                    display: flex;
                                                    flex-direction: column;
                                                    place-items: center;
                                                    height: 100%;
                                                    cursor: ew-resize;
                                                    pointer-events: none;
                                                    color: rgb(255, 255, 255);
                                                "
                                            >
                                                <div
                                                    class="__rcs-handle-line"
                                                    style="
                                                        flex-grow: 1;
                                                        height: 100%;
                                                        width: 4px;
                                                        background-color: currentcolor;
                                                        pointer-events: auto;
                                                        box-shadow: rgba(
                                                                0,
                                                                0,
                                                                0,
                                                                0.5
                                                            )
                                                            0px 0px 4px;
                                                    "
                                                ></div>
                                                <div
                                                    class="__rcs-handle-button"
                                                    style="
                                                        display: grid;
                                                        grid-auto-flow: column;
                                                        gap: 8px;
                                                        place-content: center;
                                                        flex-shrink: 0;
                                                        width: 56px;
                                                        height: 56px;
                                                        border-radius: 50%;
                                                        border: 4px solid white;
                                                        pointer-events: auto;
                                                        backdrop-filter: none;
                                                        background-color: rgba(
                                                            0,
                                                            0,
                                                            0,
                                                            0.125
                                                        );
                                                        box-shadow: none;
                                                    "
                                                >
                                                    <div
                                                        class="__rcs-handle-arrow"
                                                        style="
                                                            width: 0px;
                                                            height: 0px;
                                                            border-top: 8px
                                                                solid
                                                                transparent;
                                                            border-right: 10px
                                                                solid;
                                                            border-bottom: 8px
                                                                solid
                                                                transparent;
                                                        "
                                                    ></div>
                                                    <div
                                                        class="__rcs-handle-arrow"
                                                        style="
                                                            width: 0px;
                                                            height: 0px;
                                                            border-top: 8px
                                                                solid
                                                                transparent;
                                                            border-right: 10px
                                                                solid;
                                                            border-bottom: 8px
                                                                solid
                                                                transparent;
                                                            transform: rotate(
                                                                180deg
                                                            );
                                                        "
                                                    ></div>
                                                </div>
                                                <div
                                                    class="__rcs-handle-line"
                                                    style="
                                                        flex-grow: 1;
                                                        height: 100%;
                                                        width: 4px;
                                                        background-color: currentcolor;
                                                        pointer-events: auto;
                                                        box-shadow: rgba(
                                                                0,
                                                                0,
                                                                0,
                                                                0.5
                                                            )
                                                            0px 0px 4px;
                                                    "
                                                ></div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center font-semibold text-2xl my-4">
                                Dust &amp; Scratch Remove
                            </h3>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 px-2"
                            >
                                At the time this jewelry image was taken, some
                                dust was captured on the piece. We removed the
                                dust and made it look more refined and polished.
                            </p>
                        </div>
                        <div class="space-lg">
                            <div>
                                <div
                                    class="max-w-fit bg-gray-50 p-6 md:p-10 lg:p-0"
                                >
                                    <div
                                        aria-label="Compare Slider"
                                        data-rcs="root"
                                        style="
                                            position: relative;
                                            display: flex;
                                            overflow: hidden;
                                            touch-action: pan-y;
                                            user-select: none;
                                            width: 100%;
                                            height: 100%;
                                        "
                                    >
                                        <img
                                            alt="Before"
                                            draggable="false"
                                            loading="lazy"
                                            width="500"
                                            height="500"
                                            decoding="async"
                                            data-nimg="1"
                                            class=""
                                            sizes="(max-width: 768px) 50%, 33%"
                                            src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2Fcompare%2F2%2Fbefore.jpg&w=1920&q=75"
                                            style="color: transparent"
                                        />
                                        <div
                                            data-rcs="clip-item"
                                            style="
                                                position: absolute;
                                                top: 0px;
                                                left: 0px;
                                                width: 100%;
                                                height: 100%;
                                                user-select: none;
                                                will-change: clip-path,
                                                    transition;
                                                clip-path: inset(
                                                    0px 0px 0px 50%
                                                );
                                            "
                                        >
                                            <img
                                                alt="After"
                                                draggable="false"
                                                loading="lazy"
                                                width="500"
                                                height="500"
                                                decoding="async"
                                                data-nimg="1"
                                                class=""
                                                sizes="(max-width: 768px) 50%, 33%"
                                                src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2Fcompare%2F2%2Fafter.jpg&w=1920&q=75"
                                                style="color: transparent"
                                            />
                                        </div>
                                        <button
                                            aria-orientation="horizontal"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            aria-valuenow="50"
                                            data-rcs="handle-container"
                                            role="slider"
                                            style="
                                                position: absolute;
                                                top: 0px;
                                                height: 100%;
                                                background: none;
                                                border: 0px;
                                                padding: 0px;
                                                pointer-events: all;
                                                appearance: none;
                                                outline: 0px;
                                                transform: translate3d(
                                                    -50%,
                                                    0px,
                                                    0px
                                                );
                                                left: 50%;
                                            "
                                        >
                                            <div
                                                aria-label="Drag to move"
                                                class="__rcs-handle-root"
                                                style="
                                                    display: flex;
                                                    flex-direction: column;
                                                    place-items: center;
                                                    height: 100%;
                                                    cursor: ew-resize;
                                                    pointer-events: none;
                                                    color: rgb(255, 255, 255);
                                                "
                                            >
                                                <div
                                                    class="__rcs-handle-line"
                                                    style="
                                                        flex-grow: 1;
                                                        height: 100%;
                                                        width: 4px;
                                                        background-color: currentcolor;
                                                        pointer-events: auto;
                                                        box-shadow: rgba(
                                                                0,
                                                                0,
                                                                0,
                                                                0.5
                                                            )
                                                            0px 0px 4px;
                                                    "
                                                ></div>
                                                <div
                                                    class="__rcs-handle-button"
                                                    style="
                                                        display: grid;
                                                        grid-auto-flow: column;
                                                        gap: 8px;
                                                        place-content: center;
                                                        flex-shrink: 0;
                                                        width: 56px;
                                                        height: 56px;
                                                        border-radius: 50%;
                                                        border: 4px solid white;
                                                        pointer-events: auto;
                                                        backdrop-filter: none;
                                                        background-color: rgba(
                                                            0,
                                                            0,
                                                            0,
                                                            0.125
                                                        );
                                                        box-shadow: none;
                                                    "
                                                >
                                                    <div
                                                        class="__rcs-handle-arrow"
                                                        style="
                                                            width: 0px;
                                                            height: 0px;
                                                            border-top: 8px
                                                                solid
                                                                transparent;
                                                            border-right: 10px
                                                                solid;
                                                            border-bottom: 8px
                                                                solid
                                                                transparent;
                                                        "
                                                    ></div>
                                                    <div
                                                        class="__rcs-handle-arrow"
                                                        style="
                                                            width: 0px;
                                                            height: 0px;
                                                            border-top: 8px
                                                                solid
                                                                transparent;
                                                            border-right: 10px
                                                                solid;
                                                            border-bottom: 8px
                                                                solid
                                                                transparent;
                                                            transform: rotate(
                                                                180deg
                                                            );
                                                        "
                                                    ></div>
                                                </div>
                                                <div
                                                    class="__rcs-handle-line"
                                                    style="
                                                        flex-grow: 1;
                                                        height: 100%;
                                                        width: 4px;
                                                        background-color: currentcolor;
                                                        pointer-events: auto;
                                                        box-shadow: rgba(
                                                                0,
                                                                0,
                                                                0,
                                                                0.5
                                                            )
                                                            0px 0px 4px;
                                                    "
                                                ></div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center font-semibold text-2xl my-4">
                                Poor Reflection Remove
                            </h3>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 px-2"
                            >
                                Shiny jewelry often has many reflections when
                                photographed. In this piece, unwanted
                                reflections were removed to give it a more
                                expensive look.
                            </p>
                        </div>
                        <div class="space-lg">
                            <div>
                                <div
                                    class="max-w-fit bg-gray-50 p-6 md:p-10 lg:p-0"
                                >
                                    <div
                                        aria-label="Compare Slider"
                                        data-rcs="root"
                                        style="
                                            position: relative;
                                            display: flex;
                                            overflow: hidden;
                                            touch-action: pan-y;
                                            user-select: none;
                                            width: 100%;
                                            height: 100%;
                                        "
                                    >
                                        <img
                                            alt="Before"
                                            draggable="false"
                                            loading="lazy"
                                            width="500"
                                            height="500"
                                            decoding="async"
                                            data-nimg="1"
                                            class=""
                                            sizes="(max-width: 768px) 50%, 33%"
                                            src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2Fcompare%2F3%2Fbefore.jpg&w=1920&q=75"
                                            style="color: transparent"
                                        />
                                        <div
                                            data-rcs="clip-item"
                                            style="
                                                position: absolute;
                                                top: 0px;
                                                left: 0px;
                                                width: 100%;
                                                height: 100%;
                                                user-select: none;
                                                will-change: clip-path,
                                                    transition;
                                                clip-path: inset(
                                                    0px 0px 0px 50%
                                                );
                                            "
                                        >
                                            <img
                                                alt="After"
                                                draggable="false"
                                                loading="lazy"
                                                width="500"
                                                height="500"
                                                decoding="async"
                                                data-nimg="1"
                                                class=""
                                                sizes="(max-width: 768px) 50%, 33%"
                                                src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2Fcompare%2F3%2Fafter.jpg&w=1920&q=75"
                                                style="color: transparent"
                                            />
                                        </div>
                                        <button
                                            aria-orientation="horizontal"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                            aria-valuenow="50"
                                            data-rcs="handle-container"
                                            role="slider"
                                            style="
                                                position: absolute;
                                                top: 0px;
                                                height: 100%;
                                                background: none;
                                                border: 0px;
                                                padding: 0px;
                                                pointer-events: all;
                                                appearance: none;
                                                outline: 0px;
                                                transform: translate3d(
                                                    -50%,
                                                    0px,
                                                    0px
                                                );
                                                left: 50%;
                                            "
                                        >
                                            <div
                                                aria-label="Drag to move"
                                                class="__rcs-handle-root"
                                                style="
                                                    display: flex;
                                                    flex-direction: column;
                                                    place-items: center;
                                                    height: 100%;
                                                    cursor: ew-resize;
                                                    pointer-events: none;
                                                    color: rgb(255, 255, 255);
                                                "
                                            >
                                                <div
                                                    class="__rcs-handle-line"
                                                    style="
                                                        flex-grow: 1;
                                                        height: 100%;
                                                        width: 4px;
                                                        background-color: currentcolor;
                                                        pointer-events: auto;
                                                        box-shadow: rgba(
                                                                0,
                                                                0,
                                                                0,
                                                                0.5
                                                            )
                                                            0px 0px 4px;
                                                    "
                                                ></div>
                                                <div
                                                    class="__rcs-handle-button"
                                                    style="
                                                        display: grid;
                                                        grid-auto-flow: column;
                                                        gap: 8px;
                                                        place-content: center;
                                                        flex-shrink: 0;
                                                        width: 56px;
                                                        height: 56px;
                                                        border-radius: 50%;
                                                        border: 4px solid white;
                                                        pointer-events: auto;
                                                        backdrop-filter: none;
                                                        background-color: rgba(
                                                            0,
                                                            0,
                                                            0,
                                                            0.125
                                                        );
                                                        box-shadow: none;
                                                    "
                                                >
                                                    <div
                                                        class="__rcs-handle-arrow"
                                                        style="
                                                            width: 0px;
                                                            height: 0px;
                                                            border-top: 8px
                                                                solid
                                                                transparent;
                                                            border-right: 10px
                                                                solid;
                                                            border-bottom: 8px
                                                                solid
                                                                transparent;
                                                        "
                                                    ></div>
                                                    <div
                                                        class="__rcs-handle-arrow"
                                                        style="
                                                            width: 0px;
                                                            height: 0px;
                                                            border-top: 8px
                                                                solid
                                                                transparent;
                                                            border-right: 10px
                                                                solid;
                                                            border-bottom: 8px
                                                                solid
                                                                transparent;
                                                            transform: rotate(
                                                                180deg
                                                            );
                                                        "
                                                    ></div>
                                                </div>
                                                <div
                                                    class="__rcs-handle-line"
                                                    style="
                                                        flex-grow: 1;
                                                        height: 100%;
                                                        width: 4px;
                                                        background-color: currentcolor;
                                                        pointer-events: auto;
                                                        box-shadow: rgba(
                                                                0,
                                                                0,
                                                                0,
                                                                0.5
                                                            )
                                                            0px 0px 4px;
                                                    "
                                                ></div>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center font-semibold text-2xl my-4">
                                Shadow Making
                            </h3>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 px-2"
                            >
                                Shadows give the product a natural look.
                                However, due to a two-sided light source,
                                shadows might not be captured properly. We
                                create and adjust them using Photoshop.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="wrapper-container space-lg mx-5">
                    <div
                        class="grid h-auto grid-cols-1 gap-y-10 lg:grid-cols-2"
                    >
                        <div
                            class="col-span-1 flex max-w-3xl flex-col justify-center space-y-10"
                        >
                            <h2
                                class="text-4xl font-semibold lg:text-7xl lg:!leading-normal"
                                style="line-height: 100px"
                            >
                                High-Quality <br />
                                Results
                            </h2>
                            <p
                                class="text-sm !leading-6 my-5 servicetext md:text-lg lg:!leading-7 max-w-md"
                            >
                                Our background removal services focus on
                                delivering high-resolution images that maintain
                                the integrity of the original photo. This
                                attention to detail ensures that every image
                                looks professional and polished.
                            </p>
                        </div>
                        <div
                            class="relative col-span-1 h-[350px] w-full lg:h-[550px]"
                        >
                            <img
                                alt="bZm Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    left: 0;
                                    top: 0;
                                    right: 0;
                                    bottom: 0;
                                    color: transparent;
                                "
                                sizes="(max-width: 768px) 50%, 33%"
                                src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2F1%2F1.jpg&w=1920&q=75"
                            />
                        </div>
                    </div>
                    <div
                        class="flex grid-cols-1 my-5 flex-col-reverse items-center gap-10 lg:grid lg:grid-cols-5"
                    >
                        <div class="col-span-2">
                            <div>
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    width="550"
                                    height="550"
                                    decoding="async"
                                    data-nimg="1"
                                    class="object-contain"
                                    style="color: transparent"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2F1%2F2.jpg&w=1920&q=75"
                                />
                            </div>
                        </div>
                        <div class="col-span-3">
                            <div class="max-w-3xl space-y-10">
                                <h2
                                    class="text-4xl font-semibold !leading-none lg:text-7xl lg:!leading-normal"
                                    style="line-height: 130px"
                                >
                                    Precisely edited images by Humans
                                </h2>
                                <p
                                    class="text-sm !leading-6 my-4 servicetext md:text-lg lg:!leading-7 max-w-md"
                                >
                                    We remove backgrounds manually—that's the
                                    secret of our outstanding quality work—at a
                                    price that starts at just $0.30, providing
                                    great value for results that can generate
                                    thousands.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-color13">
                    <div
                        class="space-lg col-span-1 text-center md:col-span-2 lg:col-span-3"
                    >
                        <h2 class="text-2xl leading-tight lg:text-4xl">
                            <span>Why choose &nbsp;</span>
                            <span class="green-line font-bold"
                                ><a href="/">bZm graphics</a></span
                            >
                        </h2>
                        <p
                            class="text-sm !leading-6 my-4 servicetext md:text-lg lg:!leading-7 mx-auto max-w-3xl"
                        >
                            Go with bZm Graphics for expertise, trustworthiness,
                            and amazing support that make your brand stand out.
                        </p>
                    </div>
                    <div
                        class="wrapper-container space-xl grid grid-cols-1 gap-4 text-center md:grid-cols-2 lg:grid-cols-3 lg:gap-10"
                    >
                        <div class="space-md col-span-1">
                            <div
                                class="relative mx-auto h-10 w-10 lg:h-20 lg:w-20"
                            >
                                <img
                                    alt="common:whyChooseUsSection.title3"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain iconsss"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        left: 0;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        color: transparent;
                                    "
                                    src="https://www.bzmgraphics.com/icons/trustworthy.svg"
                                />
                            </div>
                            <p class="text-2xl my-4 font-bold">Trustworthy</p>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 mx-auto max-w-sm"
                            >
                                We have been working in this industry since
                                2015. We have built trust among our clients.
                            </p>
                        </div>
                        <div class="space-md col-span-1">
                            <div
                                class="relative mx-auto h-10 w-10 lg:h-20 lg:w-20"
                            >
                                <img
                                    alt="common:whyChooseUsSection.title4"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain iconsss"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        left: 0;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        color: transparent;
                                    "
                                    src="https://www.bzmgraphics.com/icons/expert.svg"
                                />
                            </div>
                            <p class="text-2xl my-4 font-bold">Expert</p>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 mx-auto max-w-sm"
                            >
                                Our team consists of skilled and experienced
                                eCommerce retouchers with 8 years of expertise.
                            </p>
                        </div>
                        <div class="space-md col-span-1">
                            <div
                                class="relative mx-auto h-10 w-10 lg:h-20 lg:w-20"
                            >
                                <img
                                    alt="common:whyChooseUsSection.title5"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain iconsss"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        left: 0;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        color: transparent;
                                    "
                                    src="https://www.bzmgraphics.com/icons/high-capacity.svg"
                                />
                            </div>
                            <p class="text-2xl my-4 font-bold">High Capacity</p>
                            <p
                                class="!leading-6 servicetext md:text-lg lg:!leading-7 mx-auto max-w-sm"
                            >
                                We can handle any volume and complexity of
                                projects with exceptional proficiency.
                            </p>
                        </div>
                        <div class="space-md col-span-1">
                            <div
                                class="relative mx-auto h-10 w-10 lg:h-20 lg:w-20"
                            >
                                <img
                                    alt="common:whyChooseUsSection.title6"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain iconsss"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        left: 0;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        color: transparent;
                                    "
                                    src="https://www.bzmgraphics.com/icons/delivery-on-time.svg"
                                />
                            </div>
                            <p class="text-2xl my-4 font-bold">
                                Delivery On-Time
                            </p>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 mx-auto max-w-sm"
                            >
                                Your deadlines matter to us, and we'll deliver
                                your work on time.
                            </p>
                        </div>
                        <div class="space-md col-span-1">
                            <div
                                class="relative mx-auto h-10 w-10 lg:h-20 lg:w-20"
                            >
                                <img
                                    alt="common:whyChooseUsSection.title7"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain iconsss"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        left: 0;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        color: transparent;
                                    "
                                    src="https://www.bzmgraphics.com/icons/affordability.svg"
                                />
                            </div>
                            <p class="text-2xl my-4 font-bold">Affordability</p>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 mx-auto max-w-sm"
                            >
                                We offer competitive prices and value for money.
                                Deals that are affordable and satisfactory.
                            </p>
                        </div>
                        <div class="space-md col-span-1">
                            <div
                                class="relative mx-auto h-10 w-10 lg:h-20 lg:w-20"
                            >
                                <img
                                    alt="common:whyChooseUsSection.title8"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="object-contain iconsss"
                                    style="
                                        /* position: absolute; */
                                        height: 100%;
                                        width: 100%;
                                        left: 0;
                                        top: 0;
                                        right: 0;
                                        bottom: 0;
                                        color: transparent;
                                    "
                                    src="https://www.bzmgraphics.com/icons/support.svg"
                                />
                            </div>
                            <p class="text-2xl my-4 font-bold">Support</p>
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 mx-auto max-w-sm"
                            >
                                We're here 24/7, dedicated to customer happiness
                                and satisfaction.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="wrapper-container mx-5">
                    <div
                        class="grid place-items-center items-center gap-10 md:gap-16 xl:grid-cols-2"
                    >
                        <div class="space-lg flex flex-col justify-center">
                            <h2
                                class="text-3xl font-bold !leading-tight lg:text-start lg-text-6xl"
                            >
                                Don't Let Backgrounds Hold You Back!
                            </h2>
                            <p
                                class="text-sm !leading-6 servicetext my-5 md:text-lg lg:!leading-7 lg:text-start"
                            >
                                Experience the difference that professional
                                background removal can make. Clean,
                                distraction-free images await!.
                            </p>
                            <div class="lg:mx-0">
                                <a
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                    href="/contact"
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
                                        >Contact Us</span
                                    ></a
                                >
                            </div>
                        </div>
                        <div class="relative w-full lg:h-[530px]">
                            <img
                                alt="demo"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-contain"
                                style="
                                    /* position: absolute; */
                                    height: 400px;
                                    width: 100%;
                                    left: 0;
                                    top: 0;
                                    right: 0;
                                    bottom: 0;
                                    color: transparent;
                                "
                                sizes="(max-width: 768px) 50%, 33%"
                                src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fbackground-remove%2F3.png&w=1920&q=75"
                            />
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
        </div>
    </MainLayout>
</template>

<style scoped>
@media (min-width: 992px) {
    .lg-text-6xl {
        font-size: 4.75rem;
        /* line-height: 1; */
    }
}
.iconsss {
    width: 100px !important;
    margin: 30px auto;
}
.bg-color13 {
    --tw-bg-opacity: 1;
    background-color: rgb(233 243 225 / var(--tw-bg-opacity));
    padding: 7%;
}
.green-line:after {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 6px;
    background-image: url("https://www.bzmgraphics.com/horizontal-line.png");
    background-size: cover;
    background-repeat: no-repeat;
    left: 0;
}
.wrapper-container {
    margin-left: auto;
    margin-right: auto;
    padding: 2.5rem 1rem;
}
@media (min-width: 768px) {
    .lg-text-sizt {
        font-size: 80px;
    }
}
.servicessection {
    background-color: #e9f3e1;
}
.servicetext {
    font-size: 23px;
    line-height: 39px !important;
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

.lg\:grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}
.bg-color-13 {
    --tw-bg-opacity: 1;
    background-color: rgb(16 16 16 / var(--tw-bg-opacity));
}
</style>
