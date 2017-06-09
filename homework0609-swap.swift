func swapArray( _ array:inout Array<Int>, _ x:Int, _ y:Int) {
    if array.isEmpty {
        print("Wrong01 : 陣列請勿為空")
    }else if x == y { print("Wrong02 : x和y請勿一樣")
    }else if array.count-1 < x || array.count-1 < y {
        array.count-1 < x && array.count-1 < y ? print("Wrong03: x與y都超過範圍") :
        (x > y ? print("Wrong03 : x超出範圍"):print("Wrong03 : y超出範圍"))
    }else if x < 0 || y < 0{
        x < 0 && y < 0 ? print("Wrong04 : x值與y值請勿為負值") : (x < 0 ? print("Wrong04 : x值請勿為負值") : print("Wrong04 : y值請勿為負值"))
    }else{
        swap(&array[x], &array[y])
//        let temp = array[x]
//        array[x] = array[y]
//        array[y] = temp
        print(array.description)
    }
}

var a6:[Int] = [1,2,3,4,5]
var a7:[Int] = [1]
swapArray(&a7,1,2)
