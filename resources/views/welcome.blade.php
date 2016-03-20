<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <tasks list="{{ $tasks }}" inline-template>
                <h1>My Tasks</h1>
                <ul>
                    <li v-for="task in list">
                        @{{ task.name }}
                    </li>
                </ul>
            </tasks>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.js"></script>
        <script>
            Vue.component('tasks', {
                props: ['list'],
                created: function () {
                    this.list = JSON.parse(this.list);
                }
            });

            new Vue({
                el: "body",
            });
        </script>
    </body>
</html>
