<!DOCTYPE html>
<html lang="lv">
<head>
    <title>Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i" rel="stylesheet">
</head>
<body>

    <div id="app" class="app" v-if="hasMounted">
        <div class="intro" v-if="step == 'intro'">
            <h1>Testa uzdevums</h1>
            <div class="input"><input type="text" name="name" placeholder="Ievadiet savu vārdu" v-model="name"></div>
            <div class="select">
                <select name="test" v-model="test">
                    <option value="-1">Izvēlies testu</option>
                    <option v-for="(test, index) in tests" :value="index">{{test.name}}</option>
                </select>
            </div>
            <div class="error-message" v-if="error">Nepieciešams ierakstīt vārdu un izvēlēties testu</div>
            <div class="button">
                <button v-on:click="startTest">Sākt</button>
            </div>
        </div>
        <div class="test" v-if="step == 'test'">
            <h1>{{tests[test].questions[question].name}}</h1>
            <div class="questions">
                <div class="questions__item" v-for="(answer, index) in tests[test].questions[question].answers" v-on:click="submitAnswer(index)">{{answer}}</div>
            </div>
            <div class="progress"><div class="progress__bar" v-bind:style="{ width: 100 * (question) / Object.keys(tests[test].questions).length + '%' }"></div></div>
        </div>
        <div class="result" v-if="step == 'result'">
            <h1>Paldies, {{name}}!</h1>
            <p>Tu pareizi atbildēji uz {{correct}} no {{Object.keys(tests[test].questions).length}} jautājumiem.</p>
        </div>
    </div>

<!--Js-->
<script src="js/vendor/vue.js"></script>
<script src="js/vendor/axios.js"></script>
<script src="js/test.js"></script>
</body>
</html>