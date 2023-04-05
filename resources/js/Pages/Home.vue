<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
        currentPage: String,
    })
</script>

<template>
    <MainLayout :current-page="currentPage">
        <h1>Home Page</h1>
    </MainLayout>
</template>
