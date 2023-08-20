<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
        <div class="container">
            <Link class="navbar-brand" href="/">Larainertia</Link>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <Link class="nav-link" aria-current="page" href="/"
                            >Home</Link
                        >
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/about">About</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/galeri">Galeri</Link>
                    </li>
                    <li class="nav-item">
                        <Link class="nav-link" href="/kontak">Kontak</Link>
                    </li>
                    <li class="nav-item me-3">
                        <Link class="nav-link" href="/cari-atlet"
                            >Cari Atlet</Link
                        >
                    </li>
                    <li class="nav-item">
                        <Link class="btn btn-danger" as="button" href="/login"
                            >Login</Link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style></style>
