func swapArray( _ array:inout Array<Int>, _ x:Int, _ y:Int) {
    if array.isEmpty {
        print("Wrong01 : 陣列請勿為空")
    }else if array.count < x || array.count < y {
        x == y ? print("Wrong03 : x與y超出範圍") : (x > y ? print("Wrong03 : x超出範圍"):print("Wrong03 : y超出範圍"))
    }else if array.count < 2 {
        print("Wrong02 : 陣列太短")
    }else{
        swap(&array[x], &array[y])
//        let temp = array[x]
//        array[x] = array[y]
//        array[y] = temp
        print(array.description)
    }
}

var a6:[Int] = [1,2,3,4,5]
var a7:[Int] = []
swapArray(&a6,2,4)
