<script setup lang="ts">
import { computed, ref } from "vue";
import { ExternalLink, MapPinned, Search } from "@lucide/vue";

const location = ref("");
const submitted = ref(false);

const searchUrl = computed(() => {
    const query = `mental health clinic or support group near ${location.value.trim()}`;

    return `https://www.google.com/maps/search/${encodeURIComponent(query)}`;
});

const findSupport = () => {
    submitted.value = true;
};
</script>

<template>
    <section class="mb-8 rounded-3xl bg-teal-900 p-7 text-white sm:p-9">
        <div class="grid gap-6 lg:grid-cols-[1fr_auto] lg:items-end">
            <div>
                <div class="flex items-center gap-3">
                    <MapPinned class="size-7 text-teal-200" />
                    <h2 class="text-2xl font-semibold">Find support near you</h2>
                </div>
                <p class="mt-3 max-w-2xl leading-7 text-teal-50">
                    Enter a ZIP code or city to create a map search for nearby mental-health clinics
                    and support groups.
                </p>
            </div>
            <form class="flex flex-col gap-3 sm:flex-row" @submit.prevent="findSupport">
                <label class="sr-only" for="support-location">ZIP code or city</label>
                <input
                    id="support-location"
                    v-model="location"
                    class="rounded-xl border border-teal-500 bg-white px-4 py-3 text-slate-900 placeholder:text-slate-500 focus:ring-2 focus:ring-amber-300 focus:outline-none"
                    type="text"
                    name="location"
                    autocomplete="postal-code"
                    placeholder="ZIP code or city"
                    pattern="[A-Za-z0-9 -]{3,40}"
                    required
                />
                <button
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-amber-300 px-5 py-3 font-semibold text-amber-950 transition hover:bg-amber-200"
                    type="submit"
                >
                    <Search class="size-4" /> Search
                </button>
            </form>
        </div>

        <div
            v-if="submitted"
            class="mt-6 rounded-2xl border border-teal-700 bg-teal-800/70 p-5"
            aria-live="polite"
        >
            <p class="font-medium">Ready to search near {{ location.trim() }}.</p>
            <p class="mt-1 text-sm leading-6 text-teal-100">
                This site does not save your location. Opening the result sends your search to
                Google Maps.
            </p>
            <a
                :href="searchUrl"
                target="_blank"
                rel="noreferrer"
                class="mt-4 inline-flex items-center gap-2 font-semibold text-amber-200 hover:text-amber-100 hover:underline"
            >
                Open map search <ExternalLink class="size-4" />
            </a>
        </div>
    </section>
</template>
