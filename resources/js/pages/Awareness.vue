<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import { CheckCircle2, CircleHelp, Eye, XCircle } from "@lucide/vue";
import CareCircleGraphic from "@/components/CareCircleGraphic.vue";
import PublicLayout from "@/components/PublicLayout.vue";
const signs = [
    "Talking about feeling hopeless, trapped, or like a burden",
    "Withdrawing from friends, family, or usual activities",
    "Big changes in mood, sleep, or behavior",
    "Giving away important possessions or saying goodbye",
];
</script>
<template>
    <Head title="Facts & Awareness" /><PublicLayout
        ><section class="page-hero">
            <p class="eyebrow">Facts and awareness</p>
            <h1>Understanding can open the door to support.</h1>
            <p>
                Suicide is complex and preventable. It is never caused by one event or one kind of
                person.
            </p>
        </section>
        <section class="grid gap-8 pb-16 lg:grid-cols-[1.1fr_.9fr]">
            <div class="resource-card sm:p-9">
                <div class="flex items-center gap-3">
                    <Eye class="size-6 text-teal-700" />
                    <h2 class="section-title">Possible warning signs</h2>
                </div>
                <p class="mt-3 text-slate-600">
                    A sign does not prove what someone is experiencing. It is a reason to check in
                    with kindness.
                </p>
                <ul class="mt-6 space-y-4">
                    <li v-for="sign in signs" :key="sign" class="flex gap-3">
                        <CheckCircle2 class="mt-0.5 size-5 shrink-0 text-teal-700" /><span>{{
                            sign
                        }}</span>
                    </li>
                </ul>
            </div>
            <aside class="rounded-3xl bg-amber-100 p-7 text-amber-950 sm:p-9">
                <CircleHelp class="size-7" />
                <h2 class="mt-4 text-2xl font-semibold">If you are worried</h2>
                <p class="mt-3 leading-7">
                    Choose a private moment, listen without judgment, ask directly and calmly if
                    they are safe, and help them reach a trusted adult or professional.
                </p>
                <Link href="/support" class="text-link mt-6">How to support someone</Link>
            </aside>
        </section>
        <CareCircleGraphic class="mb-16" />
        <section class="pb-16">
            <h2 class="section-title text-center">Myths and facts</h2>
            <div class="mt-7 grid gap-5 md:grid-cols-2">
                <article class="myth-card">
                    <XCircle class="size-6 text-rose-700" />
                    <p class="font-semibold">Myth: Talking about suicide makes it happen.</p>
                    <p>
                        Fact: Asking with care can help someone feel understood and make it easier
                        to seek support.
                    </p>
                </article>
                <article class="myth-card">
                    <XCircle class="size-6 text-rose-700" />
                    <p class="font-semibold">Myth: People who need help are weak.</p>
                    <p>
                        Fact: Reaching out takes strength. Support and treatment can help people
                        recover.
                    </p>
                </article>
            </div>
        </section></PublicLayout
    >
</template>
