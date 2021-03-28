<template>
  <nav aria-label="..." class="paginationv-top">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"
          >Previous</a
        >
      </li>
      <li class="page-item active" aria-current="page">
        <a class="page-link" href="#"
          >1 <span class="sr-only">(current)</span></a
        >
      </li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">Next</a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: "BottomNav",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
