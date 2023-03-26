<template>
    <div>
        <div ref="map" style="height:800px;width:100%;"></div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      myLatLng: { lat: 35.962269154266004, lng: 138.4762749818901 },
    };
  },
  mounted() {
    const script = document.createElement('script');
    script.src =
        "https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAU_d2-bHrMsjRRZT2HKSY244qwYRr9L9U"
    script.async = true;
    document.head.appendChild(script);
    let timer = setInterval(() => {
      if (window.google) {
        clearInterval(timer);
        const map = new window.google.maps.Map(this.$refs.map, {
          center: this.myLatLng,
          zoom: 16,
        });
        new window.google.maps.Marker({
          position: this.myLatLng,
          map,
        });
      }
    }, 500);
  },
};
</script>
