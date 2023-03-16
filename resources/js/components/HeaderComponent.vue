 <template>
        <div class="d-flex justify-content-around align-items-center">
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'company'}">company</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'sport'}">sport</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'guide'}">guide</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'access'}">access</router-link>
        </li>
        <li class="nav-item mr-1">
        <router-link v-bind:to="{name: 'clubteam'}">club</router-link>
        </li>
        </div>
 </template>

 <script>
     export default {}
 </script>
