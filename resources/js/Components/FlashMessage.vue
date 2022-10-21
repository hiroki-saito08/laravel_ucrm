<script setup>
import Link from "@inertiajs/inertia-vue3";

defineProps({
  blogs: Array
})
</script>
<template>
  <div v-if="$page.props.flash.status === 'success'" class="bg-blue-300 text-white p-4">
    {{ $page.props.flash.message }}
  </div>
  <div v-if="$page.props.flash.status === 'danger'" class="bg-red-300 text-white p-4">
    {{ $page.props.flash.message }}
  </div>
</template>
