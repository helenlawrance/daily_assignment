import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-helloancel',
  templateUrl: './helloancel.component.html',
  styleUrls: ['./helloancel.component.css']
})
export class HelloancelComponent implements OnInit {
message:string=new Date().toDateString();
anynumber:number=20;
  constructor() { }

  ngOnInit() {
  }
  
    addtwonumber(a:number,b:number)
    {
    return a+b;
  }

}
