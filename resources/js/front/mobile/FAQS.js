export function FAQS () {

    console.log("FAQS");

    let questions = document.querySelectorAll(".question-title");
    let answers = document.querySelectorAll(".question-content");
    let arrows = document.querySelectorAll(".question-title-icon");

    questions.forEach(question => {

        question.addEventListener("click", () => {
                
                answers.forEach(answer => {

                    if (answer.classList.contains("answerActive")){
                        answer.classList.remove("answerActive");
                        
                    } else if (question.dataset.answer == answer.dataset.answer){
                            answer.classList.add("answerActive");
                        } else {
                            answer.classList.remove("answerActive");
                        }
                     

                });

                arrows.forEach(arrow => {

                    if (arrow.classList.contains("arrowActive")){
                        arrow.classList.remove("arrowActive");
                        
                    } else if (question.dataset.answer == arrow.dataset.answer){
                        arrow.classList.add("arrowActive");
                        } else {
                            arrow.classList.remove("arrowActive");
                        }
                    
                });
        });

    });

}