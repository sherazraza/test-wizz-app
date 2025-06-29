<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/vue3";

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
});

const submit = () => {
    form.post(route("password.email"));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div class="mb-4 text-lg font-bold text-center text-gray-600">
            <img
                src="https://ppp.bzmgraphics.com/images/app-logo.png"
                class="h-16 mx-auto"
                alt=""
            />
            <br />
            <b>Forgot Password</b>
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
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

            <div class="flex items-center justify-end mt-4">
                <button
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    class="block w-full px-4 py-3 font-medium text-white bg-[#92C46A] rounded-lg shadow hover:bg-[#7aad59] focus:bg-[#7aad59] focus:outline-none focus:ring-2 focus:ring-[#7aad59] focus:ring-offset-2"
                >
                    Reset Password
                </button>
            </div>
        </form>
    </GuestLayout>
</template>
