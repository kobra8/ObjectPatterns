var i = 0;

function countNumbers(){
	i = i + 1;
	postMessage(i); 	//Wysyłamy bieżącą wartość licznika do głównego skryptu aplikacji
	setTimeout("countNumbers()",100);
}

countNumbers();