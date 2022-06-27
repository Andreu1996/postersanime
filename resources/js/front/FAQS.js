export function FAQS () {

    let questions = document.querySelectorAll(".question-title");
    let answers = document.querySelectorAll(".question-content");
    let arrows = document.querySelectorAll(".question-title-icon");

    document.addEventListener("renderMainModule",( event =>{
        FAQS();
    }), {once: true});

    questions.forEach(question => {

        question.addEventListener("click", () => {
            
                
                answers.forEach(answer => {

                    if (answer.classList.contains("active")){
                        answer.classList.remove("active");
                        
                    } else if (question.dataset.answer == answer.dataset.answer){
                            answer.classList.add("active");
                        } else {
                            answer.classList.remove("active");
                        }
                     

                });

                arrows.forEach(arrow => {

                    if (arrow.classList.contains("active")){
                        arrow.classList.remove("active");
                        
                    } else if (question.dataset.answer == arrow.dataset.answer){
                        arrow.classList.add("active");
                        } else {
                            arrow.classList.remove("active");
                        }
                    
                });
        });

    });

}