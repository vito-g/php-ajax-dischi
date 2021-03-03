new Vue({
  // Qui sotto dichiaro in quale container Vue verrà visualizzato:
  el: '#root',
  data: {
  arrayDiscs: [],
  genreArray: [],
  selected: ''
  },

  mounted() {
    const self = this;
    console.log('ho montato l\'app');

      axios.get('http://localhost/php-ajax-dischi/my-app/app/server.php')
      .then(function(resp) {
        console.log('risposta vue', resp.data);
        self.arrayDiscs = resp.data;
        console.log(self.arrayDiscs);

        self.arrayDiscs.forEach(function(element) {
          if (!self.genreArray.includes(element.genere)) {
            self.genreArray.push(element.genere);
            console.log(element.genere);
          }
        })

      });
  },

  methods: {
    filteredDiscs: function(item) {
      return item.genre == this.selected || this.selected == '';
    }
  }

});
Vue.config.devtools = true;
// Vue.prototype.$axios = axios;
