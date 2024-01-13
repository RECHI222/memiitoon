<!-- resources/js/components/ExampleComponent.vue -->

<template>

  <div>
      <h1>Data from Laravel</h1>
      <ul>
          <li v-for="item in data" :key="item.id">{{ item.name }}</li>
      </ul>
     
  </div>
  <div>
    <h2>hello</h2>
  </div>
</template>

<script>
export default {
  data() {
      return {
          data: []
      };
  },
  mounted() {
      this.fetchData();
  },
  methods: {
      fetchData() {
          axios.get('/api/data') // データを取得するエンドポイントに置き換える
              .then(response => {
                  this.data = response.data;
              })
              .catch(error => {
                  console.error('Error fetching data:', error);
              });
      }
  }
}
</script>
