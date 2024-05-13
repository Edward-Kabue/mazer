<script>
import { Head } from '@inertiajs/vue3'
import Layout from '@/Shared/Layout.vue'

export default {
  components: {
    Head,
  },
  layout: Layout,
}
</script>

<template>
    <div>
      <Head title="Dashboard" />
      <h1 class="mb-8 text-3xl font-bold">Dashboard</h1>
      <p class="mb-8 leading-normal">Hey there! Welcome to the crm </p>
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-800">Organizations</h2>
            <p class="mt-4 text-sm text-gray-600">Manage your organizations here.</p>
            <a href="/orgs" class="mt-6 text-sm font-semibold text-indigo-600 hover:text-indigo-500">View Organizations</a>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-800">Users</h2>
            <p class="mt-4 text-sm text-gray-600">Manage your users here.</p>
            <a href="/users" class="mt-6 text-sm font-semibold text-indigo-600 hover:text-indigo-500">View Users</a>
            </div>
        </div>
    </div>
  </template>
  
