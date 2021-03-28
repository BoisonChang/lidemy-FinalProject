<template>
  <div>
    <Post class="post post-top" img="./icon1.jpg" name="柏崧" time="2020-12-20 24:00:00" />
    <Post class="post post-top" img="./icon2.jpg" name="宮本武藏" time="2020-12-19 21:00:39" />
    <Post class="post post-top" img="./icon3.jpg" name="可可" time="2020-11-07 05:30:49" />
    <Post class="post post-top" img="./icon4.jpg" name="肯德基爺爺" time="2020-11-01 11:44:05" />
    <Post class="post post-top" img="./icon5.jpg" name="邊境牧羊犬" time="2020-10-12 21:10:39" />
  </div>
</template>

<script>
import Post from "./Post.vue";
export default {
  name: "Posts",
  components: {
    Post,
  },
  props: ['img', 'name', 'time'],
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
