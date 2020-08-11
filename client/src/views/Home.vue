<template>
  <div class="home">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Model name</th>
          <th>Brand</th>
          <th>Year</th>
        </tr>
      </thead>
      <tbody>
      <tr v-for="(car,i) in data" :key="i">
        <th scope="row">{{ car.id  }}</th>  
        <td>{{ car.name }}</td> 
        <td>{{ car.brand }}</td>  
        <td>{{ car.year }}</td>  
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Home',
  components: {
  },
  data() {
    return {
        data: [],
    }
  },
  methods : {
    getData: function() {
        axios.get('http://127.0.0.1:8000/api/cars').then(response => {
            this.data = response.data;
        });
    }
  },
  mounted() {
    this.getData();
  }
}
</script>
