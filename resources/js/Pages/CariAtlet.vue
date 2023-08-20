<template>
    <Main>
        <Head title="Cari Atlet" />
        <h1 class="text-center">Cari Atlet</h1>

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <form v-on:submit.prevent="cari_atlet">
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Cari Atlet"
                            v-model="form.nia"
                        />
                        <button class="input-group-text btn btn-warning">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </Main>
</template>

<script>
import Main from "./Layout/Main.vue";
import { Head } from "@inertiajs/vue3";

export default {
    components: {
        Main,
        Head,
    },
    data() {
        return {
            form: {
                nia: "",
            },
        };
    },
    methods: {
        cari_atlet() {
            this.$inertia.post("/cari-atlet", this.form);
        },
    },
};
</script>
