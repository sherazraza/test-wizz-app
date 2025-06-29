<script>
import LogoSlider from "@/Components/LogoSlider.vue";
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "Home",
    components: {
        MainLayout, // ✅ Register here
        LogoSlider,
    },
    props: {
        home: String,
        locations: Array,
    },
};
</script>

<template>
    <MainLayout>
        <!-- Hero Section -->

        <div class="hero-section">
            <!-- (Optional) Video background here if you want -->

            <!-- Overlay Content -->
            <div class="container-fluid overlay-content">
                <div class="row w-100">
                    <!-- Left Image/Video -->
                    <div class="col-md-3 d-none d-md-block">
                        <video
                            autoplay
                            muted
                            loop
                            playsinline
                            class="w-100 img-fluid"
                            style="object-fit: cover; height: 500px"
                        >
                            <source
                                :src="home?.hero_image_2"
                                type="video/mp4"
                            />
                        </video>
                    </div>

                    <!-- Center Content -->
                    <div
                        class="col-md-5 relative text-center text-md-start d-flex flex-column justify-content-center align-items-start"
                    >
                        <h1 class="fw-bold display-5 mb-3">
                            {{ home?.hero_title ?? "" }}
                        </h1>
                        <div
                            class="absolute right-5 top-5 hidden size-[120px] bg-black/10 lg:block 2xl:size-[160px]"
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
                                :src="home?.hero_image_1"
                            />
                        </div>
                        <p class="lead mb-4">
                            {{ home?.hero_description ?? "" }}
                        </p>

                        <div
                            class="absolute right-[176px] bottom-[40px] hidden size-[120px] bg-black/10 lg:block 2xl:size-[160px]"
                        >
                            <video
                                alt="bZm Image"
                                draggable="false"
                                muted
                                loop
                                playsinline
                                loading="lazy"
                                autoplay
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
                            >
                                <source
                                    :src="home?.hero_image_3"
                                    type="video/mp4"
                                />
                            </video>
                        </div>
                        <a
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group relative inline-flex w-fit items-center justify-center overflow-hidden bg-brand py-6 pl-6 pr-12 font-semibold text-white transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6"
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

                    <!-- Right Large Image -->
                    <div class="col-md-4 d-none d-md-block">
                        <video
                            autoplay
                            muted
                            loop
                            playsinline
                            class="w-100"
                            style="object-fit: cover; height: 500px"
                        >
                            <source
                                :src="home?.hero_image_4"
                                type="video/mp4"
                            />
                        </video>
                    </div>
                </div>
            </div>

            <!-- Marquee Services -->
            <div class="marquee bg-black text-white py-[35px]">
                <div class="d-flex marquee-track my-auto">
                    <div class="me-5 my-auto"><b>Image Retouching</b></div>
                    <div class="me-5">Editorial Retouching</div>
                    <div class="me-5">Photo Color Correction</div>
                    <div class="me-5">Video Editing</div>
                    <div class="me-5">E-Commerce Editing</div>
                    <div class="me-5">CGI & 3D</div>
                </div>
            </div>
        </div>
        <!-- end of hero-section -->

        <!-- Logos Section - THIS SHOULD BE OUTSIDE hero-section -->
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

        <!-- Service Start Section -->
        <section class="py-5 servicessection mt-5">
            <div class="container text-center">
                <p class="headingtext text-5xl">
                    Where Would You Like To Start?
                </p>
                <p class="servicetext">
                    At bZm Graphics we always put our customers first. We smile
                    when You smile
                </p>
                <div class="row mt-5">
                    <div class="col-md-4 py-4">
                        <div
                            class="p-3 py-5 border boxwidth rounded bg-white sameheight"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/clipping-path-black.svg"
                                alt=""
                                class="mx-auto"
                            />
                            <br />
                            <b class="mt-4 servicetext">Photo Editing</b>
                            <p class="servicetext">
                                Combination of AI & Highly skilled photo editors
                                we offer best experience for your image editing
                                with Highest Quality.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 py-4">
                        <div
                            class="p-3 py-5 border boxwidth rounded bg-white sameheight"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/video-black.svg"
                                alt=""
                                class="mx-auto"
                            />
                            <br />
                            <b class="mt-4 servicetext">Video Editing</b>
                            <p class="servicetext">
                                With skilled video editors we handle video
                                trimming, video color grading, Background
                                removal, Video retouching at ease.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 py-4">
                        <div
                            class="p-3 py-5 border boxwidth rounded bg-white sameheight"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/cgi-black.svg"
                                alt=""
                                class="mx-auto"
                            />
                            <br />
                            <b class="mt-4 servicetext">3D and CGI</b>
                            <p class="servicetext">
                                Our team of dedicated 3D designers produce top
                                notch quality 3D modeling and CGI best for
                                ecommerce product modeling.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Snapshot Section -->
        <section class="container py-5">
            <div class="relative text-center">
                <b class="text-cente text-bold text-2xl"
                    >WELCOME TO THE BZM GRAPHICS<span> </span
                ></b>
            </div>

            <div class="text-center w-full">
                <h5 class="text-6xl mt-3">eCommerce Content</h5>
                <div class="d-flex justify-center mt-3 gap-3">
                    <p class="text-2xl">
                        Trustworthy name to E-commerce, <br />Brands and Photo
                        Studios since <br />2015.
                    </p>
                    <b
                        class="text-4xl md:text-6xl mt-2 font-normal"
                        style="color: #92c46a"
                    >
                        Retouching
                    </b>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <h6 class="text-4xl text-center">SNAPSHOTS</h6>
                    <a
                        rel="noopener noreferrer"
                        class="mx-auto flex w-fit items-center justify-center gap-x-2 text-xs uppercase sm:text-xs lg:mx-0 lg:w-fit lg:justify-start xl:text-sm 2xl:text-sm"
                        href="#"
                        ><span
                            class="border-b-2 border-brand border-success text-lg transition hover:font-semibold"
                            >READ ABOUT US</span
                        ><span
                            class="border-b-2 border-brand border-success text-2xl"
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                                data-slot="icon"
                                class="h-5 text-brand lg:h-6"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.22 14.78a.75.75 0 0 0 1.06 0l7.22-7.22v5.69a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0 0 1.5h5.69l-7.22 7.22a.75.75 0 0 0 0 1.06Z"
                                    clip-rule="evenodd"
                                ></path></svg></span
                    ></a>
                    <!-- <p>Years</p> -->
                </div>
                <div class="col-md-8">
                    <h5
                        class="relative text-[8px] uppercase text-gray-600 sm:text-[8px] xl:bottom-5 xl:text-sm 2xl:text-sm"
                    >
                        <span>/</span>FACTS
                    </h5>
                    <div class="z-10 grid grid-cols-2 gap-14">
                        <div class="col-span-1 space-y-4 xl:text-start">
                            <p class="text-3xl font-medium lg:text-4xl">
                                {{ home?.brands ?? "" }}+
                            </p>
                            <hr />
                            <p
                                class="text-xs uppercase tracking-wide text-gray-500 sm:text-xs xl:text-sm 2xl:text-sm"
                            >
                                Brands
                            </p>
                        </div>
                        <div class="col-span-1 space-y-4 xl:text-start">
                            <p class="text-3xl font-medium lg:text-4xl">
                                {{ home?.employees ?? "" }}+
                            </p>
                            <hr />
                            <p
                                class="text-xs uppercase tracking-wide text-gray-500 sm:text-xs xl:text-sm 2xl:text-sm"
                            >
                                Permanent Employees
                            </p>
                        </div>
                        <div class="col-span-1 space-y-4 xl:text-start">
                            <p class="text-3xl font-medium lg:text-4xl">
                                {{ home?.sft_space ?? "" }}
                            </p>
                            <hr />
                            <p
                                class="text-xs uppercase tracking-wide text-gray-500 sm:text-xs xl:text-sm 2xl:text-sm"
                            >
                                SFT Production Space
                            </p>
                        </div>
                        <div class="col-span-1 space-y-4 xl:text-start">
                            <p class="text-3xl font-medium lg:text-4xl">
                                {{ home?.delivered_photos ?? "" }}+
                            </p>
                            <hr />
                            <p
                                class="text-xs uppercase tracking-wide text-gray-500 sm:text-xs xl:text-sm 2xl:text-sm"
                            >
                                Delivered Photos Per Year
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <h6>7500</h6>
                    <p>Projects in Total</p>
                </div> -->
            </div>
        </section>

        <section class="flex justify-center bg-[#FFF7EC] py-20">
            <div class="max-w-2xl space-y-4 text-center">
                <div class="flex justify-center">
                    <div class="flex h-fit gap-5">
                        <div class="relative size-20 rounded-full">
                            <img
                                alt="François Thibault"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="rounded-full object-contain"
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
                                :src="home?.review_image"
                            />
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 px-12 sm:px-12 xl:px-0 2xl:px-0">
                    <div class="relative size-20">
                        <img
                            alt="quotationMarksStart"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="object-contain object-top"
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
                            src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711084347%2Fimages%2Ficons%2Fquotation-marks-start_q1clzc.png&w=1920&q=75"
                        />
                    </div>
                    <p
                        class="text-center text-base font-medium text-gray-800 xl:text-lg 2xl:text-xl"
                    >
                        {{ home?.review_text ?? "" }}
                    </p>
                    <div class="relative size-20">
                        <img
                            alt="quotationMarksEnd"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="object-contain object-top"
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
                            src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711084349%2Fimages%2Ficons%2Fquotation-marks-end_y2om5f.png&w=1920&q=75"
                        />
                    </div>
                </div>
                <div>
                    <p
                        class="text-base font-bold sm:text-base xl:text-2xl 2xl:text-2xl"
                    >
                        {{ home?.review_name ?? "" }}
                    </p>
                    <p
                        class="text-xs text-gray-500 sm:text-xs xl:text-xl 2xl:text-xl"
                    >
                        {{ home?.review_designation ?? "" }}
                    </p>
                </div>
                <div class="flex justify-center">
                    <div class="relative h-5 w-60 2xl:h-10">
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
                            :src="home?.company_logo"
                        />
                    </div>
                </div>
            </div>
        </section>

        <div class="container my-5">
            <div class="my-5">
                <div
                    class="wrapper-container grid grid-cols-1 gap-5 lg:h-[650px] lg:grid-cols-2 mt-5"
                >
                    <div class="space-md lg:text-start mt-5">
                        <br />
                        <span
                            class="border-b pb-3 mt-5 text-xl font-semibold uppercase text-brand"
                            >Image Editing Services</span
                        >
                        <h2
                            class="max-w-lg text-3xl !leading-tight lg:text-5xl mt-4"
                        >
                            Let The Photo Represent the Product
                        </h2>
                        <p>
                            A perfectly shot product photo can bring more
                            attention and sell more. However, even a perfect
                            shoot also needs some adjustment. That's where bZm
                            Graphics comes in. We ensure you have a best
                            experience with your Image editing project.
                        </p>
                        <div class="pt-4">
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
                    <div class="relative h-[450px] w-full lg:h-full">
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
                            src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711701822%2Fimages%2Fimage-editing-services-pmo8jo.png&w=1920&q=75"
                        />
                    </div>
                </div>
            </div>
        </div>

        <div
            class="wrapper-container flex flex-col items-center py-5 gap-10 bg-[#EFEFEF] xl:flex-row"
        >
            <div
                class="order-2 col-span-1 flex w-full flex-1 items-center xl:order-1"
            >
                <video
                    class="max-h-[80vh] w-[80%] overflow-hidden undefined"
                    preload="none"
                    autoplay=""
                    loop=""
                    muted=""
                    playsinline=""
                    title="Fitness Model"
                >
                    <source :src="home?.video_editing_image" type="video/mp4" />
                    <track
                        src="https://res.cloudinary.com/dnroxwdfm/video/upload/videos/fitness-model_v3uu4g"
                        kind="subtitles"
                        srclang="en"
                        label="English"
                    />
                    Your browser does not support the video tag.
                </video>
            </div>
            <div
                class="space-md order-1 col-span-1 flex flex-1 flex-col justify-center lg:items-start lg:text-start xl:order-2 xl:pl-20"
            >
                <span
                    class="border-b border-gray-300 pb-3 text-xl font-semibold uppercase text-brand"
                    >Video Editing Services</span
                >
                <h2 class="max-w-lg text-3xl !leading-tight lg:text-5xl">
                    Make The Video
                    <span class="text-brand">Ecommerce</span>
                    Ready
                </h2>
                <p
                    class="text-sm !leading-6 text-grey md:text-lg lg:!leading-7"
                >
                    {{ home?.video_editing_description ?? "" }}
                </p>
                <div class="pt-4">
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

        <div class="wrapper-container space-lg py-5 my-5 !pb-0">
            <div
                class="te space-md flex flex-col items-center justify-center text-center"
            >
                <h2 class="text-3xl !leading-tight space-x-3 lg:text-5xl">
                    <span class="text-brand">3D and CGI</span>
                    <span>Model</span>
                </h2>
                <p
                    class="text-sm !leading-6 text-grey mt-4 md:text-lg lg:!leading-7 mx-auto max-w-2xl"
                >
                    {{ home?.cgi_description ?? "" }}
                </p>
            </div>
        </div>

        <div
            v-if="home?.cgi_videos && home?.cgi_videos.length"
            class="container px-5 px-5 grid min-h-[500px] grid-cols-1 gap-10 xl:grid-cols-2"
        >
            <!-- <div v-if="home?.cgi_videos && home?.cgi_videos.length"> -->
            <video
                v-for="(video, index) in home?.cgi_videos"
                :key="index"
                :src="video"
                controls
                style="width: 100%; margin-bottom: 20px"
            ></video>
            <!-- </div> -->
        </div>
        <br /><br />
        <div
            class="flex mt-5 py-5 flex-col items-center justify-center gap-10 bg-[#181818] bg-cover bg-fixed bg-no-repeat p-10 lg:flex-row lg:bg-[url('https://res.cloudinary.com/dnroxwdfm/image/upload/v1711614852/images/bg-images/bzm-office_ibfboe_pxa6vs.webp')] lg:p-20"
        >
            <div
                class="space-md mt-5 py-5 rounded bg-white p-5 shadow-md lg:p-10"
            >
                <img
                    alt="logo"
                    draggable="false"
                    loading="lazy"
                    width="80"
                    height="80"
                    decoding="async"
                    data-nimg="1"
                    class="rounded-full"
                    style="color: transparent"
                    sizes="(max-width: 768px) 50%, 33%"
                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711363545%2Fimages%2Flogo%2Fbzm-round-logo_xztryg.png&w=1920&q=75"
                />
                <div class="mt-4">
                    <p>BZM Graphics Ltd</p>
                    <h2 class="text-2xl font-bold">30 Minute Meeting</h2>
                </div>
                <div class="space-y-2">
                    <p
                        class="text-sm !leading-6 text-grey md:text-lg lg:!leading-7 flex items-start gap-2.5"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                            data-slot="icon"
                            class="inline size-7"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                            ></path>
                        </svg>
                        30 min
                    </p>
                    <p
                        class="text-sm !leading-6 text-grey md:text-lg lg:!leading-7 flex gap-2.5"
                    >
                        <span
                            ><svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                aria-hidden="true"
                                data-slot="icon"
                                class="inline size-7"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m15.75 10.5 4.72-4.72a.75.75 0 0 1 1.28.53v11.38a.75.75 0 0 1-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25h-9A2.25 2.25 0 0 0 2.25 7.5v9a2.25 2.25 0 0 0 2.25 2.25Z"
                                ></path></svg></span
                        >Web conferencing details provided upon confirmation.
                    </p>
                </div>
                <div class="mt-3">
                    <br />
                    <a
                        :href="route('contact')"
                        class="rounded bg-brand px-5 mt-5 py-3 mt-4 font-bold text-white transition hover:bg-[#80bb50]"
                    >
                        Book a Meeting
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">
                <div
                    v-for="(item, index) in locations"
                    :key="index"
                    class="flex gap-3"
                >
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true"
                            data-slot="icon"
                            class="mx-auto size-8 stroke-brand"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                            ></path>
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                            ></path>
                        </svg>
                    </div>
                    <div>
                        <p class="mb-4 font-bold text-white">
                            {{ item.title }}
                        </p>
                        <p class="text-white">
                            {{ item.description }}
                        </p>
                        <p class="text-white">
                            Phone: <span>{{ item.phone }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-color-4 my-5 py-5">
            <div
                class="wrapper-container grid h-full place-items-center gap-4 md:grid-cols-2"
            >
                <div class="relative hidden lg:block">
                    <img
                        alt="Join Us"
                        draggable="false"
                        loading="lazy"
                        width="364"
                        height="359"
                        decoding="async"
                        data-nimg="1"
                        class="object-contain"
                        style="color: transparent"
                        sizes="(max-width: 768px) 50%, 33%"
                        src="https://www.bzmgraphics.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fjoin-us.62f1937c.png&w=1920&q=75"
                    />
                </div>
                <div class="space-md lg:text-start">
                    <div>
                        <span class="font-bold text-grey">LET'S START</span>
                        <h2 class="text-2xl font-bold text-brand md:text-3xl">
                            A Partnership
                        </h2>
                    </div>
                    <p
                        class="text-sm !leading-6 text-grey mt-3 md:text-lg lg:!leading-7"
                    >
                        Get more sales on Amazon, Etsy, Shopify, ebay, etc.
                        marketplaces using our Image editing &amp; video editing
                        services.
                    </p>
                    <br />
                    <p
                        class="text-sm !leading-6 text-grey md:text-lg lg:!leading-7"
                    >
                        Just upload the Photos or Videos and relax till we send
                        you the very best result for marketplace listing. Our
                        Photo editors and Video Editors will make you contents
                        eye catching and engaging.
                    </p>
                    <div class="pt-4 mt-4">
                        <a
                            target=""
                            rel="noopener noreferrer"
                            class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                            href="/partners"
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
                                >Join Us</span
                            ></a
                        >
                    </div>
                </div>
            </div>
        </section>
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
.lg\:bg-\[url\(\'https\:\/\/res\.cloudinary\.com\/dnroxwdfm\/image\/upload\/v1711614852\/images\/bg-images\/bzm-office_ibfboe_pxa6vs\.webp\'\)\] {
    background-image: url(https://res.cloudinary.com/dnroxwdfm/image/upload/v1711614852/images/bg-images/bzm-office_ibfboe_pxa6vs.webp);
}
.stroke-brand {
    stroke: #92c46a;
}
</style>
