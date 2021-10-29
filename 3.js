function km_count(km, hour){
    var res = km * hour;
    printRes(res);
    return res;

}
function printRes(res){
    var word = res == 1 ? "Вы продаете: 1 километр" : "Вы продаете:" + res + "километров";
    console.log(word);

}

var res = km_count(21, 2.4);