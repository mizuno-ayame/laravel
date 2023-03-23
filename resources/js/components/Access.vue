<template>
    <div>
        <div class="content">
        <div class="left">
            <div class="text-area">
                <h2 class="title">
                    <h1>施設案内</h1>
                </h2>
                <p class="copy">
                    〒384-1305長野県南佐久郡南牧村野辺山1003<br>帝産ロッヂ
                </p>
            </div>
        </div>
        <div class="right">
            <img src="images/nobeyama.jpg" alt="">
        </div>
      </div>
<!--
    <h1>施設案内</h1>
    <h4>〒384-1305長野県南佐久郡南牧村野辺山1003</h4>
    <h3>帝産ロッヂ</h3> -->

    <google-map />
    <div id="map" style="height:100px">
	</div>

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
html {
  font-size: 100%;
}
body {
  font-family: 'Heebo', sans-serif;
  letter-spacing: 0.2em;
}
img {
  max-width: 100%;
}

.content {
  display: flex;
  width: 100%;
  margin: 100px auto;
}
.content .left {
  width: 35%;
  position: relative;
}

.content .left::before {
  content: "";
  width: 163px;
  height: 100%;
  background: #fff;
  position: absolute;
  right: -81px;
  transform: skewX(-18deg);
}
.content .left .text-area {
  position: absolute;
  top: 60px;
  left: 60px;
}
.content .left .title {
  line-height: 1;
  margin-bottom: 56px;
}

.content .left .title h1 {
  display: block;
  font-size: 4.375rem;
  font-weight: bold;
  margin-bottom: 12px;
}
.content .left .title .ja {
  display: block;
  font-size: 0.875rem;
}
.content .left .copy {
  font-size: 0.875rem;
}
.content .right {
  width: 65%;
}

.content .right img {
  width: 100%;
  height: 500px;
  vertical-align: bottom;
  object-fit: cover;
}

/*-------------------------------------------
SP
-------------------------------------------*/
@media screen and (max-width: 900px) {
  .pc {
    display: none;
  }
  .content {
    flex-direction: column;
  }
  .content .left {
    width: 100%;
    padding: 0 16px;
    margin-bottom: 20px;
  }

  .content .left::before {
    content: none;
  }
  .content .left .title .en {
    font-size: 2.25rem;
  }

  .content .left .text-area {
    position: static;
  }
  .content .right {
    width: 100%;
  }
}

/* h1 {
    position: relative;
    padding: 0.1em 0.5em;
    background: -webkit-linear-gradient(to right, rgb(255, 186, 115), transparent);
    background: linear-gradient(to right, rgb(255, 186, 115), transparent);
    color: #545454;
    font-family: 'Heebo', sans-serif;
} */

</style>
