package main

import (
    "log"
    "os"
    "fmt"
    "encoding/csv"
    "io"
    "strconv"
)

type Records struct {
    TotalNum int
    NumOfType []int
    BiggestZip int
}

func main() {
    file, err := os.Open("zip_code_database.csv")
    var records Records   
    biggestPop := 0
    if err != nil {
        log.Fatal(err)
    } else {
        first := true
        r := csv.NewReader(file)
        for {
            record, err := r.Read()
            if err == io.EOF {
                break
            }
            if err != nil {
                log.Fatal(err)
            }      
            if first {
                first = false 
                continue
            }      
            fmt.Println(record[0])
            records.TotalNum++
            if record[1] == "STANDARD" {
                records.NumOfType[0]++
            } else if record[1] == "UNIQUE" {
                records.NumOfType[1]++
            } else if record[1] == "PO BOX" {
                records.NumOfType[2]++
            }
            i, err := strconv.ParseInt(record[14], 10, 64)
            if int(i) > biggestPop {
                records.BiggestZip = int(i) 
            }
        }
        records.Print()
    }
    file.Close()
}