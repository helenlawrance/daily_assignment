import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-studentlist',
  templateUrl: './studentlist.component.html',
  styleUrls: ['./studentlist.component.css']
})
export class StudentlistComponent implements OnInit {public StudentDetails:any=
  [{rollno:"1",name:"Helen",batch:"batch 1",department:"MCA"},
  {rollno:"2",name:"Riya",batch:"batch 2",department:"MCA"},
  {rollno:"3",name:"Neethu",batch:"batch 3",department:"MCA"}];

  studdetail:any;
  addStudent(data:any){
  this.studdetail=data;
  }

  constructor() { }

  ngOnInit() {
  }

}
