<style>
    .waves {
        position: relative;
        width: 100%;
        height: 20vh;
        margin-bottom: -7px;
        min-height: 100px;
        max-height: 180px;
    }

    /* Animation */

    .parallax>use {
        animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
    }

    .parallax>use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;
    }

    .parallax>use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;
    }

    .parallax>use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;
    }

    .parallax>use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;
    }

    @keyframes move-forever {
        0% {
            transform: translate3d(-90px, 0, 0);
        }

        100% {
            transform: translate3d(85px, 0, 0);
        }
    }

    /*Shrinking for mobile*/
    @media (max-width: 768px) {
        .waves {
            height: 80px;
            min-height: 40px;
        }
    }
</style>


<div x-data="{ scrollY: 0 }" x-init="window.addEventListener('scroll', () => scrollY = window.scrollY)">
    <svg class="waves transition-colors duration-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
        <use xlink:href="#gentle-wave" x="49" y="0" :fill="scrollY > 1595 ? `rgba(200,200,200,0.7)` : 'rgba(0,0,0,0.7)'" class="transition-colors duration-500" />
        <use xlink:href="#gentle-wave" x="48" y="3" :fill="scrollY > 1600 ? `rgba(220,220,220,0.5)` : 'rgba(0,0,0,0.5)'" class="transition-colors duration-500" />
        <use xlink:href="#gentle-wave" x="48" y="5" :fill="scrollY > 1789 ? `rgba(240,240,240,0.3)` : 'rgba(0,0,0,0.3)'" class="transition-colors duration-500" />
        <use xlink:href="#gentle-wave" x="48" y="7" :fill="scrollY > 1465 ? `rgba(255,255,255,0.2)` : '#000'" class="transition-colors duration-500" />

            {{-- <use xlink:href="#gentle-wave" x="49" y="0" :fill="scrollY > 1595 ? `rgba(200,0,0,0.7)` : 'rgba(0,0,0,0.7)'" class="transition-colors duration-500" />
                <use xlink:href="#gentle-wave" x="48" y="3" :fill="scrollY > 1600 ? `rgba(220,0,0,0.5)` : 'rgba(0,0,0,0.5)'" class="transition-colors duration-500" />
                <use xlink:href="#gentle-wave" x="48" y="5" :fill="scrollY > 1789 ? `rgba(240,0,0,0.3)` : 'rgba(0,0,0,0.3)'" class="transition-colors duration-500" />
                <use xlink:href="#gentle-wave" x="48" y="7" :fill="scrollY > 1465 ? `rgba(255,0,0,0.2)` : '#000'" class="transition-colors duration-500" /> --}}
        </g>
</svg>

</div>

