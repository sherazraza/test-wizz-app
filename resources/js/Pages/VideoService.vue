<script>
import LogoSlider from "@/Components/LogoSlider.vue";

import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "VideoService",
    components: {
        MainLayout, // ✅ Register here
    },
    props: {
        section: Object,
        services: Array,
    },
};
</script>

<template>
    <MainLayout>
        <div class="flex flex-col justify-between">
            <!-- Header Section -->

            <main>
                <div
                    class="grid max-h-[1100px] place-items-center bg-[url('https://www.bzmgraphics.com/shape/shape-3.svg')] bg-left bg-no-repeat lg:h-screen"
                >
                    <div
                        class="wrapper-container grid grid-cols-1 place-items-center gap-10 lg:h-[750px] lg:grid-cols-2"
                    >
                        <div class="mx-auto my-auto max-w-4xl">
                            <div class="mx-auto max-w-2xl lg:mx-0">
                                <div
                                    class="flex items-center justify-center gap-x-4 lg:justify-start lg:gap-x-10"
                                >
                                    <h1
                                        class="relative text-[60px] font-medium leading-tight md:text-[107px]"
                                    >
                                        Video
                                        <div
                                            class="absolute -right-28 top-0 hidden size-20 md:block"
                                        >
                                            <img
                                                alt="icon"
                                                draggable="false"
                                                loading="lazy"
                                                decoding="async"
                                                data-nimg="fill"
                                                class=""
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
                                                src="https://www.bzmgraphics.com/_next/image?url=%2Ficons%2Fvideo-editing.png&w=1920&q=75"
                                            />
                                        </div>
                                    </h1>
                                </div>
                                <div
                                    class="mx-auto mt-4 grid max-w-xs grid-cols-2 gap-x-4 lg:max-w-max lg:items-center"
                                >
                                    <p
                                        class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 basis-1/4"
                                    >
                                        {{ section?.main_description }}
                                    </p>
                                    <h2
                                        class="text-[40px] font-medium leading-tight md:text-[83px]"
                                    >
                                        Editing
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div
                            class="relative mx-auto h-[461px] bg-[url('/models/model-5.webp')] bg-cover bg-no-repeat"
                        >
                            <div style="width: 361px; height: 461px">
                                <div
                                    style="
                                        width: 100%;
                                        height: 100%;
                                        overflow: hidden;
                                    "
                                    data-vimeo-initialized="true"
                                >
                                    <video
                                        :src="section?.main_image"
                                        autoplay
                                        muted
                                        style="width: 100%; height: 100%"
                                    ></video>
                                </div>
                            </div>
                            <div
                                class="absolute -top-8 left-8 -z-10 h-[461px] w-[380px]"
                            >
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class=""
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
                                    src="https://www.bzmgraphics.com/shape/shape-6.svg"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-color-4">
                    <div class="wrapper-container mx-auto">
                        <div
                            class="mx-auto space-y-4 lg:max-w-2xl lg:space-y-10"
                        >
                            <h2
                                class="text-center text-[30px] font-medium !leading-tight lg:text-[53px]"
                            >
                                <span class="">WHAT WE</span>
                                <span class="text-brand">DO</span>
                            </h2>
                            <div class="pb-4 pl-[50%] lg:pb-10">
                                <div class="border-l border-[#808080]">
                                    <p
                                        class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 max-w-[220px] p-4 lg:max-w-md"
                                    >
                                        Video retouching for e-commerce, apparel
                                        brands, and product videographers is our
                                        main speciality but not limited to.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="grid gap-10 md:grid-cols-2 lg:grid-cols-3 lg:gap-4 my-5 mx-5"
                        >
                            <div class="relative">
                                <p
                                    class="text-sm !leading-6 servicetext2 servicetextabs md:text-lg lg:!leading-7 absolute bottom-0 right-0 z-10 max-w-[250px] bg-white p-4"
                                >
                                    Product videos are up 84% more likely to get
                                    views while edited perfectly. We make sure
                                    the perfect background, color, lighting and
                                    size to achieve that.
                                </p>
                                <div style="width: 255px; height: 368px">
                                    <div
                                        style="
                                            width: 100%;
                                            height: 100%;
                                            overflow: hidden;
                                        "
                                        data-vimeo-initialized="true"
                                    >
                                        <iframe
                                            src="https://player.vimeo.com/video/1001531482?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                            width="240"
                                            height="426"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                            title="product"
                                            data-ready="true"
                                            style="width: 100%; height: 100%"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <p
                                    class="text-sm !leading-6 servicetextabs md:text-lg lg:!leading-7 absolute bottom-0 right-0 z-10 max-w-[250px] bg-white p-4"
                                >
                                    Make your model shoot outstanding by using
                                    our blemish removal, color
                                    corrections/grading, background removal and
                                    video cropping services.
                                </p>
                                <div style="width: 255px; height: 368px">
                                    <div
                                        style="
                                            width: 100%;
                                            height: 100%;
                                            overflow: hidden;
                                        "
                                        data-vimeo-initialized="true"
                                    >
                                        <iframe
                                            src="https://player.vimeo.com/video/1001531439?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                            width="240"
                                            height="426"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                            title="model"
                                            data-ready="true"
                                            style="width: 100%; height: 100%"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="relative">
                                <p
                                    class="text-sm !leading-6 servicetextabs md:text-lg lg:!leading-7 absolute bottom-0 right-0 z-10 max-w-[250px] bg-white p-4"
                                >
                                    Editorial Video post-production is where you
                                    tell a story with your video. We make sure
                                    to make it look professional and always what
                                    you expect.
                                </p>
                                <div style="width: 255px; height: 368px">
                                    <div
                                        style="
                                            width: 100%;
                                            height: 100%;
                                            overflow: hidden;
                                        "
                                        data-vimeo-initialized="true"
                                    >
                                        <iframe
                                            src="https://player.vimeo.com/video/885128957?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                            width="240"
                                            height="426"
                                            frameborder="0"
                                            allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                            title="video-editing-4"
                                            data-ready="true"
                                            style="width: 100%; height: 100%"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="mx-auto grid max-w-[2000px] grid-cols-1 bg-color10 lg:grid-cols-2"
                >
                    <div
                        class="aspect-square bg-[url('https://vumbnail.com/884765174.jpg')] bg-cover bg-no-repeat"
                    >
                        <div style="width: 100%; height: 100%">
                            <div
                                style="
                                    width: 100%;
                                    height: 100%;
                                    overflow: hidden;
                                "
                                data-vimeo-initialized="true"
                            >
                                <video
                                    :src="section?.video_service_image"
                                    frameborder="0"
                                    autoplay
                                    muted
                                    title="hero-video"
                                    data-ready="true"
                                    style="width: 100%; height: 100%"
                                ></video>
                            </div>
                        </div>
                    </div>
                    <div
                        class="wrapper-container space-lg place-self-center text-center"
                    >
                        <h2
                            class="text-6xl font-bold !leading-tight lg:text-7xl text-center"
                            style="line-height: 39px"
                        >
                            <span class="text-white mx-3">Video</span>
                            <span class="text-brand">Editing</span>
                            <br />
                            <span class="text-white">Service</span>
                        </h2>
                        <p
                            class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 !text-white"
                        >
                            {{ section?.video_service_description }}
                        </p>
                        <div class="py-4">
                            <a
                                target=""
                                rel="noopener noreferrer"
                                class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-white text-black"
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

                <div class="wrapper-container p-5">
                    <div class="flex justify-center">
                        <h2
                            class="space-md flex flex-col items-start text-4xl font-medium lg:text-6xl"
                            style="line-height: 80px"
                        >
                            <span>OUR POPULAR</span
                            ><span class="text-brand">SERVICES</span>
                        </h2>
                    </div>
                    <div class="mx-auto flex max-w-3xl justify-center py-8">
                        <div class="flex-1"></div>
                        <div class="flex-1 border-l border-[#808080]">
                            <p
                                class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 p-4"
                            >
                                {{ section?.services_description }}
                            </p>
                        </div>
                    </div>
                    <div
                        v-for="(service, index) in services"
                        :key="index"
                        class="mb-8 grid grid-cols-1 p-3 place-items-center gap-4 border-t pt-8 lg:grid-cols-3"
                    >
                        <h3
                            class="col-span-1 font-semibold text-3xl 2xl:text-[30px]"
                        >
                            {{ service.title }}
                        </h3>
                        <p
                            class="servicetext md:text-lg lg:!leading-7 col-span-1 mt-3 lg:text-start"
                        >
                            {{ service.description }}
                        </p>
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
                    class="bg-color-13 mx-auto grid max-w-[3000px] grid-cols-1 lg:grid-cols-2"
                >
                    <div
                        class="wrapper-container w max-w-xl space-y-10 place-self-center"
                    >
                        <h2
                            class="flex flex-col text-center text-[40px] leading-tight lg:text-start lg:text-[80px]"
                        >
                            <span class="!text-white">RELIABLE</span
                            ><span class="pl-[25%] !text-white">CREATIVE</span
                            ><span class="text-brand">TRENDY</span>
                        </h2>
                        <p
                            class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7 text-center !text-white lg:ml-[25%] text-lg-start"
                        >
                            {{ section?.reliable_description }}
                        </p>
                    </div>
                    <div
                        style="width: 100%; aspect-ratio: undefined / undefined"
                    >
                        <div
                            style="font-family: Inter"
                            class="cld-video-player cld-fluid video-js vjs-controls-disabled vjs-workinghover vjs-v8 vjs-fluid black-dress-v1712059669-dimensions cld-video-player-black-dress-v1712059669 cld-video-player-skin-dark vjs-contextmenu vjs-context-menu vjs-vtt-thumbnails vjs-http-source-selector vjs-has-started vjs-playing vjs-user-inactive"
                            id="black-dress-v1712059669"
                            tabindex="-1"
                            role="region"
                            lang="en-us"
                            translate="no"
                            aria-label="Video Player"
                        >
                            <video
                                id="black-dress-v1712059669_html5_api"
                                class="vjs-tech"
                                style="font-family: Inter"
                                tabindex="-1"
                                role="application"
                                preload="auto"
                                loop=""
                                muted="muted"
                                autoplay=""
                                poster="https://res.cloudinary.com/dnroxwdfm/video/upload/c_limit,h_400,w_700/v1//videos/black-dress-model_ntzewo.jpg"
                                :src="section?.reliable_image"
                            ></video>
                        </div>
                    </div>
                </div>

                <div class="bg-color-5 py-5">
                    <div class="wrapper-container py-5">
                        <div class="space-between">
                            <div class="vertical-space text-center">
                                <h2
                                    class="text-4xl font-semibold !leading-tight"
                                >
                                    <span>Product</span>
                                    <span class="green-line"
                                        >Retouch Video</span
                                    >
                                </h2>
                                <p
                                    class="text-sm !leading-6 my-5 servicetext md:text-lg lg:!leading-7 mx-auto max-w-3xl"
                                >
                                    {{ section?.product_retouch_description_1 }}
                                </p>
                                <div>
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
                                class="flex flex-col items-center py-5 my-5 justify-center space-y-10 lg:flex-row lg:gap-20 lg:space-y-0"
                            >
                                <div class="space-md">
                                    <h3
                                        class="mb-4 text-center text-2xl font-semibold !leading-tight"
                                    >
                                        Before Retouching
                                    </h3>
                                    <div
                                        class="aspect-[9/16] bg-[url('https://vumbnail.com/884698318.jpg')] bg-cover bg-no-repeat"
                                    >
                                        <div style="width: 100%; height: 100%">
                                            <div
                                                style="
                                                    width: 100%;
                                                    height: 100%;
                                                    overflow: hidden;
                                                "
                                                data-vimeo-initialized="true"
                                            >
                                                <iframe
                                                    src="https://player.vimeo.com/video/884698318?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                                    width="240"
                                                    height="426"
                                                    frameborder="0"
                                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                                    title="video-editing-5"
                                                    data-ready="true"
                                                    style="
                                                        width: 100%;
                                                        height: 100%;
                                                    "
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="relative hidden h-[213px] w-3 lg:block"
                                >
                                    <img
                                        alt="bZm Image"
                                        draggable="false"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class=""
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
                                        src="https://www.bzmgraphics.com/_next/image?url=%2Fshape%2Farrow-1.png&w=1920&q=75"
                                    />
                                </div>
                                <div class="space-md">
                                    <h3
                                        class="mb-4 text-center text-2xl font-semibold !leading-tight"
                                    >
                                        After Retouching
                                    </h3>
                                    <div
                                        class="aspect-[9/16] bg-[url('https://vumbnail.com/884698318.jpg')] bg-cover bg-no-repeat"
                                    >
                                        <div style="width: 100%; height: 100%">
                                            <div
                                                style="
                                                    width: 100%;
                                                    height: 100%;
                                                    overflow: hidden;
                                                "
                                                data-vimeo-initialized="true"
                                            >
                                                <iframe
                                                    src="https://player.vimeo.com/video/884698318?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                                    width="240"
                                                    height="426"
                                                    frameborder="0"
                                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                                    title="video-editing-5"
                                                    data-ready="true"
                                                    style="
                                                        width: 100%;
                                                        height: 100%;
                                                    "
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-color-5">
                    <div class="wrapper-container">
                        <div class="space-between">
                            <div class="vertical-space text-center">
                                <h2
                                    class="text-4xl font-semibold !leading-tight"
                                >
                                    <span>Product</span>
                                    <span class="green-line"
                                        >Retouch Video</span
                                    >
                                </h2>
                                <p
                                    class="text-sm !leading-6 servicetext my-5 md:text-lg lg:!leading-7 mx-auto max-w-3xl"
                                >
                                    {{ section?.product_retouch_description_2 }}
                                </p>
                                <div>
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
                                class="flex flex-col items-center my-5 py-5 justify-center space-y-10 lg:flex-row lg:gap-20 lg:space-y-0"
                            >
                                <div class="space-md">
                                    <h3
                                        class="mb-4 text-center text-2xl font-semibold !leading-tight"
                                    >
                                        Before Retouching
                                    </h3>
                                    <div
                                        class="aspect-[9/16] bg-[url('https://vumbnail.com/884698545.jpg')] bg-cover bg-no-repeat"
                                    >
                                        <div style="width: 100%; height: 100%">
                                            <div
                                                style="
                                                    width: 100%;
                                                    height: 100%;
                                                    overflow: hidden;
                                                "
                                                data-vimeo-initialized="true"
                                            >
                                                <iframe
                                                    src="https://player.vimeo.com/video/884698545?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                                    width="240"
                                                    height="426"
                                                    frameborder="0"
                                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                                    title="video-editing-6"
                                                    data-ready="true"
                                                    style="
                                                        width: 100%;
                                                        height: 100%;
                                                    "
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="relative hidden h-[213px] w-3 lg:block"
                                >
                                    <img
                                        alt="bZm Image"
                                        draggable="false"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class=""
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
                                        src="https://www.bzmgraphics.com/_next/image?url=%2Fshape%2Farrow-1.png&w=1920&q=75"
                                    />
                                </div>
                                <div class="space-md">
                                    <h3
                                        class="mb-4 text-center text-2xl font-semibold !leading-tight"
                                    >
                                        After Retouching
                                    </h3>
                                    <div
                                        class="aspect-[9/16] bg-[url('https://vumbnail.com/884698545.jpg')] bg-cover bg-no-repeat"
                                    >
                                        <div style="width: 100%; height: 100%">
                                            <div
                                                style="
                                                    width: 100%;
                                                    height: 100%;
                                                    overflow: hidden;
                                                "
                                                data-vimeo-initialized="true"
                                            >
                                                <iframe
                                                    src="https://player.vimeo.com/video/884698545?title=0&amp;byline=0&amp;portrait=0&amp;playsinline=0&amp;muted=1&amp;autoplay=1&amp;autopause=0&amp;controls=0&amp;loop=1&amp;app_id=122963"
                                                    width="240"
                                                    height="426"
                                                    frameborder="0"
                                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                                    title="video-editing-6"
                                                    data-ready="true"
                                                    style="
                                                        width: 100%;
                                                        height: 100%;
                                                    "
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
        </div>
    </MainLayout>
</template>

<style scoped>
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
.bg-color-13 {
    --tw-bg-opacity: 1;
    background-color: rgb(16 16 16 / var(--tw-bg-opacity));
}
.bg-color-5 {
    background-color: #e6f1c752;
}
.bg-color10 {
    --tw-bg-opacity: 1;
    background-color: rgb(26 26 26 / var(--tw-bg-opacity));
}
.bg-brand {
    --tw-bg-opacity: 1;
    background-color: rgb(146 196 106 / var(--tw-bg-opacity));
}
.servicessection {
    background-color: #e9f3e1;
}
.servicetext {
    font-size: 23px;
    line-height: 39px !important;
}
.servicetextabs {
    position: absolute;
    left: 20%;
    top: 50%;
}

.bg-color-4 {
    background-color: #ffedd63d;
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
