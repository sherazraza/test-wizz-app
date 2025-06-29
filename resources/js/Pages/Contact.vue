<script>
import LogoSlider from "@/Components/LogoSlider.vue";
import MainLayout from "../Layouts/MainLayout.vue";

export default {
    name: "Contact",
    components: {
        MainLayout, // ✅ Register here
    },
    props: {
        locations: Array,
        contact: Object,
    },
};
</script>

<template>
    <MainLayout>
        <div class="flex flex-col justify-between">
            <!-- Header Section -->

            <main>
                <div class="top-margin">
                    <div
                        class="relative w-full h-[40vh] bg-gray-700 md:min-h-[350px]"
                    >
                        <img
                            alt="undefinedHELLO !"
                            as="image"
                            draggable="false"
                            fetchpriority="high"
                            decoding="async"
                            data-nimg="fill"
                            class="bg-cover object-cover object-top grayscale-[70%]"
                            sizes="(max-width: 768px) 50%, 33%"
                            src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1711109088%2Fimages%2Fbg-images%2Fcontact-banner_touied.png&w=1920&q=100"
                            style="
                                position: absolute;
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
                                class="wrapper-container grid !max-w-full gap-5 text-center 2xl:!max-w-7xl undefined"
                            >
                                <h1
                                    class="md:leading-relaxe text-3xl text-white lg:text-6xl"
                                >
                                    <span
                                        class="font-semibold uppercase text-brand"
                                    >
                                        HELLO !
                                    </span>
                                </h1>
                                <p
                                    class="mx-auto max-w-3xl text-center text-sm text-white 2xl:text-lg"
                                >
                                    Let's Stay Connected, Always pleased to hear
                                    from you.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper-container !pb-0 mt-5">
                        <div class="grid gap-10 lg:grid-cols-2">
                            <div class="">
                                <div
                                    class="rounded-md bg-white p-4 shadow-md lg:p-10"
                                >
                                    <form
                                        class="custom-form gap-4 md:grid md:grid-cols-2"
                                        method="POST"
                                    >
                                        <div class="inputBox">
                                            <label
                                                >Name
                                                <span
                                                    class="font-extrabold text-red-600"
                                                    >*</span
                                                ></label
                                            >
                                            <input
                                                class="custom-input"
                                                type="text"
                                                name="name"
                                                required=""
                                                value=""
                                            />
                                        </div>
                                        <div class="inputBox">
                                            <input
                                                class="custom-input"
                                                type="text"
                                                name="companyName"
                                                required=""
                                                value=""
                                            /><label
                                                >Company Name
                                                <span
                                                    class="font-extrabold text-red-600"
                                                    >*</span
                                                ></label
                                            >
                                        </div>
                                        <div class="inputBox">
                                            <input
                                                class="custom-input"
                                                type="number"
                                                name="number"
                                                required=""
                                                value=""
                                            /><label
                                                >Phone Number
                                                <span
                                                    class="font-extrabold text-red-600"
                                                    >*</span
                                                ></label
                                            >
                                        </div>
                                        <div class="inputBox">
                                            <input
                                                class="custom-input"
                                                type="email"
                                                name="email"
                                                required=""
                                                value=""
                                            /><label
                                                >Email
                                                <span
                                                    class="font-extrabold text-red-600"
                                                    >*</span
                                                ></label
                                            >
                                        </div>
                                        <div class="inputBox col-span-2">
                                            <textarea
                                                name="message"
                                                class="custom-input custom-textarea"
                                                required=""
                                                rows="10"
                                            ></textarea
                                            ><label
                                                >Message
                                                <span
                                                    class="font-extrabold text-red-600"
                                                    >*</span
                                                ></label
                                            >
                                        </div>
                                        <button
                                            class="flex items-center justify-center rounded bg-brand/90 p-4 font-semibold text-white transition hover:bg-brand"
                                            type="submit"
                                        >
                                            Send Message<svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24"
                                                fill="currentColor"
                                                aria-hidden="true"
                                                data-slot="icon"
                                                class="ms-2 h-6 w-6"
                                            >
                                                <path
                                                    d="M3.478 2.404a.75.75 0 0 0-.926.941l2.432 7.905H13.5a.75.75 0 0 1 0 1.5H4.984l-2.432 7.905a.75.75 0 0 0 .926.94 60.519 60.519 0 0 0 18.445-8.986.75.75 0 0 0 0-1.218A60.517 60.517 0 0 0 3.478 2.404Z"
                                                ></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div
                                class="hidden h-full w-full p-5 text-sm lg:block"
                            >
                                <div
                                    class="relative aspect-square h-fit max-h-[700px] w-full max-w-[700px]"
                                    style="max-height: 481px"
                                >
                                    <img
                                        alt="contact image"
                                        draggable="false"
                                        loading="lazy"
                                        decoding="async"
                                        data-nimg="fill"
                                        class="object-contain"
                                        src="https://www.bzmgraphics.com/contact-us.svg"
                                        style="
                                            position: absolute;
                                            height: 100%;
                                            width: 100%;

                                            inset: 0px;
                                            color: transparent;
                                        "
                                    />
                                </div>
                                <p class="mb-4 mt-10 w-fit text-lg">
                                    You can reach us anytime.
                                </p>
                                <div
                                    class="mb-10 grid w-full grid-cols-2 gap-5 font-semibold 2xl:grid-cols-3"
                                >
                                    <div
                                        class="flex h-fit gap-3 2xl:col-span-2"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                            class="w-6 text-brand"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"
                                            ></path>
                                        </svg>
                                        <a
                                            class="self-center"
                                            href="mailto:hello@bzmgraphics.com"
                                            >{{ contact?.email }}</a
                                        >
                                    </div>
                                    <div class="flex h-fit gap-3">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                            data-slot="icon"
                                            class="w-6 text-brand"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                            ></path>
                                        </svg>
                                        <p class="self-center">
                                            24/7 Availability
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 lg:mt-16 container" id="location">
                            <div>
                                <h2
                                    class="text-2xl font-bold leading-tight lg:text-7xl"
                                >
                                    Location<span class="mx-0 px-0 text-brand"
                                        >.</span
                                    >
                                </h2>
                                <p class="mt-5 textfont">
                                    {{ contact?.email_description }}
                                </p>
                            </div>
                            <div
                                class="grid grid-cols-1 gap-10 py-16 md:grid-cols-2 lg:grid-cols-3 lg:gap-20"
                            >
                                <div
                                    v-for="(item, index) in locations"
                                    :key="index"
                                    class="space-sm"
                                >
                                    <h2
                                        class="flex items-center gap-2 text-lg font-bold"
                                    >
                                        {{ item.title }}
                                    </h2>
                                    <p class="">
                                        {{ item.description }}
                                    </p>
                                    <p>
                                        <a
                                            class="block font-bold text-brand underline"
                                            href="tel:+88 02 55020348"
                                            >{{ item.phone }}</a
                                        >
                                    </p>
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
.servicessection {
    background-color: #e9f3e1;
}
.servicetext {
    font-size: 23px;
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
.custom-form .inputBox {
    position: relative;
}
.custom-form .inputBox .custom-input {
    width: 100%;
    padding: 0.625rem 10px;
    font-size: 1rem;
    letter-spacing: 0.062rem;
    margin-bottom: 1.875rem;
    border: 2px solid #e0e0e0;
    background: transparent;
    border-radius: 4px;
    outline: none !important;
}
.custom-form .inputBox label {
    position: absolute;
    top: 0;
    left: 20px;
    padding: 0.625rem 0;
    font-size: 1rem;
    color: gray;
    pointer-events: none;
    transition: 0.5s;
}
.custom-form .inputBox .custom-input:focus {
    box-shadow: none;
    border: 2px solid #92c46a;
}
.custom-form .inputBox .custom-input:focus ~ label,
.custom-form .inputBox .custom-input:not([value=""]) ~ label,
.custom-form .inputBox .custom-input:valid ~ label {
    top: -1.125rem;
    left: 10px;
    color: #92c46a;
    font-size: 0.75rem;
    background-color: #f9fcf4;
    height: 30px;
    padding-left: 5px;
    padding-right: 5px;
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
