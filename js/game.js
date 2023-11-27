var prNum, tempOut;
prNum = Math.floor((Math.random() * 10)+(Math.random()*10)+0.5+1);
tempOut.innerHTML=prNum;
function fl(){
    var num, out ;
var all=1;
num = document.getElementById('mynum').value;
    out = document.getElementById('out');
         

         if (num==prNum){
        out.innerHTML='Поздравляем! Вы угадали число '+ prNum + ' за '+ all + ' попыток!';
    }
    else if (num>prNum){
        out.innerHTML='Введите число меньше';
    }

    else{
        out.innerHTML='Введите число больше';
    
    }
}