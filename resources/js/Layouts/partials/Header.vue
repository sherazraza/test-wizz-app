<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <header class="bg-white shadow-sm">
        <div
            class="container mx-auto flex items-center justify-between py-4 px-4"
        >
            <!-- Logo -->
            <a href="/" class="flex-shrink-0">
                <div class="relative h-14 w-32">
                    <img
                        alt="bZm Image"
                        draggable="false"
                        loading="lazy"
                        decoding="async"
                        class="object-contain absolute inset-0 w-full h-full"
                        src="https://www.bzmgraphics.com/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdnroxwdfm%2Fimage%2Fupload%2Fv1713964144%2Fimages%2Flogo%2Fbzm-graphics_ex6ii1.png&w=1920&q=75"
                    />
                </div>
            </a>

            <!-- Center Navigation Menu -->
            <nav class="d-flex gap-4 justify-content-center">
                <!-- Services -->
                <div class="dropdown">
                    <a
                        class="nav-link d-flex gap-2 dropdown-toggle text-dark"
                        href="#"
                        role="button"
                    >
                        Services
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true"
                            data-slot="icon"
                            class="h-6 w-6 text-brand"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu custom-dropdown shadow py-4">
                        <Link
                            :href="route('imageservice')"
                            class="dropdown-item custom-item"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/clipping-path.svg"
                                alt="Image Editing"
                            />
                            <span>Image Editing</span>
                        </Link>
                        <Link
                            :href="route('videoservice')"
                            class="dropdown-item custom-item"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/video.svg"
                                alt="Video Editing"
                            />
                            <span>Video Editing</span>
                        </Link>
                        <Link
                            :href="route('cgiservice')"
                            class="dropdown-item custom-item"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/cgi.svg"
                                alt="3D & CGI"
                            />
                            <span>3D & CGI</span>
                        </Link>
                    </div>
                </div>

                <!-- Pricing -->
                <div class="dropdown">
                    <a
                        class="nav-link d-flex gap-2 dropdown-toggle text-dark"
                        href="#"
                        role="button"
                    >
                        Pricing

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true"
                            data-slot="icon"
                            class="h-6 w-6 text-brand"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu custom-dropdown shadow py-4">
                        <Link
                            :href="route('imagepricing')"
                            class="dropdown-item custom-item"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/clipping-path.svg"
                                alt="Image Editing"
                            />
                            <span>Image Editing</span>
                        </Link>
                        <Link
                            :href="route('videopricing')"
                            class="dropdown-item custom-item"
                        >
                            <img
                                src="https://www.bzmgraphics.com/icons/video.svg"
                                alt="Video Editing"
                            />
                            <span>Video Editing</span>
                        </Link>
                        <a href="#" class="dropdown-item custom-item">
                            <img
                                src="https://www.bzmgraphics.com/icons/cgi.svg"
                                alt="3D & CGI"
                            />
                            <span>3D & CGI</span>
                        </a>
                    </div>
                </div>

                <div>
                    <Link
                        class="nav-link d-flex gap-2 text-dark d-flex align-items-center gap-2"
                        :href="route('user.portfolio')"
                    >
                        <span>Portfolios</span>
                    </Link>
                </div>

                <!-- Company -->
                <div class="dropdown">
                    <a
                        class="nav-link d-flex gap-2 dropdown-toggle text-dark"
                        href="#"
                        role="button"
                    >
                        Company
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true"
                            data-slot="icon"
                            class="h-6 w-6 text-brand"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu custom-dropdown shadow py-4">
                        <Link
                            :href="route('about')"
                            class="dropdown-item custom-item"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                data-slot="icon"
                                class="size-4"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span>About Us</span>
                        </Link>
                        <Link
                            :href="route('contact')"
                            class="dropdown-item custom-item"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                data-slot="icon"
                                class="size-4"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span>Contact Us</span>
                        </Link>
                        <a href="#" class="dropdown-item custom-item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                data-slot="icon"
                                class="size-4"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span>Career</span>
                        </a>
                        <a href="#" class="dropdown-item custom-item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                                data-slot="icon"
                                class="size-4"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                            <span>Blog</span>
                        </a>
                    </div>
                </div>
            </nav>

            <!-- Right Side: Button + Language -->
            <div class="flex items-center gap-4">
                <a
                    :href="route('login')"
                    class="bg-green-500 text-white text-sm px-4 py-2 rounded hover:bg-green-600"
                >
                    Free Trial
                </a>

                <a
                    :href="route('user.dashboard')"
                    class="bg-green-500 text-white text-sm px-4 py-2 rounded hover:bg-green-600"
                >
                    Dashboard
                </a>

                <!-- Language Dropdown -->
                <!-- <div class="relative">
                    <select
                        class="pl-8 pr-3 py-2 border border-gray-300 rounded text-sm appearance-none bg-white bg-no-repeat bg-left"
                        style="
                            background-image: url('https://flagcdn.com/w40/us.png');
                            background-size: 20px 15px;
                            background-position: 5px center;
                        "
                    >
                        <option
                            value="en"
                            data-flag="https://flagcdn.com/w40/us.png"
                        >
                            English
                        </option>
                        <option
                            value="fr"
                            data-flag="https://flagcdn.com/w40/fr.png"
                        >
                            Français
                        </option>
                        <option
                            value="de"
                            data-flag="https://flagcdn.com/w40/de.png"
                        >
                            Deutsch
                        </option>
                    </select>
                </div> -->
            </div>
        </div>
    </header>
</template>
<style scoped>
.custom-item span {
    font-size: 22px;
}
.nav-link svg {
    width: 36px;
    height: 36px;
}
.nav-link {
    font-size: 23px;
}
.text-brand {
    --tw-text-opacity: 1;
    color: rgb(146 196 106 / var(--tw-text-opacity));
}
.dropdown-menu.custom-dropdown {
    width: 500px;
    padding: 2rem;
    border-radius: 10px;
}

/* Flex item with image + text */
.dropdown-item.custom-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
}

.dropdown-item.custom-item img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 6px;
}

/* Green arrow */
.dropdown-toggle::after {
    content: "";
    display: none;
    margin-left: 0.5rem;
    vertical-align: 0.255em;
    border-top: 0.4em solid green;
    border-right: 0.4em solid transparent;
    border-left: 0.4em solid transparent;
}

.dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
}
</style>
