<template>
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
    <a class="navbar-brand" href="index.html">BookDating</a>
    <button
      class="d-block navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="top-bar-category collapse navbar-collapse"
      id="navbarNavDropdown"
    >
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            分類專區
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">文學</a>
            <a class="dropdown-item" href="#">商業</a>
            <a class="dropdown-item" href="#">程式語言</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </li>
      </ul>
    </div>
    <div class="top-bar-book">
      <button class="btn btn-info mr-2 clear-save-todo">零規則</button>
    </div>
  </nav>
</template>

<script>
export default {
  name: "TopNav",
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
