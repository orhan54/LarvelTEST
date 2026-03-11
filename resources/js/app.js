import { createApp } from "vue";

const app = createApp({
    data() {
        return {
            personnes: window.__PERSONNES__ || [],
        };
    },
});

app.mount("#app");
