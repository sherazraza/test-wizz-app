<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    edit_image_per_year: "",
    edit_image_time: "",
    password: "",
    password_confirmation: "",
    next_upload: "",
    privacy_policy: false,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <main class="grid grid-cols-1 lg:grid-cols-2">
            <!-- Left Side -->
            <div class="h-full w-full bg-[#F9FCF4] lg:flex items-center hidden">
                <img
                    src="https://upload.bzmgraphics.com/assets/studio-photographer.svg"
                    alt="banner"
                />
            </div>

            <!-- form -->
            <div
                class="flex justify-center w-full h-full p-4 bg-white place-items-center"
            >
                <div class="w-full max-w-lg">
                    <div>
                        <h2
                            class="my-5 text-2xl font-bold text-black lg:text-4xl"
                        >
                            Sign Up to Get
                            <span class="text-[#92C46A]">FREE TRIAL</span>
                        </h2>

                        <form @submit.prevent="submit">
                            <div class="flex items-center gap-4">
                                <div class="w-1/2 my-5 mr-4">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        Full Name(*)
                                    </div>
                                    <input
                                        v-model="form.name"
                                        class="border-gray-300 hover:border-gray-400 w-full border-b-2 bg-transparent py-2 focus:border-[#92C46A] focus:outline-none"
                                        placeholder="John Doe"
                                        type="text"
                                        required
                                        name="name"
                                    />
                                </div>
                                <div class="w-1/2 my-1">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        Your Email(*)
                                    </div>
                                    <input
                                        v-model="form.email"
                                        class="border-gray-300 hover:border-gray-400 w-full border-b-2 bg-transparent py-2 focus:border-[#92C46A] focus:outline-none"
                                        placeholder="johndoe@example.com"
                                        required
                                        type="email"
                                        name="email"
                                    />
                                </div>
                            </div>

                            <div class="flex items-center gap-4 my-5">
                                <div class="w-1/2 mr-2">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        How many images do you edit per year?(*)
                                    </div>
                                    <select
                                        v-model="form.edit_image_per_year"
                                        id="edit_image_per_year"
                                        name="edit_image_per_year"
                                        class="border-gray-300 hover:border-gray-400 w-full appearance-none border-b-2 bg-transparent py-2 pr-4 focus:border-[#92C46A] focus:outline-none"
                                    >
                                        <option value="">Select...</option>
                                        <option value="1-499">
                                            Less than 500
                                        </option>
                                        <option value="500-1000">
                                            500-1000
                                        </option>
                                        <option value="1000-2500">
                                            1000-2500
                                        </option>
                                        <option value="2500-5000">
                                            2500-5000
                                        </option>
                                        <option value="5000-7500">
                                            5000-7500
                                        </option>
                                        <option value="7500-10000">
                                            7500-10000
                                        </option>
                                        <option value="10001">
                                            More than 10000
                                        </option>
                                    </select>
                                </div>

                                <div class="w-1/2">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        How often do you edit product images?(*)
                                    </div>
                                    <select
                                        v-model="form.edit_image_time"
                                        id="edit_image_time"
                                        name="edit_image_time"
                                        class="border-gray-300 hover:border-gray-400 w-full appearance-none border-b-2 bg-transparent py-2 pr-4 focus:border-[#92C46A] focus:outline-none"
                                    >
                                        <option value="">Select...</option>
                                        <option value="1">Daily</option>
                                        <option value="7">Weekly</option>
                                        <option value="30">Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 my-5">
                                <div class="w-1/2 mr-2">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        Password(*)
                                    </div>
                                    <input
                                        v-model="form.password"
                                        class="border-gray-300 hover:border-gray-400 w-full border-b-2 bg-transparent py-2 focus:border-[#92C46A] focus:outline-none"
                                        placeholder="Minimum 7 character"
                                        type="password"
                                        required
                                        name="password"
                                    />
                                </div>
                                <div class="w-1/2">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        Repeat Password(*)
                                    </div>
                                    <input
                                        v-model="form.password_confirmation"
                                        class="border-gray-300 hover:border-gray-400 w-full border-b-2 bg-transparent py-2 focus:border-[#92C46A] focus:outline-none"
                                        placeholder="Minimum 7 character"
                                        type="password"
                                        required
                                        name="password_confirmation"
                                    />
                                </div>
                            </div>

                            <!-- Upload Method -->
                            <div>
                                <div
                                    class="text-sm font-bold tracking-wide text-gray-700"
                                >
                                    Next Upload Method (Optional)
                                </div>
                                <div class="flex flex-wrap items-center mt-2">
                                    <input
                                        v-model="form.next_upload"
                                        type="radio"
                                        id="web"
                                        value="web"
                                        class="mr-2 form-radio"
                                    />
                                    <label for="web" class="mr-4">Web</label>

                                    <input
                                        v-model="form.next_upload"
                                        type="radio"
                                        id="ftp"
                                        value="FTP"
                                        class="mr-2 form-radio"
                                    />
                                    <label for="ftp" class="mr-4">FTP</label>

                                    <input
                                        v-model="form.next_upload"
                                        type="radio"
                                        id="dropbox"
                                        value="Dropbox"
                                        class="my-2 form-radio"
                                    />
                                    <label for="dropbox" class="mr-2 ml-1"
                                        >Dropbox</label
                                    >

                                    <input
                                        v-model="form.next_upload"
                                        type="radio"
                                        id="wetransfer"
                                        value="We Transfer"
                                        class="mr-2 form-radio"
                                    />
                                    <label for="wetransfer" class="mr-4"
                                        >We Transfer</label
                                    >

                                    <input
                                        v-model="form.next_upload"
                                        type="radio"
                                        id="google_drive"
                                        value="Google Drive"
                                        class="mr-2 form-radio"
                                    />
                                    <label for="google_drive"
                                        >Google Drive</label
                                    >
                                </div>
                            </div>

                            <div class="mt-5">
                                <input
                                    v-model="form.privacy_policy"
                                    class="form-checkbox border-gray-300 hover:border-gray-400 h-5 w-5 rounded"
                                    type="checkbox"
                                    name="privacy_policy"
                                    required
                                />
                                <span class="ml-2 text-sm">
                                    I agree with
                                    <a
                                        href="https://www.bzmgraphics.com/terms&amp;condition"
                                        class="text-slate-400 hover:underline"
                                        target="_blank"
                                    >
                                        privacy policy
                                    </a>
                                </span>
                            </div>

                            <div class="mt-5">
                                <button
                                    class="font-display w-full rounded-full bg-[#92C46A] p-4 font-semibold tracking-wide text-gray-100 shadow-lg hover:bg-[#92C46A]"
                                    type="submit"
                                    :disabled="form.processing"
                                >
                                    Sign Up
                                </button>
                            </div>
                        </form>

                        <div
                            class="mt-5 text-sm font-semibold text-center text-gray-700"
                        >
                            Already have an account ?
                            <a
                                :href="route('login')"
                                class="cursor-pointer text-[#92C46A] hover:text-indigo-800"
                            >
                                Log In
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </GuestLayout>
</template>

