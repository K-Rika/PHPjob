let numbers = [2, 5, 12, 13, 15, 18, 22];

//ここに答えを実装してください。↓↓↓]
//問１
function isEven() {

    for(let i = 0 ; i <= numbers.length-1 ; i++){
        num = numbers[i];
        if(num%2==0){
            console.log(num + 'は偶数です');
        }
    }
    
}

//偶数のみ出力
isEven();

//問２
//Carクラス
class Car{
    constructor(gasolene,number){
        this.gasolene = gasolene;
        this.number = number;
    }    
}

//出力関数
function getNumGas(){
    let carParam = new Car(12,34);
    console.log('ガソリンは' + carParam.gasolene + 'です。ナンバーは' + carParam.number + 'です。');
}

getNumGas();