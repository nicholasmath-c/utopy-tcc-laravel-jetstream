import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

import { Carousel, initTE } from "tw-elements";
initTE({ Carousel });


