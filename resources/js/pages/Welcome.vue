<script setup lang="ts">
import { Head, Link } from "@inertiajs/vue3";
import { ArrowRight, Heart, MessageCircleHeart, ShieldCheck, Sparkles } from "@lucide/vue";
import PublicLayout from "@/components/PublicLayout.vue";
</script>

<template>
    <Head title="Home" />
    <PublicLayout>
        <section class="grid gap-12 py-14 lg:grid-cols-[1.1fr_.9fr] lg:items-center lg:py-24">
            <div>
                <p class="eyebrow">Suicide prevention awareness</p>
                <h1
                    class="mt-5 max-w-3xl text-5xl font-semibold tracking-tight text-slate-900 sm:text-6xl"
                >
                    Hope can begin with one conversation.
                </h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                    This is a gentle space to learn, listen, and find support. Suicide prevention is
                    about noticing when someone may be struggling and helping them connect with
                    care.
                </p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <Link href="/resources" class="button-primary"
                        >Find support <ArrowRight class="size-4" /></Link
                    ><Link href="/awareness" class="button-secondary">Learn the signs</Link>
                </div>
                <p class="mt-5 text-sm text-slate-500">
                    You do not have to handle a difficult moment alone.
                </p>
            </div>
            <div
                class="relative overflow-hidden rounded-4xl bg-teal-900 p-8 text-white shadow-xl sm:p-10"
            >
                <div class="absolute -top-16 -right-16 size-48 rounded-full bg-teal-700/70" />
                <div class="absolute -bottom-20 -left-12 size-52 rounded-full bg-amber-300/20" />
                <div class="relative">
                    <div class="flex size-12 items-center justify-center rounded-2xl bg-white/15">
                        <Heart class="size-6" />
                    </div>
                    <p class="mt-10 text-sm font-medium tracking-[0.2em] text-teal-100 uppercase">
                        A reminder
                    </p>
                    <blockquote class="mt-4 text-3xl leading-tight font-medium">
                        “Asking for help is a sign of courage.”
                    </blockquote>
                    <p class="mt-7 border-t border-white/20 pt-5 text-sm leading-6 text-teal-50">
                        A caring message, a quiet check-in, or a referral to a trusted adult can
                        make a meaningful difference.
                    </p>
                </div>
            </div>
        </section>
        <section class="border-y border-teal-100 py-12 md:py-14">
            <div class="grid gap-6 md:grid-cols-[1.05fr_.95fr] md:items-center">
                <figure class="overflow-hidden rounded-3xl bg-white shadow-sm ring-1 ring-teal-100">
                    <img
                        src="/media/sp-prevention.jpg"
                        alt="Suicide prevention awareness poster about warning signs, support, and hope"
                        class="max-h-168 w-full object-contain object-top"
                    />
                    <figcaption class="px-6 py-4 text-sm leading-6 text-slate-600 sm:px-7">
                        Awareness starts with noticing, listening, and helping someone find support.
                    </figcaption>
                </figure>
                <div class="rounded-3xl bg-[#f3ead8] p-7 text-teal-950 sm:p-9">
                    <p class="eyebrow text-teal-800">Suicide Prevention Month</p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900">
                        Every conversation can make room for hope.
                    </h2>
                    <p class="mt-5 leading-7 text-slate-700">
                        This month is a reminder to learn the warning signs, challenge the stigma,
                        and make it easier for people to ask for support. Prevention is a shared
                        responsibility, and care can begin with simply listening.
                    </p>
                    <div class="mt-6 border-t border-amber-900/15 pt-5">
                        <p class="font-semibold text-teal-950">A small way to take part:</p>
                        <p class="mt-2 leading-7 text-slate-700">
                            Check in with someone, share a trusted resource, or let a person know
                            they do not have to face a difficult moment alone.
                        </p>
                    </div>
                    <Link href="/awareness" class="text-link mt-7"
                        >Learn the warning signs <ArrowRight class="size-4"
                    /></Link>
                </div>
            </div>
        </section>
        <section class="py-12 md:py-14">
            <div class="rounded-3xl border-t-4 border-teal-800 bg-teal-50 p-6 text-teal-950 shadow-sm ring-1 ring-teal-100 sm:p-8 md:p-10">
                <div>
                    <p class="text-sm font-bold tracking-[0.16em] text-teal-800 uppercase">
                        Watch and reflect
                    </p>
                    <h2 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">
                        A few minutes can open a caring conversation.
                    </h2>
                    <p class="mt-4 max-w-xl leading-7 text-slate-700">
                        Take a moment with this short resource, then explore the practical ways to
                        support yourself or someone you care about.
                    </p>
                </div>
                <div class="mt-8 grid gap-5 rounded-2xl border border-teal-100 bg-white/90 p-4 shadow-sm sm:p-5 md:grid-cols-2">
                    <div class="flex flex-col items-center">
                        <video
                            class="aspect-9/16 w-full max-w-60 rounded-xl bg-teal-950 object-contain shadow-md ring-1 ring-teal-200"
                            controls
                            preload="metadata"
                            aria-label="Suicide prevention awareness video"
                        >
                            <source src="/media/sp-video.mp4" type="video/mp4" />
                            Your browser does not support the video element.
                        </video>
                        <p class="mt-3 text-center text-sm font-semibold tracking-[0.16em] text-teal-900">
                            -MJ
                        </p>
                    </div>
                    <div class="flex flex-col items-center">
                        <video
                            class="aspect-9/16 w-full max-w-60 rounded-xl bg-teal-950 object-contain shadow-md ring-1 ring-teal-200"
                            controls
                            preload="metadata"
                            aria-label="Additional suicide prevention awareness video"
                        >
                            <source src="/media/sp-video2.mp4" type="video/mp4" />
                            Your browser does not support the video element.
                        </video>
                        <p class="mt-3 text-center text-sm font-semibold tracking-[0.16em] text-teal-900">
                            -CHRESSEL
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid gap-6 border-y border-teal-100 py-12 md:grid-cols-2 md:py-14">
            <article class="group overflow-hidden rounded-3xl bg-[#dcebd8] p-7 sm:p-9">
                <div class="flex items-start justify-between gap-5">
                    <div>
                        <p class="eyebrow text-slate-700">Start with awareness</p>
                        <h2 class="mt-4 max-w-md text-3xl font-semibold tracking-tight text-slate-900">
                            Learn how to notice a change.
                        </h2>
                    </div>
                    <ShieldCheck class="size-9 shrink-0 text-teal-800" />
                </div>
                <p class="mt-5 max-w-lg leading-7 text-slate-700">
                    Understand common warning signs, what can contribute to distress, and how a
                    caring conversation can open a door to support.
                </p>
                <Link href="/awareness" class="text-link mt-7"
                    >Explore awareness <ArrowRight class="size-4 transition group-hover:translate-x-1"
                /></Link>
            </article>
            <article class="group overflow-hidden rounded-3xl bg-[#e7def1] p-7 sm:p-9">
                <div class="flex items-start justify-between gap-5">
                    <div>
                        <p class="eyebrow text-slate-700">Make room for hope</p>
                        <h2 class="mt-4 max-w-md text-3xl font-semibold tracking-tight text-slate-900">
                            Choose one small, caring step.
                        </h2>
                    </div>
                    <Sparkles class="size-9 shrink-0 text-teal-800" />
                </div>
                <p class="mt-5 max-w-lg leading-7 text-slate-700">
                    Try a gentle idea for this moment, from taking a breath to reaching out to
                    someone you trust. You can choose what feels possible today.
                </p>
                <Link href="/hope" class="text-link mt-7"
                    >Visit the hope corner <ArrowRight class="size-4 transition group-hover:translate-x-1"
                /></Link>
            </article>
        </section>
        <section class="border-y border-teal-100 bg-white/70 py-14">
            <div class="grid gap-6 md:grid-cols-3">
                <article class="info-card">
                    <ShieldCheck class="size-7 text-teal-700" />
                    <h2>Notice with care</h2>
                    <p>Learn common warning signs and replace harmful myths with facts.</p>
                    <Link href="/awareness" class="text-link"
                        >Explore awareness <ArrowRight class="size-4"
                    /></Link>
                </article>
                <article class="info-card">
                    <MessageCircleHeart class="size-7 text-teal-700" />
                    <h2>Support a friend</h2>
                    <p>Simple, respectful ways to listen and encourage someone to seek help.</p>
                    <Link href="/support" class="text-link"
                        >View support strategies <ArrowRight class="size-4"
                    /></Link>
                </article>
                <article class="info-card">
                    <Sparkles class="size-7 text-teal-700" />
                    <h2>Hold on to hope</h2>
                    <p>Small practices can help create space for rest, connection, and healing.</p>
                    <Link href="/hope" class="text-link"
                        >Visit the hope corner <ArrowRight class="size-4"
                    /></Link>
                </article>
            </div>
        </section>
        <section class="py-16 text-center">
            <p class="eyebrow">Take one small step</p>
            <h2 class="mt-4 text-3xl font-semibold tracking-tight text-slate-900">
                Support is closer than it may feel.
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-slate-600">
                Explore trusted resources, save a helpful number, or share this page with someone
                who may need it.
            </p>
            <Link href="/resources" class="button-primary mt-7">Explore resources</Link>
        </section>
    </PublicLayout>
</template>
