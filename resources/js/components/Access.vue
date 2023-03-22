<template>
    <div>
        <google-map />


    <div id="map" style="height:500px">
	</div>

	<h1>施設案内</h1>
	<h2>〒384-1305長野県南佐久郡南牧村野辺山1003</h2>
    <h2>帝産ロッヂ</h2>

    </div>
</template>
<script>
import GoogleMap from './GoogleMap.vue'

export default {
  components: {
    GoogleMap
  }
}
</script>


<style scoped>

h1 {
  position: relative;
  padding: 0.1em 0.5em;
  background: -webkit-linear-gradient(to right, rgb(255, 186, 115), transparent);
  background: linear-gradient(to right, rgb(255, 186, 115), transparent);
  color: #545454;
}

</style>
