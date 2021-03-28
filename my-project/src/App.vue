<template>
  <TopNav />

  <div class="container-wrapper">
    <Posts />
  </div>

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
import TopNav from "./components/TopNav.vue";
import Posts from "./components/Posts.vue";

export default {
  name: "App",
  components: {
    TopNav,
    Posts,
  },
};
</script>

<style>
.top-bar-category {
    float: left;
}

.top-bar-book {
    float: right;
}

@media (min-width: 768px){ 
    .top-bar-category {
        float: left;
    }
    .top-bar-book {
        float: right;
    }
}

.container-wrapper {
    display: flex;
    justify-content: center;
    padding-bottom: 138px;
    min-height: calc(100vh - 350px);
}

.posts, .container {
    background: white;
    padding: 6px;
    display: inline-flex;
    margin: 0 auto;
    margin-top: 60px;
    flex-direction: column;
}

.post {
    width: 900px;
    padding: 15px;
    display: flex;
    position: relative;
}

.post + .post {
    margin-top: 24px;   
}

.post-card {
    margin-right: 15px;
    border: solid 1px #9a9a9a;
    padding: 5px;
    height: 150px;
    top: 70px;
    position: sticky;
}

.post-card-img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    display: block;
}

.card-name {
    margin-top: 8px;
    margin-right: auto;
    margin-bottom: auto;
    margin-left: auto;         
    text-align: center;
    display: block;
}

.post-content {
    padding: 20px;
    border: solid 1px #9a9a9a;
}

.post-header {
    font-size: 30px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.post-action {
    padding: 3px 12px;
    border: solid 1px #a8a8a8;
    color: #a8a8a8;
    text-decoration: none;
    font-size: 14px;
}

.post-info {
    margin-top: 19px;
    padding: 12px 22px;
    background: #eee;
}

.post-review {
    margin-top: 17px;
    white-space: pre-line;
    line-height: 1.5em;
}

.page__info {
    text-align: center;
}

.paginator {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}
</style>
