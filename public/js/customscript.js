let userScore = 0;
let computerScore = 0;
const userScore_span = document.getElementById("user-score");
const computerScore_span = document.getElementById("computer-score");
const scoreBoard_div = document.querySelector(".score-board");
const result_p = document.querySelector(".result > p");
const rock_div = document.getElementById("rock");
const paper_div = document.getElementById("paper");
const scissors_div = document.getElementById("scissors");
const action_message_p = document.getElementById("action-message");
const user_label_div = document.getElementById("user-label").innerHTML;
const computer_action_p = document.getElementById("computer-action");
const leader_board_div = document.getElementById("leader-board");
//Defaults
const default_message = document.getElementById("action-message").innerHTML;
const default_result = document.querySelector(".result > p").innerHTML;
const default_caction = document.getElementById("computer-action").innerHTML;

function getComputerChoice() {
	const choices = ['rock', 'paper', 'scissors'];
	const randomNumber = Math.floor(Math.random() * 3);
	return choices[randomNumber];
}

function translate(word) {
	if(word == "rock") return "Rock";
	if(word == "paper") return "Paper";
	return "Scissors";
}

function win(userChoice, computerChoice) {
	userScore++;
	userScore_span.innerHTML = userScore;
	computerScore_span.innerHTML = computerScore;
	result_p.innerHTML = `${translate(userChoice)} beats ${translate(computerChoice)}. You Win!`;
	document.getElementById(userChoice).classList.add('green-glow');
	setTimeout(() => document.getElementById(userChoice).classList.remove('green-glow'), 400);
}

function lose(userChoice, computerChoice) {
	computerScore++;
	userScore_span.innerHTML = userScore;
	computerScore_span.innerHTML = computerScore;
	result_p.innerHTML = `${translate(userChoice)} yields ${translate(computerChoice)}. Computer Win!`;
	document.getElementById(userChoice).classList.add('red-glow');
	setTimeout(() => document.getElementById(userChoice).classList.remove('red-glow'), 400);
}

function draw(userChoice, computerChoice){
	result_p.innerHTML = `${translate(userChoice)} ${translate(computerChoice)}. Draw`;	
	document.getElementById(userChoice).classList.add('gray-glow');
	setTimeout(() => document.getElementById(userChoice).classList.remove('gray-glow'), 400);
}

function game(userChoice) {
	const computerChoice = getComputerChoice();
	action_message_p.innerHTML = "You picked " + userChoice;
	computer_action_p.innerHTML = "Computer picked " + computerChoice;
	switch(userChoice + computerChoice) {
		case "rockscissors":
		case "paperrock":
		case "scissorspaper":
			win(userChoice, computerChoice);
			break;
		case "rockpaper":
		case "paperscissors":
		case "scissorsrock":
			lose(userChoice, computerChoice);
			break;	
		case "rockrock":
		case "paperpaper":
		case "scissorsscissors":
			draw(userChoice, computerChoice);
			break;	
	}
}

function main() {
	rock_div.addEventListener('click', () => game("rock"));
	paper_div.addEventListener('click', () => game("paper"));
	scissors_div.addEventListener('click', () => game("scissors"));
}

function resetGame() {
	userScore = 0;
	computerScore = 0;
	userScore_span.innerHTML = userScore;
 	computerScore_span.innerHTML =	computerScore;
	action_message_p.innerHTML = default_message;
	result_p.innerHTML = default_result;
	computer_action_p.innerHTML = default_caction;
}

function saveScore() {
	var fscore = userScore - computerScore; 

	document.getElementById('uName').setAttribute('value', user_label_div);
	document.getElementById('score').setAttribute('value', fscore);

	alert("Score Saved");

}