<style scoped>
input,
select {
    border: none;
    border-bottom: 4px solid;
    border-color: rgb(146 196 106 / var(--tw-border-opacity));
}
input[type="radio"] {
    border: 1px solid !important;
    border-color: black !important;
}
input[type="checkbox"] {
    border: 1px solid !important;
    border-color: black !important;
}
input:hover {
    border: none !important;
    outline: none !important;
    border-bottom: 4px solid !important;
    border-color: rgb(146 196 106 / var(--tw-border-opacity)) !important;
}
/*
input:active {
    border: none;
    outline: none;
    border-bottom: 4px solid;
    border-color: rgb(146 196 106 / var(--tw-border-opacity));
} */
[type="text"]:focus,
input:where(:not([type])):focus,
[type="email"]:focus,
[type="url"]:focus,
[type="password"]:focus,
[type="number"]:focus,
[type="date"]:focus,
[type="datetime-local"]:focus,
[type="month"]:focus,
[type="search"]:focus,
[type="tel"]:focus,
[type="time"]:focus,
[type="week"]:focus,
[multiple]:focus,
textarea:focus,
select:focus {
    outline: 2px solid transparent;
    outline-offset: none !important;
    --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: none !important;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
        var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
        calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
        var(--tw-shadow);
    border-color: none !important;
}
</style>
