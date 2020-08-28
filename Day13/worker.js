// var n=0;
// while(true){
//     n++;
//     //document.getElementById('hh').innerHTML=
//     //worker는 UI뱐걍 작업을 할 수 없음

//     //그래서 Main Thread에게 출력을 대신 해달라고 요청해야함
//     postMessage(n);
//     //while문은 너무 속도가 빨라서 제대로 동작 안될수있음
// }

var n=0;
function fff(){
    n++;
    postMessage(n);

    setTimeout(fff, 500);  //500ms 후에 fff함수 실행- 5초후에 반복함
}


fff();