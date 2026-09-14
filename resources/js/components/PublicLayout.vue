<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import { HeartHandshake, Menu, PhoneCall, X } from "@lucide/vue";
import { ref } from "vue";
const mobileOpen = ref(false);
const links = [
    { label: "Home", href: "/" },
    { label: "Awareness", href: "/awareness" },
    { label: "Support", href: "/support" },
    { label: "Resources", href: "/resources" },
    { label: "Hope Corner", href: "/hope" },
];
</script>
<template>
    <div class="min-h-screen bg-[#f7fbfa] text-slate-800">
        <a href="#main-content" class="skip-link">Skip to content</a>
        <header class="sticky top-0 z-30 border-b border-teal-100/80 bg-[#f7fbfa]/95 backdrop-blur">
            <div class="page-shell flex h-18 items-center justify-between gap-4">
                <Link
                    href="/"
                    class="flex items-center gap-2 font-semibold text-teal-950"
                    aria-label="Hope, home"
                    ><span
                        class="flex size-9 items-center justify-center rounded-xl bg-teal-800 text-white"
                        ><HeartHandshake class="size-5" /></span
                    ><span>Hope, here.</span></Link
                >
                <nav class="hidden items-center gap-5 lg:flex" aria-label="Primary navigation">
                    <Link
                        v-for="link in links"
                        :key="link.href"
                        :href="link.href"
                        class="nav-link"
                        >{{ link.label }}</Link
                    >
                </nav>
                <Link
                    href="/resources"
                    class="hidden items-center gap-2 rounded-full bg-rose-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-rose-800 sm:flex"
                    ><PhoneCall class="size-4" /> Get help now</Link
                ><button
                    class="rounded-lg p-2 text-teal-900 lg:hidden"
                    :aria-expanded="mobileOpen"
                    aria-label="Toggle menu"
                    @click="mobileOpen = !mobileOpen"
                >
                    <X v-if="mobileOpen" class="size-6" /><Menu v-else class="size-6" />
                </button>
            </div>
            <nav
                v-if="mobileOpen"
                class="page-shell flex flex-col gap-1 border-t border-teal-100 py-4 lg:hidden"
                aria-label="Mobile navigation"
            >
                <Link
                    v-for="link in links"
                    :key="link.href"
                    :href="link.href"
                    class="rounded-lg px-3 py-2 font-medium text-slate-700 hover:bg-teal-50"
                    @click="mobileOpen = false"
                    >{{ link.label }}</Link
                ><Link
                    href="/resources"
                    class="mt-2 rounded-lg bg-rose-700 px-3 py-2 text-center font-semibold text-white"
                    @click="mobileOpen = false"
                    >Get help now</Link
                >
            </nav>
        </header>
        <main id="main-content" class="page-shell"><slot /></main>
        <footer class="border-t border-teal-100 bg-white">
            <div class="page-shell grid gap-8 py-10 md:grid-cols-[1fr_auto]">
                <div>
                    <p class="font-semibold text-teal-950">Hope, here.</p>
                    <p class="mt-2 max-w-xl text-sm leading-6 text-slate-600">
                        An educational student project about suicide prevention, help-seeking, and
                        hope. It does not replace professional care.
                    </p>
                </div>
                <div class="text-sm leading-6 text-slate-600 md:text-right">
                    <p class="font-medium text-slate-800">Need immediate support?</p>
                    <p>Contact local emergency services or a crisis line in your area.</p>
                </div>
            </div>
        </footer>
    </div>
</template>
