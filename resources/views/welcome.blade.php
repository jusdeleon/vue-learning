<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <tasks inline-template>
                <h1>My Tasks</h1>
                <ul>
                    <li v-for="task in list">
                        @{{ task.name }}
                    </li>
                </ul>
            </tasks>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.js"></script>
        <script>
            Vue.component('tasks', {
                data: function() {
                    return {
                        list: [],
                    }
                },
                created: function () {
                    this.fetchTaskList();
                },
                methods: {
                    fetchTaskList: function() {
                        var vm = this;
                        this.$http.get('/sandbox/vue-learning/public/api/tasks', function(tasks) {
                            vm.list = tasks;
                        });
                    }
                }
            });

            new Vue({
                el: "body",
            });
        </script>
    </body>
</html>
