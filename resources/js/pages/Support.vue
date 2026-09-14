<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import { Ear, HandHeart, UsersRound } from "@lucide/vue";
import PublicLayout from "@/components/PublicLayout.vue";
</script>
<template>
    <Head title="Support & Strategies" /><PublicLayout
        ><section class="page-hero">
            <p class="eyebrow">Support and strategies</p>
            <h1>Small acts of care can help someone feel less alone.</h1>
            <p>
                You do not need perfect words. Being present, listening, and connecting someone to
                support are meaningful actions.
            </p>
        </section>
        <section class="grid gap-6 pb-16 md:grid-cols-3">
            <article class="info-card">
                <Ear class="size-7 text-teal-700" />
                <h2>Listen first</h2>
                <p>
                    Give the person time to speak. Avoid minimizing, arguing, or rushing to solve
                    everything.
                </p>
            </article>
            <article class="info-card">
                <HandHeart class="size-7 text-teal-700" />
                <h2>Stay connected</h2>
                <p>
                    Say what you notice with kindness and check in again. A simple “I’m here with
                    you” matters.
                </p>
            </article>
            <article class="info-card">
                <UsersRound class="size-7 text-teal-700" />
                <h2>Bring in support</h2>
                <p>
                    Encourage a trusted adult, counselor, health worker, or emergency service when
                    safety is a concern.
                </p>
            </article>
        </section>
        <section class="mb-16 rounded-3xl bg-teal-900 p-8 text-white sm:p-10">
            <p class="text-sm font-semibold tracking-widest text-teal-200 uppercase">
                A gentle script
            </p>
            <p class="mt-4 max-w-3xl text-2xl leading-relaxed">
                “I’ve noticed you seem to be carrying a lot. I care about you. Would you like to
                talk, or can we find someone who can help?”
            </p>
            <Link href="/resources" class="button-light mt-7">Find support options</Link>
        </section></PublicLayout
    >
</template>
