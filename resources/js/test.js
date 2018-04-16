var app = new Vue({
    el: '#app',
    data: {
        tests: [],
        test: -1,
        question: 0,
        name: '',
        error: false,
        step: 'intro',
        hasMounted: false,
        correct: 0
    },
    mounted : function() {
        this.getQuestions();
    },
    methods: {
        getQuestions: function(){
            axios.get("api.php")
                .then(function(response){
                    app.tests = response.data;
                    app.hasMounted = true;
                });
        },
        startTest: function(){
            if(app.name.trim() != '' && app.test >= 0){
                app.error = false;
                app.step = 'test';
            } else{
                app.error = true;
            }
        },
        submitAnswer: function(index){
            axios.get("check-answer.php", {
                params: {
                    test: app.test,
                    question: app.question,
                    answer: index
                }
            })
                .then(function(response){
                    app.correct += response.data.status ? 1 : 0;
                    if(app.question + 1 < Object.keys(app.tests[app.test].questions).length) app.question++;
                    else{
                        app.step = 'result';
                    }
                });
        }
    }
})