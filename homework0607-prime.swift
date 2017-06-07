func falockprime(max:Int,col:Int){
    let row = max/col
    var row2 = 0
    if max%col == 0 {
        row2 += 0
    }else{
        row2 += 1
    }
    for j in 0..<Int(row)+Int(row2) {
        var i = 0
        while i < Int(col) {
            i += 1
            var newi = i + j * col
            if newi > max {
                break
            }else{
            var k = 0
            var l = 0
            while k <= Int(sqrt(Double(newi))) {
                k += 1
                if newi % k == 0{
                    l += 1
                }
            }
            if newi == 1{
                print(newi,"  ", terminator: "\t"+"\t")
            }else if newi == 2 {
                print(newi,"Ｏ", terminator: "\t"+"\t")
            }else if l > 1 {
                print(newi,"  ", terminator: "\t"+"\t")
            }else{
                print(newi,"Ｏ", terminator: "\t"+"\t")
                }
            }
            }
            print()
        }
    }
