// Model
// Initialize - for more reliable reactivity and better performance
var data = {
  todo: {
    name: '',
    isCompleted: false
  },
  todos: []
}

// ViewModel
var vm = new Vue({
  el: "#todos",
  data: data,
  ready: function() {
    // Init
    this.fetchTodos();
  },
  methods: {
    fetchTodos: function () {
      var todos = [
        {
          name: "Learn Vue.js",
          isCompleted: true,
        },
        {
          name: "Have a haircut",
          isCompleted: false,
        },
        {
          name: "Go to the store",
          isCompleted: false,
        },
      ];

      // Set fetched todos to vm.$data.todos
      this.$set('todos', todos);
    },
    addTodo: function(e) {
      e.preventDefault();
      if (this.todo.name) {
        this.todos.push({
          name: this.todo.name,
          isCompleted: false
        });
        this.todo.name = '';
      }
    },
    toggleTodo: function(index) {
      this.todos[index].isCompleted = !this.todos[index].isCompleted;
    }
  }
});