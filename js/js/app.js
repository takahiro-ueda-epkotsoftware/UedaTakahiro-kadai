const quiz = [
	{
		question: '東京読売ジャイアンツの,現在の背番号25番の選手は誰でしょう。',
		answers: [
			'吉川尚輝',
			'坂本勇人',
			'岡本和真',
			'菅野智之'
		],
		correct: '岡本和真'
	},
{
		question: '東京都にある、世界自然遺産はどこでしょう。',
		answers: [
			'知床',
			'小笠原諸島',
			'富士山',
			'白神山地'
		],
		correct: '小笠原諸島'},
{
		question: '知能数の一番高い犬種はどれでしょう',
		answers: [
			'ボーダーコリー',
			'チワワ',
			'コーギー',
			'シェパード'
		],
		correct: 'ボーダーコリー'}
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

// クイズの問題文、選択肢を定義
const setupQuiz = () => {
	document.getElementById('js-question').textContent = quiz[quizIndex].question;
	let buttonIndex = 0;
	while (buttonIndex < buttonLength) {
		$button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
		buttonIndex++;
	}
}

setupQuiz ();

const clickHandler = (e) => {
	if (quiz[quizIndex].correct === e.target.textContent) {
		window.alert('正解！');
		score++;
	} else {
		window.alert('不正解！');
	}
	
	quizIndex++;
	
	if (quizIndex < quizLength) {
		// 問題数がまだあれば、こちらを実行
		setupQuiz ();
	} else {
		// 問題数がもうなければ、こちらを実行
		window.alert ('終了！あなたの正解数は' + score + '/' + quizLength + 'です。');
	}
};

// ボタンをクリックしたら正誤判定

let handlerIndex = 0;
while (handlerIndex < buttonLength) {
	$button[handlerIndex].addEventListener('click' , (e) => {
	clickHandler (e);
	});
	handlerIndex++;
}
