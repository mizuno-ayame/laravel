 <template>
    <div>
        <div id="content">
            <div class="d-flex justify-content-around align-items-center">
                <li class="nav-item mr-5">
                    <router-link v-bind:to="{name: 'company'}">施設概要</router-link>
                </li>
                <li class="nav-item mr-5">
                    <router-link v-bind:to="{name: 'sport'}">スポーツ合宿</router-link>
                </li>
                <li class="nav-item mr-5">
                    <router-link v-bind:to="{name: 'guide'}">ガイド</router-link>
                </li>
                <li class="nav-item mr-5">
                    <router-link v-bind:to="{name: 'access'}">アクセス</router-link>
                </li>
                <li class="nav-item mr-5">
                    <router-link v-bind:to="{name: 'clubteam'}">クラブ紹介</router-link>
                </li>
            </div>
        </div>
    </div>
 </template>

 <script>
     export default {}
 </script>

 <style scoped>

</style>
