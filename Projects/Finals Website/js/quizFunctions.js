function addQuiz() {
          loadJSON(function(response) {
            quiz(response);
          }, 'json/questions.json');
          function quiz(jsoncall) {
            var objectName = JSON.parse(jsoncall);
            for(var i = 0; i < objectName.length; i++){
              var option = '<input type="radio" name="question" value="'
              option+= objectName[i].bike_name;
              option.value = objectName[i].bike_name;
              var select = document.getElementById("biketype");
              select.appendChild(option);
            }
          }
        }