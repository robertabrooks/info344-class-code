package main

import (
    "fmt"
    "time"
)

func main() {
    var months [12]string
    
    for idx := 0; idx < 12; idx++ {
        months[idx] = time.Month(idx + 1).String()
    }
    fmt.Println(months)
    // fmt.Println(months[1:4])
    // fmt.Println(months[:5])
    
    var dynoMonths []string
    
    for idx := 0; idx < 12; idx++ {
        dynoMonths = append(dynoMonths, time.Month(idx + 1).String())
    }
    fmt.Println(dynoMonths)
    
}

// slices can be freely passed to another function by parameter

// slices 
    // 1. the start of the memory block, 
    // 2. the length of the memory block (may not be the full array) 
    // 3. the capacity fo the memory block