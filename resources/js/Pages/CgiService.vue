<script>
import LogoSlider from "@/Components/LogoSlider.vue";
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "CgiService",
    components: {
        MainLayout, // ✅ Register here
    },
};
</script>

<template>
    <MainLayout>
        <div class="flex flex-col justify-between">
            <main>
                <div class="flex flex-col">
                    <div class="items-center px-4 lg:flex lg:h-[90vh] lg:px-0">
                        <div class="flex-1">
                            <div
                                class="space-md col-span-1 mx-auto mt-10 max-w-md lg:text-start"
                            >
                                <h1
                                    class="space-x-3 text-5xl font-bold lg:text-8xl"
                                >
                                    <span>3D</span
                                    ><span class="text-4xl">and</span
                                    ><span class="text-brand">CGI</span>
                                </h1>
                                <p class="my-3 servicetext">
                                    bZm Graphics delivers ready to use
                                    comprehensive solutions for e-commerce and
                                    product 3D &amp; CGI that blend effective
                                    design with the latest technologies. We help
                                    bring Your Idea Into a Reality
                                </p>
                                <div class="py-10">
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
                        <div
                            class="h-full flex-1 !overflow-hidden bg-secondary"
                        >
                            <div>
                                <div class="view3d-wrapper">
                                    <canvas
                                        class="w-full h-[350px] w-full lg:h-[100vh]"
                                        width="948"
                                        height="552"
                                        style="cursor: grab"
                                    ></canvas>
                                    <div
                                        class="view3d-annotation-wrapper"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="marquee bg-black text-white pb-3 pt-3">
                        <div class="d-flex marquee-track my-auto">
                            <div class="me-5 my-auto">
                                <b>Image Retouching</b>
                            </div>
                            <div class="me-5">Editorial Retouching</div>
                            <div class="me-5">Photo Color Correction</div>
                            <div class="me-5">Video Editing</div>
                            <div class="me-5">E-Commerce Editing</div>
                            <div class="me-5">CGI & 3D</div>
                        </div>
                    </div>
                </div>

                <div class="bg-color-11 p-5">
                    <div
                        class="wrapper-container grid grid-cols-1 text-center lg:grid-cols-2 lg:gap-4 text-lg-start"
                    >
                        <div class="px-md-5">
                            <h2
                                class="mr-auto flex max-w-md flex-col text-center text-4xl font-medium !leading-normal lg:text-6xl"
                            >
                                <span>Level Up Your</span>
                                <span class="text-brand">Product Visual</span>
                            </h2>
                        </div>
                        <div
                            class="flex flex-col gap-12 border-[#808080] lg:flex-row border-left px-lg-3"
                        >
                            <div class="space-y-6 px-md-3">
                                <h2
                                    class="text-3xl font-semibold !leading-tight"
                                >
                                    <span class="green-line">3D</span>
                                </h2>
                                <p
                                    class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7"
                                >
                                    When selling online, specially in a
                                    marketplace the competition is quite high.
                                    We can help you to be top of the list with
                                    our photo editing skills. We have a team of
                                    250+ photo editors always ready to help you.
                                </p>
                            </div>
                            <div class="space-y-6">
                                <h2
                                    class="text-3xl font-semibold !leading-tight"
                                >
                                    <span class="green-line">CGI</span>
                                </h2>
                                <p
                                    class="text-sm !leading-6 servicetext md:text-lg lg:!leading-7"
                                >
                                    Product video provides a great online
                                    shopping experience for the buyers. Our
                                    video editing include Combining Clips,
                                    Sizing, Cropping, White Balance, Color
                                    Correction, Text Overlay and more to make
                                    your video stand out.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-color-11 my-5">
                        <div
                            class="wrapper-container space-md flex flex-col items-center justify-center !pt-0 text-center"
                        >
                            <h2
                                class="text-3xl font-semibold leading-tight lg:text-6xl"
                            >
                                <span class="text-brand mx-3"
                                    >Crafting<!-- -->
                                </span>
                                <span> <!-- -->New Realities</span>
                            </h2>
                            <p
                                class="text-sm !leading-6 servicetext mt-5 md:text-lg lg:!leading-7 mx-auto max-w-2xl"
                            >
                                Creating 3D/CGI product animations is an
                                effective method for quickly conveying detailed
                                product information and evoking emotions in
                                viewers, ultimately influencing their purchasing
                                decisions. Emphasizing emotive presentations
                            </p>
                        </div>
                    </div>
                </div>

                <section class="outter hero-video">
                    <section class="video-container">
                        <video muted="" autoplay="" loop="">
                            <source
                                src="https://res.cloudinary.com/dnroxwdfm/video/upload/v1709813415/beauty-products_binnzv.mp4"
                                type="video/mp4"
                            />
                        </video>
                        <div class="callout">
                            <div
                                class="space-md flex flex-col items-center justify-center py-8 text-center lg:h-[650px] lg:px-0 lg:py-0"
                            >
                                <h2
                                    class="text-4xl font-semibold leading-tight lg:text-6xl"
                                >
                                    <span class="text-brand"
                                        >Motion Graphics and<!-- -->
                                    </span>
                                    <br />
                                    <span class="text-white mt-3">
                                        <!-- -->Animations</span
                                    >
                                </h2>
                                <p
                                    class="mx-auto max-w-2xl my-3 servicetext text-white"
                                >
                                    Simplify the process of building customer
                                    trust by using the our product review app to
                                    gather authentic reviews from multiple
                                    platforms, providing valuable social proof!
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
                    </section>
                </section>

                <div class="wrapper-container">
                    <div
                        class="grid place-items-center items-center gap-10 md:gap-16 xl:grid-cols-2"
                    >
                        <div
                            class="space-lg flex flex-col justify-center order-2"
                        >
                            <h2
                                class="text-4xl font-bold !leading-tight lg:text-start lg:text-6xl"
                            >
                                Amazing experience for E-commerce
                            </h2>
                            <p
                                class="text-sm !leading-6 servicetext my-5 md:text-lg lg:!leading-7 lg:text-start"
                            >
                                3D product models for eCommerce significantly
                                increase customer engagement by providing a more
                                interactive and immersive shopping experience.
                                Allow your customers to fully explore products
                                from every angles.
                            </p>
                            <div class="lg:mx-0">
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
                                style="
                                    position: relative;
                                    display: flex;
                                    overflow: hidden;
                                    touch-action: pan-y;
                                    user-select: none;
                                    -khtml-user-select: none;
                                    -ms-user-select: none;
                                    -moz-user-select: none;
                                    -webkit-user-select: none;
                                    width: 100%;
                                    height: 100%;
                                "
                                data-rcs="root"
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
                                    style="color: transparent"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fcgi%2Fbefore.jpg&w=1920&q=75"
                                />
                                <div
                                    style="
                                        position: absolute;
                                        top: 0px;
                                        left: 0px;
                                        width: 100%;
                                        height: 100%;
                                        will-change: clip-path, transition;
                                        user-select: none;
                                        clip-path: inset(0px 0px 0px 50%);
                                    "
                                    data-rcs="clip-item"
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
                                        style="color: transparent"
                                        sizes="(max-width: 768px) 50%, 33%"
                                        src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Fcgi%2Fafter.jpg&w=1920&q=75"
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
                                            color: #fff;
                                        "
                                    >
                                        <div
                                            class="__rcs-handle-line"
                                            style="
                                                flex-grow: 1;
                                                height: 100%;
                                                width: 4px;
                                                background-color: currentColor;
                                                pointer-events: auto;
                                                box-shadow: 0 0 4px
                                                    rgba(0, 0, 0, 0.5);
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
                                                border-style: solid;
                                                border-width: 2px;
                                                pointer-events: auto;
                                                backdrop-filter: none;
                                                -webkit-backdrop-filter: blur(
                                                    7px
                                                );
                                                background-color: rgba(
                                                    0,
                                                    0,
                                                    0,
                                                    0.125
                                                );
                                                box-shadow: none;
                                                border: 4px solid white;
                                            "
                                        >
                                            <div
                                                class="__rcs-handle-arrow"
                                                style="
                                                    width: 0;
                                                    height: 0;
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
                                                    width: 0;
                                                    height: 0;
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
                                                background-color: currentColor;
                                                pointer-events: auto;
                                                box-shadow: 0 0 4px
                                                    rgba(0, 0, 0, 0.5);
                                            "
                                        ></div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-container space-lg py-5">
                    <div
                        class="space-md flex flex-col items-center justify-center text-center"
                    >
                        <h2
                            class="text-4xl font-semibold leading-tight lg:text-6xl"
                        >
                            <span class="text-brand"
                                >Motion Graphics and &nbsp;</span
                            >
                            <span>Animations</span>
                        </h2>
                        <p
                            class="text-sm !leading-6 servicetext my-3 md:text-lg lg:!leading-7 mx-auto max-w-2xl"
                        >
                            Simplify the process of building customer trust by
                            using the our product review app to gather authentic
                            reviews from multiple platforms, providing valuable
                            social proof!
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="view3d-wrapper">
                                <canvas
                                    class="w-full h-auto bg-black/10 lg:h-[650px]"
                                    width="1657"
                                    height="975"
                                    style="cursor: grab"
                                ></canvas>
                                <div class="view3d-annotation-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-container space-xl !pt-0 p-5">
                    <div
                        class="te space-md flex flex-col items-center justify-center text-center"
                    >
                        <h2
                            class="text-3xl font-semibold leading-tight lg:text-5xl"
                        >
                            How it works
                        </h2>
                    </div>
                    <div
                        class="grid grid-cols-1 py-5 gap-x-10 lg:grid-cols-2 lg:gap-10"
                    >
                        <div
                            class="col-span-1 flex flex-col items-center gap-5 lg:flex-row"
                        >
                            <div class="space-sm flex-1">
                                <div>
                                    <h3 class="text-2xl font-semibold">
                                        <span class="green-line"
                                            >Material Assets</span
                                        >
                                    </h3>
                                </div>
                                <p
                                    class="text-sm !leading-6 my-3 servicetext md:text-lg lg:!leading-7"
                                >
                                    In the first step of 3D modeling and CGI,
                                    designers gather material assets like
                                    textures and shaders to enhance realism.
                                    These assets can be sourced from libraries
                                    or created from scratch. Choosing the right
                                    materials is crucial for the final look.
                                </p>
                            </div>
                            <div class="relative h-[250px] w-full flex-1">
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="bg-gray-100 object-contain"
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
                                    src="https://www.bzmgraphics.com/images/how-it-works/1.svg"
                                />
                            </div>
                        </div>
                        <div
                            class="col-span-1 flex flex-col items-center gap-5 lg:flex-row"
                        >
                            <div class="space-sm flex-1">
                                <div>
                                    <h3 class="text-2xl font-semibold">
                                        <span class="green-line"
                                            >Components</span
                                        >
                                    </h3>
                                </div>
                                <p
                                    class="text-sm !leading-6 servicetext my-3 md:text-lg lg:!leading-7"
                                >
                                    In this stage, designers use pre-built
                                    elements like polygons and curves to
                                    construct 3D models in their chosen
                                    software. They manipulate these components
                                    to create desired shapes, sometimes
                                    importing pre-designed assets to speed up
                                    the process.
                                </p>
                            </div>
                            <div class="relative h-[250px] w-full flex-1">
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="bg-gray-100 object-contain"
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
                                    src="https://www.bzmgraphics.com/images/how-it-works/2.svg"
                                />
                            </div>
                        </div>
                        <div
                            class="col-span-1 flex flex-col items-center gap-5 lg:flex-row"
                        >
                            <div class="space-sm flex-1">
                                <div>
                                    <h3 class="text-2xl font-semibold">
                                        <span class="green-line"
                                            >3D Modeling &amp; Booleans</span
                                        >
                                    </h3>
                                </div>
                                <p
                                    class="text-sm !leading-6 servicetext my-3 md:text-lg lg:!leading-7"
                                >
                                    In this step, designers sculpt and refine 3D
                                    models using techniques like extrusion,
                                    sculpting, and polygonal modeling, as well
                                    as Boolean operations to combine or subtract
                                    shapes for intricate detail.
                                </p>
                            </div>
                            <div class="relative h-[250px] w-full flex-1">
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="bg-gray-100 object-contain"
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
                                    src="https://www.bzmgraphics.com/images/how-it-works/3.svg"
                                />
                            </div>
                        </div>
                        <div
                            class="col-span-1 flex flex-col items-center gap-5 lg:flex-row"
                        >
                            <div class="space-sm flex-1">
                                <div>
                                    <h3 class="text-2xl font-semibold">
                                        <span class="green-line"
                                            >Image, Video, and 3D Exports</span
                                        >
                                    </h3>
                                </div>
                                <p
                                    class="text-sm !leading-6 servicetext my-3 md:text-lg lg:!leading-7"
                                >
                                    Once the 3D model is finished, designers
                                    export it in various formats for different
                                    purposes like still renders, animations, or
                                    further editing. Settings are adjusted based
                                    on project requirements, and the assets are
                                    delivered to clients or used in production.
                                </p>
                            </div>
                            <div class="relative h-[250px] w-full flex-1">
                                <img
                                    alt="bZm Image"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="bg-gray-100 object-contain"
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
                                    src="https://www.bzmgraphics.com/images/how-it-works/4.svg"
                                />
                            </div>
                        </div>
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
                            We offer top of the line, fine-tuned and a wide
                            range of Video Editing services, that allow you to
                            choose and customize your Video Post-Production
                            project. Besides that, We offer Fast Turnaround
                            time, Guaranteed quality every time, Very
                            Competitive price and a FREE TRIAL.
                        </p>
                    </div>
                    <div>
                        <div>
                            <div class="view3d-wrapper">
                                <canvas
                                    class="w-full h-auto bg-black/10 lg:h-[700px]"
                                    width="948"
                                    height="1050"
                                    style="cursor: grab"
                                ></canvas>
                                <div class="view3d-annotation-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </MainLayout>
</template>

<style scoped>
.bg-color-13 {
    --tw-bg-opacity: 1;
    background-color: rgb(16 16 16 / var(--tw-bg-opacity));
}
.bg-brand {
    --tw-bg-opacity: 1;
    background-color: rgb(146 196 106 / var(--tw-bg-opacity));
}
.hero-video .video-container:after {
    content: "";
    display: block;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 1;
}
.hero-video .callout {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100%;
    text-align: center;
    position: relative;
    z-index: 10;
    width: 70%;
    margin: auto;
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
.hero-video .video-container {
    height: 100%;
    width: 100%;
    position: relative;
    overflow: hidden;
}
.border-left {
    border-left-width: 2px;

    --tw-border-opacity: 1;
    border-color: rgb(128 128 128 / var(--tw-border-opacity));
}
.green-line {
    border-bottom: 5px solid #92c46a;
}

.bg-color-11 {
    --tw-bg-opacity: 1;
    background-color: rgb(255 251 245 / var(--tw-bg-opacity));
}
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
.marquee .me-5 {
    font-size: 23px;
}
.view3d-wrapper {
    position: relative;
    touch-action: pan-y;
}
.view3d-annotation-wrapper {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
    overflow: hidden;
    counter-reset: annotation-index;
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
