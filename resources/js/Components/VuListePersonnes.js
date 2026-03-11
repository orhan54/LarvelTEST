export default {
    data() {
        return {
            personnes: [],
        };
    },
    mounted() {
        const appDiv = document.getElementById("app");
        this.personnes = JSON.parse(appDiv.dataset.personnes);
    },
    template: `
        <ul class="list-group">
            <li class="list-group-item" v-for="personne in personnes" :key="personne.id">
                {{ personne.nom }} - {{ personne.email }}
            </li>
        </ul>
    `,
};
