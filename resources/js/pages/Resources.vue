<script setup lang="ts">
import { Head } from "@inertiajs/vue3";
import { AlertTriangle, ExternalLink, HeartPulse, School } from "@lucide/vue";
import LocalSupportLocator from "@/components/LocalSupportLocator.vue";
import PublicLayout from "@/components/PublicLayout.vue";
</script>
<template>
    <Head title="Resources & Helplines" />
    <PublicLayout>
        <section class="page-hero">
            <p class="eyebrow">Resources and helplines</p>
            <h1>Reaching out can be the next right step.</h1>
            <p>
                If there is an immediate risk of harm, contact local emergency services now and stay
                with the person if it is safe to do so.
            </p>
        </section>

        <section
            class="mb-8 rounded-3xl border border-rose-200 bg-rose-50 p-7 text-rose-950 sm:p-9"
        >
            <div class="flex gap-4">
                <AlertTriangle class="mt-1 size-6 shrink-0" />
                <div>
                    <h2 class="text-2xl font-semibold">In an emergency</h2>
                    <p class="mt-2 leading-7">
                        Call your local emergency number or go to the nearest emergency department.
                        Do not leave a person in immediate danger alone.
                    </p>
                </div>
            </div>
        </section>

        <LocalSupportLocator />

        <section class="grid gap-6 pb-16 md:grid-cols-2">
            <article class="resource-card">
                <HeartPulse class="size-7 text-teal-700" />
                <h2>Crisis support</h2>
                <p>
                    Philippines: NCMH Crisis Hotline —
                    <strong>1553</strong> or <strong>1800-1888-1553</strong> (nationwide landline
                    toll-free) or <strong>(02) 7-989-USAP (8727)</strong>.
                </p>
                <a
                    class="text-link mt-5"
                    href="https://caro.doh.gov.ph/ito-na-ang-sign-na-hinihintay-mo-i-chat-mo-na-siya/"
                    target="_blank"
                    rel="noreferrer"
                    >Verify hotline details <ExternalLink class="size-4"
                /></a>
            </article>
            <article class="resource-card">
                <School class="size-7 text-teal-700" />
                <h2>Trusted people nearby</h2>
                <p>
                    A school counselor, guidance office, doctor, social worker, parent, teacher,
                    faith leader, or trusted adult can help you find the next step.
                </p>
            </article>
        </section>
        <section class="pb-16">
            <h2 class="section-title">Sources used on this site</h2>
            <ul class="mt-5 space-y-3 text-slate-600">
                <li>
                    <a
                        class="source-link"
                        href="https://www.who.int/news-room/questions-and-answers/item/suicide"
                        target="_blank"
                        rel="noreferrer"
                        >World Health Organization — Suicide Q&amp;A <ExternalLink class="size-4"
                    /></a>
                </li>
                <li>
                    <a
                        class="source-link"
                        href="https://caro.doh.gov.ph/ito-na-ang-sign-na-hinihintay-mo-i-chat-mo-na-siya/"
                        target="_blank"
                        rel="noreferrer"
                        >Department of Health CAR — NCMH Crisis Hotline
                        <ExternalLink class="size-4"
                    /></a>
                </li>
            </ul></section
    ></PublicLayout>
</template>
