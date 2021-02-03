let app = new Vue({
    el: '#app',
    data: {
      albumList:[],
    },
    mounted(){
      axios.get('dist/php/db.php')
      .then(resp => {
        console.log(resp.data.response);
        this.albumList = resp.data.response;
      })
    }
})
