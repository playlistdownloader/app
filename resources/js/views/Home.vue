<template>
  <div>
    <vheader></vheader>
  </div>
</template>

<script>
import Header from "../components/layout/vheader";
export default {
  name: "Home",
  components: { Header },
  data() {
    return {};
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
