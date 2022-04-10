const questions = [
    {
        question_id: "0",
        question: "First things first an easy one, what is the name of the first Harry Potter book?",
        options: [
            { option: "Harry Potter and the Prisoner of Azkaban" },
            { option: "Harry Potter and the Chamber of Secrets" },
            { option: "Harry Potter and the Goblet of Fire" },
            { option: "Harry Potter and the Philosophers Stone" },
        ],
        correct_answer: "Harry Potter and the Philosophers Stone",
    },

    {
        question_id: "1",
        question: "What was the name of Hagrids three-headed dog that guarded the Philosophers Stone?",
        options: [{ option: "Fluffy" }, { option: "Tiny" }, { option: "Snuggles" }, { option: "Bruce" }],
        correct_answer: "Fluffy",
    },
    {
        question_id: "2",
        question: "Who is the oldest Weasley Brother?",
        options: [{ option: "Percy" }, { option: "Bill" }, { option: "Charlie" }, { option: "Ron" }],
        correct_answer: "Bill",
    },
    {
        question_id: "3",
        question: "How many brothers and sisters does Ron Weasley have?",
        options: [{ option: "4" }, { option: "3" }, { option: "7" }, { option: "6" }],
        correct_answer: "6",
    },
    {
        question_id: "4",
        question: "What is the name of Hogwarts Schools gamekeeper?",
        options: [{ option: "Ralph" }, { option: "Ted" }, { option: "Homer" }, { option: "Rubeus Hagrid" }],
        correct_answer: "Rubeus Hagrid",
    },
    {
        question_id: "5",
        question: "Can you name the 3 Hogwarts houses other than Gryffindor?",
        options: [
            { option: "Slytherin, Hufflepuff and Ravenclaw" },
            { option: "Hufflepuff, Bumblebee and Catface" },
            { option: "Catface, Slytherin and Hufflepuff " },
            { option: "Stormzy, Sheeran and Hufflepuff" },
        ],
        correct_answer: "Slytherin, Hufflepuff and Ravenclaw",
    },
    {
        question_id: "6",
        question: "Who does Harry live with before going to Hogwarts?",
        options: [
            { option: "The Menaces" },
            { option: "The Simpsons" },
            { option: "The Dursleys" },
            { option: "The Sheerans" },
        ],
        correct_answer: "The Dursleys",
    },
    {
        question_id: "7",
        question: "What shape scar does Harry have on his forehead?",
        options: [
            { option: "A cat" },
            { option: "A moon" },
            { option: "A fidget spinner" },
            { option: "A lightning bolt" },
        ],
        correct_answer: "A lightning bolt",
    },
    {
        question_id: "8",
        question: "What does Harry accidentally do when he goes to the zoo?",
        options: [
            { option: "Make the glass in the snake enclosure disappear" },
            { option: "Teaches the monkeys to sing" },
            { option: "Turns a flamingo blue" },
            { option: "Turns a meerkat into a football" },
        ],
        correct_answer: "Make the glass in the snake enclosure disappear",
    },
    {
        question_id: "9",
        question: "In which year was Harry born?",
        options: [{ option: "1991" }, { option: "1976" }, { option: "2002" }, { option: "1980" }],
        correct_answer: "1980",
    },
];

const starQuizBtn = document.querySelector(".start-quiz-btn");
const quizContainer = document.querySelector(".quiz-container");
const nextBtn = document.querySelector(".next-btn");
const quizResultContainer = document.querySelector(".quiz-result-container");
const quizOverlay = document.querySelector(".quiz-overlay");
const quizCloseBtn = document.querySelector(".quiz-close-btn");
const quizCloseBtn1 = document.querySelector(".quiz-close-btn1");
const retakeQuizBtn = document.querySelector(".retake-quiz-btn");
const optionsContainer = document.querySelector(".options-container");
const resultHeading = document.querySelector(".result-heading");
const scoreText = document.querySelector(".score-text");
const question = document.querySelector(".question");

let questionNumber = 0;
let totalQuestion = questions.length;
let userAnswer = "";
let userScore = 0;

const init = () => {
    questionNumber = 0;
    userScore = 0;
    nextBtn.innerText = "Next";
};

// Start Button

starQuizBtn.addEventListener("click", () => {
    init();
    quizContainer.classList.add("active");
    quizOverlay.classList.add("active");
    displayQuestions(questionNumber);
});

// Next Button

nextBtn.addEventListener("click", () => {
    checkAnswer();
    questionNumber++;
    if (questionNumber == totalQuestion - 1) {
        nextBtn.innerText = "Finish";
    }
    if (questionNumber < totalQuestion) {
        displayQuestions(questionNumber);
    } else {
        quizResultContainer.classList.add("active");
        showResult();
        quizContainer.classList.remove("active");
    }
});

// Close Button

quizCloseBtn.addEventListener("click", () => {
    quizResultContainer.classList.remove("active");
    quizContainer.classList.remove("active");
    quizOverlay.classList.remove("active");
});
quizCloseBtn1.addEventListener("click", () => {
    quizResultContainer.classList.remove("active");
    quizContainer.classList.remove("active");
    quizOverlay.classList.remove("active");
});

// Retake Quiz Button

retakeQuizBtn.addEventListener("click", () => {
    init();
    quizResultContainer.classList.remove("active");
    quizContainer.classList.add("active");
    displayQuestions(questionNumber);
});

// Store Answer

const storeAnswer = (o) => {
    if (o) {
        userAnswer = o.target.nextElementSibling.innerText;
    } else {
        userAnswer = "";
    }
};

// Check Answer

const checkAnswer = () => {
    if (userAnswer == questions[questionNumber].correct_answer) {
        userScore++;
    }
};

// Display Questions

const displayQuestions = (qNo) => {
    question.innerText = questions[qNo].question;

    optionsContainer.innerHTML = "";

    questions[qNo].options.forEach((o, oIndex) => {
        const optionRadioButton = document.createElement("input");
        optionRadioButton.type = "radio";
        let optionId = "option" + oIndex;
        optionRadioButton.id = optionId;
        optionRadioButton.name = "option";
        optionRadioButton.addEventListener("change", storeAnswer);

        const optionLabel = document.createElement("label");
        optionLabel.htmlFor = optionId;
        optionLabel.classList.add("option");
        optionLabel.innerText = o.option;

        optionsContainer.appendChild(optionRadioButton);
        optionsContainer.appendChild(optionLabel);
    });
};

displayQuestions(questionNumber);

// Show the result

const showResult = () => {
    let percentage = (userScore / totalQuestion) * 100;

    if (percentage >= 60) {
        resultHeading.innerText = "Congratulations!";
    } else {
        resultHeading.innerText = "You can do better";
    }

    scoreText.innerText = `You have scored ${userScore} out of ${totalQuestion}.`;
};
