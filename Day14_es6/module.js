function show(){
    document.write("show!!<br>");
    alert('show from JS');
}


//다른곳에서 show()를 사용하게 하려면 추출(export)해야함
export default show;    //default 키워드를 가진 것은 문서에 1개 있어야함



export function aaa(){
    alert('aaa');
}

//export default aaa;   //error -1개의 문서에는 default가 1개만 가능 
export const num=100;
export let age="변수";
