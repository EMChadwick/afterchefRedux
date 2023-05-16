<script setup>
import UserWelcome from './UserWelcome'
import { Head } from '@inertiajs/vue3'

defineProps({ user: Object })
</script>

<template>
    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ user.name }}, Welcome to Afterchef!</p>
</template>