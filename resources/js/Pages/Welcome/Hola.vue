<template>
  <div>
    <h1 class="text-2xl font-semibold mb-3">Welcome to Aprendimos</h1>
    <p>Do your best ever!</p>
    <p>Never stop to learn!</p>
    <inertia-link :href="$route('about')">about Aprendimos</inertia-link>
    <h1>{{ foo }}</h1>
  </div>
</template>

<script>

export default {
  props: ['foo']
}
</script>
