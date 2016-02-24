package main

import (
    "github.com/robertabrooks/info344-class-code/gotypes/structs/person"
)

func main() {
    prs := person.NewPerson("Robert", "Brooks") 
    prs.FirstName = "Bobby"
    
    prs.SayHello()
}
