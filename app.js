const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const answersIndicatorContainer = document.querySelector(".answers-indicator");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];

//push the questions intro availableQuestions Array
function setAvailableQuestions(){
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++ ){
        availableQuestions.push(quiz[i])
    }


 }
 // set question number and question options
 function getNewQuestion(){
    
    questionNumber.innerHTML = "Question " + (questionCounter + 1) + " of " + quiz.length;
    // set question text
    // get random question
    
    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
    // get the position of 'questionIndex' from the availableQuestion Array; 
    const index1= availableQuestions.indexOf(questionIndex);
     //remove the 'questionIndex' from the availableQuestion Array, so that the question does not  repeat
    availableQuestions.splice(index1, 1);
     //set options
     //get the length of options
    const optionLen = currentQuestion.options.length
    for(let i=0; i<optionLen; i++){
        availableOptions.push(i)
    }
    optionContainer.innerHTML = '';
    let animationDelay = 0.1;
    //create options in html
    for(let i=0; i<optionLen; i++){
        //random option
        const optonIndex = availableOptions[Math.floor(Math.random()* availableOptions.length)];
        // get the position of the optionIndex 'from the availableOptions
        const index2 = availableOptions.indexOf(optonIndex);
        // remove the 'optionIndex' from the availableOptions, so that the option does not repeat
        availableOptions.splice(index2,1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optonIndex];
        option.style.animationDelay = animationDelay +  's';
        animationDelay = animationDelay + 0.1;
        option.id = optonIndex;
        option.className = "option";
        optionContainer.appendChild(option)
        option.setAttribute("onclick", "getResult(this)");
    }
    questionCounter++

 }
 //result of current question
 function getResult(element){
     const id = parseInt(element.id);
    
     if(id === currentQuestion.answer){
        element.classList.add("correct");
        updateAnswerIndicator("correct");
     }
     else {
         console.log("answer is wrong");
     }
 }


 function answersIndicator(){
     const totalQuestion = quiz.length;
     for(let i=0; i<totalQuestion; i++){
         const indicator = document.createElement("div");
     }  answersIndicatorContainer.appendChild(indicator);
 }
    
    

 

 function next(){
     if(questionCounter == quiz.length){
         
         consele.log("correct");
     }
     else {
         getNewQuestion();
     }
    }   
    

 window.onload = function(){
    // first I will set all questions in availableQuestions Array
    setAvailableQuestions();
    //second I will call getNewQuestion(); function
    getNewQuestion();

}