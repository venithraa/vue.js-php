<template>
    <div class="contact">
      <h1>{{ msg }}</h1>
       <!-- Your contact form -->

      <h2>Contact Form </h2>
      <form class="max-w-md mx-auto p-4 bg-white shadow-md rounded-lg" @submit.prevent="save">
  <div class="mb-4">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
    <input type="text" id="name" class="form-input w-full py-2 px-3 border rounded-md" v-model="contact.name">
  </div>
  <div class="mb-4">
    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
    <input type="email" id="email" class="form-input w-full py-2 px-3 border rounded-md" v-model="contact.email">
  </div>
  <div class="mb-4">
    <label for="civility" class="block text-gray-700 text-sm font-bold mb-2">Civility:</label>
    <select id="civility" class="form-select w-full py-2 px-3 border rounded-md" v-model="contact.civility">
      <option value="Mr">Mr</option>
      <option value="Mrs">Mrs</option>
    </select>
  </div>
  <div class="mb-4">
    <button type="submit" class="btn btn-primary py-2 px-4 rounded">
      Submit
    </button>
  </div>
</form>

     
       
<br><br><br><br>


  
      <h2>Contact list </h2>
      <input type="text" v-model="searchQuery" @input="filterContacts" name="search" placeholder="Search by name or email" style="float:right;padding-left:10px;">
      <br><br><br><br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Civility</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
    <tr v-for="contact in result" v-bind:key="contact.id">
          
          <td>{{ contact.id }}</td>
          <td>{{ contact.name }}</td>
          <td>{{ contact.email }}</td>
          <td>{{ contact.civility }}</td>
          <td><button type="button" class="btn btn-danger" @click="remove(contact)">Delete</button>
        </td>
    </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  import Vue from 'vue';
  import axios from 'axios';
  
  Vue.use(axios)
  
  export default {
    name: 'contactlist',
    data() {
      return {
        result: [],
        contact: {
          id: '',
          name: '',
          email: '',
          civility: ''
        },
        searchQuery: ''
      }
    },
    created() {
      this.ContactLoad();
    },
    methods: {
      ContactLoad() {
        var page = "http://127.0.0.1:8000/api/contacts";
        axios.get(page)
          .then(({ data }) => {
            this.result = data;
          });
      },
      save() {
        this.saveData();
      },
      saveData() {
        axios.post("http://127.0.0.1:8000/api/contacts", this.contact)
          .then(({ data }) => {
            alert("Contact saved");
            this.ContactLoad();
          });
      },
      remove(contact) {
        var url = `http://127.0.0.1:8000/api/contacts/${contact.id}`;
        axios.delete(url);
        alert("Contact deleted");
        this.ContactLoad();
      },
      filterContacts() {
      // Filter the contacts based on searchQuery directly in the result array
      const search = this.searchQuery.toLowerCase();
      if (search === '') {
        // If searchQuery is empty, reset result to the original data
        this.ContactLoad();
      } else {
        this.result = this.result.filter(contact =>
          contact.name.toLowerCase().includes(search) || contact.email.toLowerCase().includes(search)
        );
      
      }
     
    }

  }
}
  </script>
  
  <style scoped>
  .container{
    width:50%;
  }
  .form-select{
    width:28%;
    margin-left: 1%;
  }
  </style>
  