<template>
    <div>
      <h1>Organizations</h1>
      <ul>
        <li v-for="org in orgs" :key="org.id">
          <h2>{{ org.name }}</h2>
         
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      orgs: {
        type: Array,
        required: true
      }
    }
  }
  </script>
  