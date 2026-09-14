<template>
    <figure
        class="overflow-hidden rounded-3xl border border-teal-100 bg-white p-6 shadow-sm sm:p-8"
    >
        <svg
            viewBox="0 0 640 370"
            class="mx-auto w-full max-w-2xl"
            role="img"
            aria-labelledby="care-circle-title care-circle-description"
        >
            <title id="care-circle-title">A simple pathway to support</title>
            <desc id="care-circle-description">
                An infographic showing three steps: notice, listen, and connect.
            </desc>
            <path d="M184 185H456" stroke="#b8ded8" stroke-width="10" stroke-linecap="round" />
            <path
                d="M184 185H456"
                stroke="#0f766e"
                stroke-width="10"
                stroke-linecap="round"
                stroke-dasharray="1 22"
            />
            <g>
                <circle cx="120" cy="185" r="82" fill="#e0f2f1" />
                <circle cx="120" cy="185" r="58" fill="#0f766e" />
                <path
                    d="M95 185c13-19 37-19 50 0"
                    stroke="white"
                    stroke-width="9"
                    stroke-linecap="round"
                    fill="none"
                />
                <circle cx="101" cy="164" r="5" fill="white" />
                <circle cx="139" cy="164" r="5" fill="white" />
                <text
                    x="120"
                    y="302"
                    text-anchor="middle"
                    fill="#134e4a"
                    font-size="25"
                    font-weight="700"
                >
                    Notice
                </text>
                <text x="120" y="332" text-anchor="middle" fill="#475569" font-size="19">
                    Check in with care
                </text>
            </g>
            <g>
                <circle cx="320" cy="185" r="82" fill="#fef3c7" />
                <circle cx="320" cy="185" r="58" fill="#d97706" />
                <path
                    d="M291 166h58v35c0 13-11 24-24 24h-10l-18 16v-16c-4-4-6-10-6-16v-43Z"
                    fill="none"
                    stroke="white"
                    stroke-width="8"
                    stroke-linejoin="round"
                />
                <text
                    x="320"
                    y="302"
                    text-anchor="middle"
                    fill="#92400e"
                    font-size="25"
                    font-weight="700"
                >
                    Listen
                </text>
                <text x="320" y="332" text-anchor="middle" fill="#475569" font-size="19">
                    Make room to talk
                </text>
            </g>
            <g>
                <circle cx="520" cy="185" r="82" fill="#dbeafe" />
                <circle cx="520" cy="185" r="58" fill="#2563eb" />
                <path
                    d="M494 190l17 17 35-42"
                    fill="none"
                    stroke="white"
                    stroke-width="10"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                />
                <text
                    x="520"
                    y="302"
                    text-anchor="middle"
                    fill="#1e3a8a"
                    font-size="25"
                    font-weight="700"
                >
                    Connect
                </text>
                <text x="520" y="332" text-anchor="middle" fill="#475569" font-size="19">
                    Find trusted support
                </text>
            </g>
        </svg>
        <figcaption class="mx-auto mt-3 max-w-2xl text-center text-sm leading-6 text-slate-600">
            A student-made reminder: you do not need to solve everything alone. Notice, listen, and
            help connect someone with support.
        </figcaption>
    </figure>
</template>
