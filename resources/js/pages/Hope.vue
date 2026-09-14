<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { computed, ref } from "vue";
import { Check, Heart, PenLine, Sparkles } from "@lucide/vue";
import PublicLayout from "@/components/PublicLayout.vue";
const selected = ref<string[]>([]);
const ideas = [
    "Take a slow breath",
    "Message someone I trust",
    "Step outside or change rooms",
    "Listen to a calming song",
    "Talk to a counselor or adult",
];
const message = computed(() =>
    selected.value.length
        ? `You chose ${selected.value.length} small step${selected.value.length === 1 ? "" : "s"}. Keep this list close.`
        : "Choose a small step that feels possible right now.",
);
const toggle = (idea: string) =>
    (selected.value = selected.value.includes(idea)
        ? selected.value.filter((item) => item !== idea)
        : [...selected.value, idea]);
</script>
<template>
    <Head title="Hope" /><PublicLayout
        ><section class="page-hero">
            <p class="eyebrow">Hope corner</p>
            <h1>Make room for one small, caring step.</h1>
            <p>
                There is no single way to cope. Choose an idea that feels gentle and realistic for
                you today.
            </p>
        </section>
        <section class="grid gap-8 pb-16 lg:grid-cols-[.85fr_1.15fr]">
            <aside class="rounded-3xl bg-amber-100 p-8 text-amber-950">
                <Heart class="size-8" />
                <p class="mt-6 text-2xl leading-snug font-medium">
                    “You are allowed to ask for help before everything feels unbearable.”
                </p>
                <p class="mt-5 leading-7">
                    This tool is private to your browser. It does not send or save any personal
                    information.
                </p>
            </aside>
            <div class="resource-card sm:p-9">
                <div class="flex items-center gap-3">
                    <PenLine class="size-6 text-teal-700" />
                    <h2 class="section-title">My small-step list</h2>
                </div>
                <p class="mt-3 text-slate-600">{{ message }}</p>
                <div class="mt-6 space-y-3">
                    <button
                        v-for="idea in ideas"
                        :key="idea"
                        type="button"
                        class="choice-button"
                        :class="{
                            'choice-button-active': selected.includes(idea),
                        }"
                        @click="toggle(idea)"
                    >
                        <Check
                            class="size-5"
                            :class="selected.includes(idea) ? 'opacity-100' : 'opacity-0'"
                        />{{ idea }}
                    </button>
                </div>
                <div class="mt-6 flex items-center gap-2 text-sm text-teal-800">
                    <Sparkles class="size-4" /> Your choices stay on this page.
                </div>
            </div>
        </section></PublicLayout
    >
</template>
