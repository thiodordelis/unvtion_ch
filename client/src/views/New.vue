<template>
  <div>
  <form @submit.prevent="submit">
    <label for="name">
      name
    </label>
    <input type="text" name="name" id="name" v-model="form.name">
    <label for="brand">
      brand
    </label>
    <input type="text" name="brand" id="brand" v-model="form.brand">
    <label for="year">
      year
    </label>
    <input type="number" name="year" id="year" v-model="form.year">

    <button type="submit">
      submit
    </button>
  </form>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'submit',
  components: {
    //
  },
  data() {
    return {
      form: {
        name: '',
        brand: '',
        year: '',
      }
    }
  },
  methods: {
    submit () {
        axios.post('http://127.0.0.1:8000/api/car', this.form).then(() =>{
         this.$router.replace({
          name: 'Home'
        })
      })
    }
  }
}
</script>