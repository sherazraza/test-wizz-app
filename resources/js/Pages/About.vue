<script>
import LogoSlider from "@/Components/LogoSlider.vue";
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "About",
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
                    class="relative w-full h-[60vh] bg-gray-700 md:min-h-[350px]"
                >
                    <img
                        alt=" Excellence Across Borders"
                        as="image"
                        draggable="false"
                        fetchpriority="high"
                        decoding="async"
                        data-nimg="fill"
                        class="bg-cover object-cover object-top grayscale-[70%]"
                        sizes="(max-width: 768px) 50%, 33%"
                        src="https://www.bzmgraphics.com/_next/image?url=%2Fabout%2Fabout-banner.jpg&w=1920&q=100"
                        style="
                            position: absolute;
                            height: 100%;
                            width: 100%;
                            inset: 0px;
                            color: transparent;
                        "
                    />
                    <div
                        class="absolute inset-0 flex w-full bg-black bg-opacity-70 mx-auto h-full items-center justify-center px-4"
                    >
                        <div
                            class="wrapper-container grid !max-w-full gap-5 text-center 2xl:!max-w-7xl undefined"
                        >
                            <h1
                                class="md:leading-relaxe text-3xl text-white lg:text-6xl"
                            >
                                Excellence<span
                                    class="font-semibold uppercase text-brand"
                                >
                                    Across Borders
                                </span>
                            </h1>
                            <p
                                class="mx-auto max-w-3xl servicetext text-center text-sm text-white 2xl:text-lg"
                            >
                                Founded in 2015 with 4 editors, bZm Graphics
                                Limited now boasts a team of 250+ highly skilled
                                editors and counting.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="wrapper container">
                    <div class="fluid-container grid gap-20 lg:grid-cols-2">
                        <div style="opacity: 1; transform: none">
                            <h4
                                class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                            >
                                Who We Are <span class="text-brand"></span>
                            </h4>
                            <p
                                class="undefined servicetext lg:text-base text-2xl font-light"
                            >
                                bZm Graphics Ltd. is a Visual Content Retouching
                                Company for E-commerce, Studios and Brands with
                                250+ expert Photo Retouchers and Video Editors
                                supporting leading E-commerce, Brands, Retailers
                                and Photo Studios Globally since 2015.
                            </p>
                            <p
                                class="mt-4 lg:text-base servicetext text-sm font-light"
                            >
                                bZm Graphics is also a trustworthy name for
                                Photo Post-Production and Product Video Editing
                                in most industries including FMCG, Automotive,
                                Fashion and Advertising.
                            </p>
                        </div>
                        <div>
                            <div>
                                <div class="relative h-[30px] w-[30px]">
                                    <img
                                        alt="featured in"
                                        draggable="false"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class=""
                                        sizes="(max-width: 768px) 50%, 33%"
                                        src="https://www.bzmgraphics.com/_next/image?url=%2Fquotes.png&w=1920&q=75"
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
                                    class="my-6 w-[100px] border-b-4 border-b-black"
                                    style="width: 100px"
                                ></div>
                                <p
                                    class="text-xl font-medium italic 2xl:text-3xl"
                                >
                                    Quality is never an accident; it is always
                                    the result of intelligent effort.
                                </p>
                            </div>
                            <div class="relative mt-4 h-[85px] w-[180px]">
                                <img
                                    alt="featured in"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class=""
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fwww.freepnglogos.com%2Fuploads%2Fsignature-png%2Fnguy-ecnh-nguyen-van-binh-signature-png-5.png&w=1920&q=75"
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
                <div class="container">
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
                            class="text-sm servicetext !leading-6 md:text-lg lg:!leading-7 mx-auto max-w-3xl font-light"
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
                <div
                    class="border-b-2 max-w-6xl mx-auto xl:w-full w-[80%]"
                ></div>

                <div class="h-fit w-full wrapper container">
                    <div class="fluid-container grid md:grid-cols-2 gap-10">
                        <div
                            class="relative w-full h-full md:min-h-[450px] min-h-[250px]"
                            style="opacity: 1; transform: none"
                        >
                            <img
                                alt="featured in"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="object-cover"
                                sizes="(max-width: 768px) 50%, 33%"
                                src="https://www.bzmgraphics.com/_next/image?url=%2Fabout%2Fstarted-banner.jpg&w=1920&q=75"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <div class="flex items-center" style="opacity: 1">
                            <div class="grid gap-4 2xl:text-base text-sm">
                                <h4
                                    class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                                >
                                    How it Started
                                    <span class="text-brand"></span>
                                </h4>
                                <p
                                    class="undefined servicetext lg:text-base text-sm font-light"
                                >
                                    In 2015, bZm Graphics Limited was a small
                                    photo editing company that started their
                                    journey with just 4 editors. Despite their
                                    humble beginnings, they were determined to
                                    provide high-quality photo editing services
                                    to businesses of all sizes. With hard work,
                                    dedication, and a commitment to excellence,
                                    they began to grow their client base and
                                    reputation in the industry.
                                </p>
                                <p
                                    class="mt-4 servicetext lg:text-base text-sm font-light"
                                >
                                    bZm Graphics Limited looks forward to
                                    continued growth and success in the years to
                                    come, and they remain committed to providing
                                    the highest level of service to their
                                    clients.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper-md">
                    <div class="h-full w-full container">
                        <div
                            class="fluid-container mb-16 flex h-full justify-between gap-10"
                        >
                            <div
                                class="space-lg w-[90%]"
                                style="opacity: 1; transform: none"
                            >
                                <h4
                                    class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                                >
                                    Bringing Brands Closer through Visual
                                    Experiences <span class="text-brand"></span>
                                </h4>
                                <div>
                                    <a
                                        target=""
                                        rel="noopener noreferrer"
                                        class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-black text-white"
                                        href="/services"
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
                                            >Learn More</span
                                        ></a
                                    >
                                </div>
                            </div>
                            <div
                                class="w-2/4 self-end"
                                style="opacity: 1; transform: none"
                            >
                                <p
                                    class="undefined servicetext lg:text-base text-sm font-light"
                                >
                                    Whether you are a small startup or a large
                                    corporation, bZm Graphics Limited has the
                                    skills and expertise to help you achieve
                                    your photo editing goals
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="relative mt-8 h-[500px] w-full overflow-x-hidden 2xl:h-[700px]"
                    >
                        <img
                            alt="banner"
                            draggable="false"
                            loading="lazy"
                            decoding="async"
                            data-nimg="fill"
                            class="object-cover object-bottom"
                            sizes="(max-width: 768px) 50%, 33%"
                            src="https://www.bzmgraphics.com/_next/image?url=%2Fimages%2Ffriends.jpg&w=1920&q=75"
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

                <div class="w-full wrapper-md 2xl:text-base text-sm container">
                    <div
                        class="fluid-container grid md:grid-cols-2 md:gap-20 gap-5 h-full"
                    >
                        <h4
                            class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                        >
                            Together we are Strong
                            <span class="text-brand"></span>
                        </h4>
                        <div>
                            <p
                                class="font-semibold servicetext text-justify lg:text-base text-sm font-light"
                            >
                                At bZm Graphics Limited, we are proud to offer
                                expert photo editing and design services to
                                businesses of all sizes. Our team of
                                professionals are highly skilled and hold the
                                highest certifications in multiple areas of
                                expertise, ensuring that our clients receive the
                                best possible service and results.
                            </p>
                            <p
                                class="text-justify servicetext lg:text-base text-sm font-light"
                            >
                                With years of experience working with multiple
                                areas of expertise, we have honed our skills to
                                provide a wide range of services. Our expert
                                services include everything from basic
                                retouching to more complex tasks such as
                                background removal, shadow masking, color
                                correction, image masking, and designing as per
                                client's demands. We use the latest technology
                                and techniques to deliver high-quality results
                                that meet and exceed our client's expectations.
                            </p>
                            <p
                                class="text-justify servicetext mt-6 lg:text-base text-sm font-light"
                            >
                                At bZm Graphics Limited, we understand that
                                every client's needs are unique, and we are
                                dedicated to providing customized solutions that
                                meet those needs. We work closely with our
                                clients to understand their goals and vision,
                                ensuring that we deliver a finished product that
                                aligns with their expectations. Our portfolio
                                showcases our ability to provide stunning visual
                                solutions that communicate our client's message
                                and resonate with their audience.
                            </p>
                        </div>
                        <div class="flex gap-5 h-fit">
                            <div class="relative w-20 h-20 rounded-full">
                                <img
                                    alt="CEO"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="rounded-full object-cover"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fceo_1.3.png&w=1920&q=75"
                                    style="
                                        position: absolute;
                                        height: 100%;
                                        width: 100%;
                                        inset: 0px;
                                        color: transparent;
                                    "
                                />
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-semibold">Ainul Bashar</p>
                                <p class="text-sm">CEO</p>
                            </div>
                        </div>
                        <p class="2xl:text-3xl servicetext text-2xl italic">
                            Our goal is to provide high-quality photo editing
                            services that enhance the visual appeal of
                            e-commerce products and drive sales for our clients.
                        </p>
                    </div>
                    <div class="wrapper-md">
                        <div
                            class="border-b-2 max-w-6xl mx-auto xl:w-full w-[80%]"
                        ></div>
                    </div>
                    <div
                        class="fluid-container grid md:grid-cols-3 2xl:gap-20 md:gap-32 gap-5"
                    >
                        <div>
                            <p
                                class="!font-semibold servicetext text-justify lg:text-base text-sm font-light"
                            >
                                Bzm Graphics Limited is a company based in
                                Bangladesh that prides itself on being a
                                workplace for many people.
                            </p>
                            <h4
                                class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                            >
                                250+ <span class="text-brand"></span>
                            </h4>
                        </div>
                        <div>
                            <p
                                class="!font-semibold servicetext text-justify lg:text-base text-sm font-light"
                            >
                                Bzm Graphics Limited is a company that has
                                developed a strong network of business partners
                                around the world.
                            </p>
                            <h4
                                class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                            >
                                12+ <span class="text-brand"></span>
                            </h4>
                        </div>
                        <div>
                            <p
                                class="!font-semibold servicetext text-justify lg:text-base text-sm font-light"
                            >
                                bZm Graphics Limited is expecting to grow the
                                number of editor 500+ by the end of 2023.
                            </p>
                            <h4
                                class="text-3xl !leading-tight text-gray-700 lg:text-5xl 2xl:text-7xl undefined"
                            >
                                500+ <span class="text-brand"></span>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="wrapper bg-[#000000] text-sm 2xl:text-base">
                    <div class="container grid gap-8 md:grid-cols-2">
                        <div class="flex flex-col justify-center text-white">
                            <h2
                                class="w-fit text-2xl !leading-tight text-gray-700 lg:text-3xl 2xl:text-5xl !text-white"
                            >
                                <span>Have a question?<br /></span>
                                <span class="text-brand"
                                    >Our team is happy to assist you</span
                                >
                            </h2>
                            <p
                                class="my-8 lg:w-[70%] servicetext lg:text-base text-sm font-light"
                            >
                                Our team of experts is available to answer any
                                questions you may have, provide guidance on the
                                best services for your needs, and offer
                                solutions that meet your specific requirements.
                                We pride ourselves on our ability to communicate
                                effectively with our clients, ensuring that we
                                fully understand their needs and provide
                                solutions that exceed their expectations.
                            </p>
                            <div class="mt-6 gap-6 lg:flex">
                                <a
                                    target=""
                                    rel="noopener noreferrer"
                                    class="group relative inline-flex w-fit items-center justify-center overflow-hidden py-6 pl-6 pr-12 font-semibold transition-all duration-150 ease-in-out hover:pl-12 hover:pr-6 bg-white text-black"
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
                                <p
                                    class="mt-4 self-center !font-semibold lg:mt-0 lg:text-base text-sm font-bold"
                                >
                                    or Email
                                    <a
                                        target="_blank"
                                        class="underline"
                                        rel="noopener noreferrer"
                                        href="mailto:hello@bzmgraphics.com"
                                        >hello@bzmgraphics.com</a
                                    >
                                </p>
                            </div>
                        </div>
                        <div
                            class="relative hidden h-full min-h-[350px] w-full md:block"
                            style="opacity: 1; transform: none"
                        >
                            <img
                                alt="Banner Image"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="rounded-sm object-cover grayscale"
                                sizes="(max-width: 768px) 50%, 33%"
                                src="https://www.bzmgraphics.com/_next/image?url=%2Fabout%2Fsupport.jpg&w=1920&q=100"
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

                <div class="wrapper w-full">
                    <div
                        class="fluid-container-md flex flex-wrap justify-center gap-5 md:justify-between lg:flex-nowrap"
                    >
                        <div class="grid gap-3 pr-0 lg:pr-5">
                            <p
                                class="text-sm font-bold tracking-widest uppercase undefined"
                            >
                                Our Team
                            </p>
                            <h2
                                class="w-fit text-2xl !leading-tight text-gray-700 lg:text-3xl 2xl:text-5xl undefined"
                            >
                                <span>Meet Our</span>
                                <span class="text-brand">Amazing Team</span>
                            </h2>
                            <p
                                class="undefined servicetext lg:text-base text-sm font-light"
                            >
                                We believe that the key to our success is our
                                team's dedication to providing exceptional
                                service and support to our clients, and we take
                                pride in the work that we do.
                            </p>
                        </div>
                        <div>
                            <div
                                class="relative h-[250px] w-[200px] min-w-[200px]"
                            >
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
                                Ainul Bashar
                            </p>
                            <p class="font-medium text-brand">
                                Co-Founder &amp; CEO
                            </p>
                        </div>
                        <div>
                            <div
                                class="relative h-[250px] w-[200px] min-w-[200px]"
                            >
                                <img
                                    alt="CTO"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="rounded-md object-cover"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fcto.png&w=1920&q=75"
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
                                Md Solaiman Rathik
                            </p>
                            <p class="font-medium text-brand">CTO</p>
                        </div>
                        <div>
                            <div
                                class="relative h-[250px] w-[200px] min-w-[200px]"
                            >
                                <img
                                    alt="CCO"
                                    draggable="false"
                                    loading="lazy"
                                    decoding="async"
                                    data-nimg="fill"
                                    class="rounded-md object-cover"
                                    sizes="(max-width: 768px) 50%, 33%"
                                    src="https://www.bzmgraphics.com/_next/image?url=%2Fcco_1.png&w=1920&q=75"
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
                                Apel Mahmud Khan
                            </p>
                            <p class="font-medium text-brand">
                                Co-Founder &amp; CCO
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="border-b-2 max-w-6xl mx-auto xl:w-full w-[80%]"
                ></div>

                <div class="wrapper-md mb-8 text-sm 2xl:text-base">
                    <div class="fluid-container-md grid md:grid-cols-2">
                        <div class="relative h-fit">
                            <h2
                                class="w-fit text-2xl !leading-tight text-gray-700 lg:text-3xl 2xl:text-5xl undefined"
                            >
                                <span>Join Our Team</span>
                                <span class="text-brand"></span>
                            </h2>
                            <img
                                alt="asd"
                                draggable="false"
                                loading="lazy"
                                decoding="async"
                                data-nimg="fill"
                                class="absolute -z-10 !w-fit object-contain"
                                sizes="(max-width: 768px) 50%, 33%"
                                src="https://www.bzmgraphics.com/_next/image?url=%2Fwave.png&w=1920&q=75"
                                style="
                                    position: absolute;
                                    height: 100%;
                                    width: 100%;
                                    inset: 0px;
                                    color: transparent;
                                "
                            />
                        </div>
                        <div>
                            <p
                                class="undefined servicetext lg:text-base text-sm font-light"
                            >
                                We are always on the lookout for talented
                                individuals to join our amazing team. We have
                                recently opened up several job positions, and we
                                welcome applicants who are passionate about
                                photo editing and design.
                            </p>
                            <a
                                target="_blank"
                                href="https://career.bzmgraphics.com"
                                ><div class="mt-5 flex items-center gap-2">
                                    <p
                                        class="!font-semibold underline lg:text-base text-sm font-light"
                                    >
                                        See open positions
                                    </p>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                        data-slot="icon"
                                        class="h-6 w-6 text-brand"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg></div
                            ></a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </MainLayout>
</template>

<style scoped>
.fluid-container-md {
    margin-left: auto;
    margin-right: auto;
    max-width: 64rem;
    padding-left: 2rem;
    padding-right: 2rem;
}
.flex {
    display: flex;
}
.servicessection {
    background-color: #e9f3e1;
}
.border-b-2 {
    border-bottom-width: 2px;
}
.servicetext {
    font-size: 23px;
    line-height: 39px;
}
.wrapper {
    width: 100%;
    padding-top: 4rem;
    padding-bottom: 4rem;
}
.sameheight {
    height: 400px;
}
.wrapper-md {
    width: 100%;
    padding-top: 2rem;
    padding-bottom: 2rem;
}
.bg-opacity-70 {
    opacity: 0.8;
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
</style>
