<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Log in" />
        <main class="grid h-screen grid-cols-1 lg:grid-cols-2">
            <!-- Left Side -->
            <div class="h-full w-full bg-[#F9FCF4] lg:flex items-center hidden">
                <img
                    src="http://upload.bzmgraphics.com/assets/studio-photographer.svg"
                    alt="banner"
                />
            </div>

            <!-- form -->
            <div
                class="flex justify-center w-full h-full p-10 bg-white place-items-center"
            >
                <div class="w-full">
                    <div>
                        <h2 class="text-4xl font-bold text-black mb-14">
                            <span class="text-[#92C46A]">bZm Graphics</span>
                            Client Area
                        </h2>

                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="email" value="Email" />

                                <TextInput
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    v-model="form.email"
                                    placeholder="johndoe@example.com"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.email"
                                />
                            </div>

                            <div class="mt-4">
                                <div class="flex items-center justify-between">
                                    <div
                                        class="text-sm font-bold tracking-wide text-gray-700"
                                    >
                                        Password
                                    </div>
                                    <div>
                                        <Link
                                            v-if="canResetPassword"
                                            :href="route('password.request')"
                                            class="font-display cursor-pointer text-xs font-semibold text-[#92C46A] hover:text-indigo-800"
                                            href="https://upload.bzmgraphics.com/forgot-password"
                                        >
                                            Forgot Password?
                                        </Link>
                                    </div>
                                </div>

                                <TextInput
                                    id="password"
                                    type="password"
                                    placeholder="Enter your password"
                                    class="mt-1 block w-full"
                                    v-model="form.password"
                                    required
                                    autocomplete="current-password"
                                />

                                <InputError
                                    class="mt-2"
                                    :message="form.errors.password"
                                />
                            </div>

                            <!-- <div class="block mt-4">
                                <label class="flex items-center">
                                    <Checkbox
                                        name="remember"
                                        v-model:checked="form.remember"
                                    />
                                    <span class="ms-2 text-sm text-gray-600"
                                        >Remember me</span
                                    >
                                </label>
                            </div> -->

                            <div class="flex items-center justify-end mt-4">
                                <button
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                    class="font-display focus:shadow-outline w-full rounded-full bg-[#92C46A] p-4 font-semibold tracking-wide text-gray-100 shadow-lg hover:bg-[#92C46A] focus:outline-none"
                                    type="submit"
                                >
                                    Log In
                                </button>
                            </div>
                        </form>

                        <div
                            class="mt-12 text-sm font-semibold text-center text-gray-700 font-display"
                        >
                            Don't have an account ?
                            <a
                                :href="route('register')"
                                class="cursor-pointer text-[#92C46A] hover:text-indigo-800"
                                >Sign up</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form> -->
    </GuestLayout>
</template>
<style scoped>
input {
    border: none;
    border-bottom: 4px solid;
    background-color: transparent;
    border-color: rgb(146 196 106 / var(--tw-border-opacity));
}
input:focus {
    border: none !important;
    outline: none !important;
    border-bottom: 4px solid !important;
    border-color: rgb(146 196 106 / var(--tw-border-opacity)) !important;
}
input:active {
    border: none;
    outline: none;
    border-bottom: 4px solid;
    border-color: rgb(146 196 106 / var(--tw-border-opacity));
}
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
