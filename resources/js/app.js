import "./bootstrap";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";

import {
    Datepicker,
    Input,
    Collapse,
    Select,
    Dropdown,
    Ripple,
    initTE,
    Sidenav,
    Offcanvas,
    Chart,
} from "tw-elements";
initTE({
    Datepicker,
    Input,
    Collapse,
    Select,
    Dropdown,
    Ripple,
    Sidenav,
    Offcanvas,
    Chart,
});

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();
