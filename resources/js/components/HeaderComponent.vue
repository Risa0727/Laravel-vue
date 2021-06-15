<template>
  <div class="container-fluid bg-dark mb-3">
    <div class="container">
      <nav class="navbar-dark">
        <span class="navbar-brand mb-0 h1"><Vue Laravel SPA</span>
          <div>
            <button class="btn btn-success">List</button>
            <button class="btn btn-success">ADD</button>
          </div>
      </nav>
    </div>
  </div>
</template>

<script>
  export default {
      mounted() {
          console.log('HeaderComponent mounted.')
      }
  }
</script>
