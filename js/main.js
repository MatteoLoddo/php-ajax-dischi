new Vue({
  el: "#app",

  data:{
    discList:[],

  },
  mounted(){
    axios.get("../database/apiData.php")
    .then(resp =>{
      this.discList = resp.data.discList
    })
  }
})




