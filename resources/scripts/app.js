import domReady from '@roots/sage/client/dom-ready';

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import { register } from 'swiper/element/bundle';
register();
const swiperHomeBanner = document.getElementById('homepage-banner')
if (swiperHomeBanner) {
    Object.assign(swiperHomeBanner, {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
        clickable: true,
        },
        navigation: {
            enabled: true,
        },
        breakpoints: {
            640: {
                navigation: {
                    enabled: false,
                },
            },
            768: {
                navigation: {
                    enabled: true,
                },
            },
        },
    });
    swiperHomeBanner.initialize();
}
const swiperEl = document.getElementById('swiper1')
if (swiperEl) {
    Object.assign(swiperEl, {
      centeredSlides: true,
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,
      pagination: {
      clickable: false,
      },
      navigation: {
          enabled: true,
      }
    });
    swiperEl.initialize();
}

import Swiper from 'swiper/bundle';
new Swiper("#labs-logo", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: false,
    navigation: false,
    enabled: false,
    breakpoints: {
        640: {
            slidesPerView: 4,
            spaceBetween: 20,
            enabled: false,
        },
        768: {
            slidesPerView: 5,
            spaceBetween: 40,
            enabled: true,
        },
        1024: {
            slidesPerView: 6,
            spaceBetween: 50,
            enabled: true,
        },
    },
});

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles

AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});

/**
 * Application entrypoint
 */
domReady(async () => {
    let translationSwitcher = function() {
        return {
            selected: 0,
            translations: {
                en: "Last Friday I saw a spotted striped blue worm shake hands with a legless lizard.",
                es: "El viernes pasado vi un gusano azul a rayas manchado estrecharle la mano con un lagarto sin patas.",
                de: "Letzten Freitag sah ich einen gefleckten gestreiften blauen Wurm, der einer beinlosen Eidechse die Hand schüttelte.",
                fr: "Vendredi dernier, j'ai vu un ver bleu rayé tacheté serrer la main d'un lézard sans pattes.",
                it: "Venerdì scorso ho visto un verme blu striato macchiato stringere la mano a una lucertola senza gambe.",
                jp: "先週の金曜日、縞模様の青いワームが脚のないトカゲと握手するのを見ました。",
                cn: "上周五，我看到一只斑点的蓝色蠕虫与一只无腿的蜥蜴握手。"
            },
            countries: [
                {
                    label: 'English',
                    lang: 'en',
                    flag: 'gb',
                },
                {
                    label: 'Spanish',
                    lang: 'es',
                    flag: 'es',
                },
                {
                    label: 'German',
                    lang: 'de',
                    flag: 'de',
                },
                {
                    label: 'French',
                    lang: 'fr',
                    flag: 'fr',
                },
                {
                    label: 'Italian',
                    lang: 'it',
                    flag: 'it',
                },
                {
                    label: 'Japanese',
                    lang: 'jp',
                    flag: 'jp',
                },
                {
                    label: 'Chinese',
                    lang: 'cn',
                    flag: 'cn',
                },
            ],
            menuToggle: false,
        }
    }
  });
  //app.js
//muc luc
document.addEventListener("DOMContentLoaded", function () {
  const tocContainer = document.getElementById('toc');
  if (!tocContainer) return;
 
  const headings = document.querySelectorAll('.prose h2, .prose h3');
  if (!headings.length) return;
 
  let toc = '<ul class="list-disc ml-6 space-y-1">';
  headings.forEach(h => {
    const id = h.textContent.trim().toLowerCase().replace(/\s+/g, '-').replace(/[^\w\-]/g, '');
    h.id = id;
    toc += `<li><a href="#${id}" class="text-blue-600 hover:underline">${h.textContent}</a></li>`;
  });
  toc += '</ul>';
 
  tocContainer.innerHTML = `<h2 class="text-lg font-semibold mb-2">Mục lục</h2>` + toc;
});
 

