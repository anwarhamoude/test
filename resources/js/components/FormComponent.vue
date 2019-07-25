<template>
<div class="container">
  <form @submit.prevent="onSubmit">

  <div class="flex">
      <div class="title input">
        Product name:
      </div>
      <div>
        <input type="text" name="product" v-model="product" required>
      </div>
  </div>
  <div class="flex mt-11">
      <div class="title input">
        Quantity in stock:
      </div>
      <div>
        <input type="text" name="quantity" v-model="quantity" required>
      </div>
  </div>
  <div class="flex mt-11">
      <div class="title input">
        Price per item:
      </div>
      <div>
        <input type="text" name="price" v-model="price" required>
      </div>
  </div>
  <div class="button mt-21">
  <button type="submit">submit</button>
  </div>
  </form>
  <h3 class="mt-33">List of Product Records</h3>
    <div class="mt-21">
      <div class="center mt-11" v-for="(item, index) in items" :key="item.index">
        <strong>Product Name: </strong> {{item.product}} <strong> Available Quantity: </strong> {{item.quantity}} <strong>Unit Price: </strong> {{item.price}} <strong> Datetime Submitted: </strong> {{item.datetime_submitted}} <strong>Total Value: </strong> {{item.total}}
      </div>
      <h3>Products Total Value</h3>
      <div class="center">{{this.sum}}</div>
    </div>
</div>
</template>

<script>
export default {
  data(){
    return{
      product:'',
      quantity:'',
      price:'',
      items:[],
      sum:[]
    }
  },
  mounted() {
    this.getItems();
    this.getSum();
  },

  methods:{
    onSubmit(){
      axios.post('/webpages/store', {product:this.product,quantity:this.quantity,price:this.price,datetime_submitted:new Date().toLocaleString(),total:this.price*this.quantity})
          .then(this.items.push({product:this.product,quantity:this.quantity,price:this.price,datetime_submitted:new Date().toLocaleString(),total:this.price*this.quantity}))
          .then(this.onSuccess)
          .then(this.getSum)
          .catch(error => this.errors = error.response.data);
    },

    onSuccess(response){
      alert(response.data.message);

      this.errors = '';

      this.product = '';
      this.quantity = '';
      this.price = '';
    },

    getItems(){
      axios.get('/products')
        .then(response => {
          this.items = response.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    getSum(){
      axios.get('/sum')
      .then(response => {
        this.sum = response.data;
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
}
</script>
